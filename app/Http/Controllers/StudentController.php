<?php

namespace App\Http\Controllers;

use App\Jobs\StudentProfileUpdateMailJob;
use App\Jobs\StudentWelcomeMailJob;
use App\Mail\StudentProfileUpdateMail;
use App\Mail\StudentWelcomeMail;
use App\Models\Education;
use App\Models\Internship;
use App\Models\InternshipStudent;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;




class StudentController extends Controller
{
    public function index()
    {
        return view('student.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:students,email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'address' => 'required',
            'college_name' => 'required',
            'degree' => 'required',
            'branch' => 'required',
            'pass_year' => 'required',
            'linkedin' => 'required|url',
            'image' => 'required|mimes:jpg,png,jpeg',
            'resume' => 'required|mimes:pdf,docx',
        ]);

        $student = new Student();

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->linkedin = $request->linkedin;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/student'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $student->image = $image_name;
        }

        if($request->hasFile('resume'))
        {
            $image = $request->file('resume');
            $ext = $image->extension();
            $resume_name =time().'.'.$ext;
            $image->move(public_path('resume/student'), $resume_name);
            // $image->storeAs('/public/images', $image_name);

            $student->resume = $resume_name;
        }

        $student->save();

        $student = Student::orderBy('id', 'DESC')->first();

        $education = new Education();

        $education->college_name = $request->college_name;
        $education->degree = $request->degree;
        $education->branch = $request->branch;
        $education->pass_year = $request->pass_year;

        $save = $student->education()->save($education);

        if($save)
        {
            // $email_data = array(
            //     'name' => $request->name,
            //     'email' => $request->email,
            // );
        
            // send email with the template
            // Mail::send('emails.welcomestu', $email_data, function ($message) use ($email_data) {
            //     $message->to($email_data['email'], $email_data['name'])
            //         ->subject('Welcome to JobHunt');
            // });

            $email_data = $request->email;
            dispatch(new StudentWelcomeMailJob($email_data));
        }

        return redirect('login/student')->with('success', 'Registered Successfully, Now Login !!');
    }

    public function login()
    {
        return view('student.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $studentInfo = Student::where('email', '=', $request->email)->first();

        if(!$studentInfo)
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }
        else
        {
            if(Hash::check($request->password, $studentInfo->password))
            {
                $request->session()->put('LoggedStu', $studentInfo->id);
                return redirect('student/dashboard')->with('success', 'Welcome to Your Dashboard');
            }
            else
            {
                return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
            }
        }
    }

    public function dashboard()
    {
        $stu = Student::where('id', '=', session('LoggedStu'))->first();
        return view('student.dashboard', compact('stu'));
    }

    public function appliedInternships()
    {
        if(session()->has('LoggedStu'))
        {
            $stu = Student::where('id', '=', session('LoggedStu'))->first();
            $data = [
                'LoggedDonorInfo' =>$stu
            ];
        }        

        return view('student.appliedInternships', compact('stu', 'data'));
    }

    public function shortlistedInternships()
    {
        $stu = Student::where('id', '=', session('LoggedStu'))->first(); 
        
        return view('student.shortlistedInternships', compact('stu'));
    }

    public function showProfile()
    {
        $stu = Student::where('id', '=', session('LoggedStu'))->first();

        return view('student.profile', compact('stu'));
    }

    public function updateProfile(Request $request)
    {
        $student = Student::where('id', '=', session('LoggedStu'))->first();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required', Rule::unique('students')->ignore($student->id),
            'address' => 'required',
            'college_name' => 'required',
            'degree' => 'required',
            'branch' => 'required',
            'pass_year' => 'required',
            'linkedin' => 'required|url',
        ]);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->address = $request->address;
        $student->linkedin = $request->linkedin;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/student'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $student->image = $image_name;
        }
        else
        {
            $student->image = $student->image;
        }

        if($request->hasFile('resume'))
        {
            $image = $request->file('resume');
            $ext = $image->extension();
            $resume_name =time().'.'.$ext;
            $image->move(public_path('resume/student'), $resume_name);
            // $image->storeAs('/public/images', $image_name);

            $student->resume = $resume_name;
        }
        else
        {
            $student->resume = $student->resume;
        }

        $student->save();

        $education = Education::where('student_id', $student->id)->first();

        $education->college_name = $request->college_name;
        $education->degree = $request->degree;
        $education->branch = $request->branch;
        $education->pass_year = $request->pass_year;

        $ed = $education->save();


        if($ed)
        {
            $email_data = $request->email;
            dispatch(new StudentProfileUpdateMailJob($email_data));
        }
        else
        {
            return back()->with('fail', 'semothing wnent wrong!!');
        }

        return back()->with('success', 'Profile Updated Successfully!!');

    }

    public function showChangePassword()
    {
        return view('student.changePassword');
    }

    public function updateChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'min:6|required',
            'password' => 'min:6,confirmed,required_with:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        $stu = Student::where('id', '=', session('LoggedStu'))->first();

        if(Hash::check($request->old_password, $stu->password))
        {
            $stu->password = Hash::make($request->password);
            $stu->save();
            return back()->with('success', 'Password Changed!!');
        }
        else
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }

    }

    public function logout()
    {
        if(session()->has('LoggedStu'))
        {
            session()->pull('LoggedStu');
            return redirect('login/student')->with('success', 'Logout Successfully');
        }
    }
}
