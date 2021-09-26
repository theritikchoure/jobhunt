<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Internship;
use App\Models\Job;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class EmployerController extends Controller
{
    public function index()
    {
        return view('employer.register');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employers,email',
            'password' => 'min:6,confirmed,required_with:confirm_password',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'contact_no' => 'required',
            'website' => 'required',
            'linkedin' => 'required',
            'logo' => 'required|mimes:jpg,png,jpeg',
        ]);

        

        $employer = new Employer();

        $employer->name = $request->name;
        $employer->description = $request->description;
        $employer->email = $request->email;
        $employer->password = Hash::make($request->password);
        $employer->address = $request->address;
        $employer->city = $request->city;
        $employer->state = $request->state;
        $employer->zip_code = $request->zip_code;
        $employer->contact_no = $request->contact_no;
        $employer->website = $request->website;
        $employer->linkedin = $request->linkedin;

        if($request->hasFile('logo'))
        {
            $image = $request->file('logo');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/employer'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $employer->logo = $image_name;
        }

        $save = $employer->save();

        if($save)
        {
            $email_data = array(
                'name' => $request->name,
                'email' => $request->email,
            );
        
            dispatch(function(){
                
            });
            // send email with the template
            Mail::send('emails.welcome', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject('Welcome to JobHunt');
            }); 
        }

        return redirect('login/employer')->with('success', 'Registered Successfully, Now Login !!');
    
    }

    public function login()
    {
        return view('employer.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $emplInfo = Employer::where('email', '=', $request->email)->first();

        if(!$emplInfo)
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }
        else
        {
            if(Hash::check($request->password, $emplInfo->password))
            {
                $request->session()->put('LoggedEmp', $emplInfo->id);
                return redirect('/employer/dashboard')->with('success', 'Welcome to Your Dashboard');
            }
            else
            {
                return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
            }
        }
    }

    public function dashboard()
    {
        // $int = Internship::where('employer_id', '=', session('LoggedEmp'))->
        //                    orderBy('id', 'desc') ->get();

        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();
        return view('employer.dashboard', compact('emp'));
    }

    public function showProfile()
    {
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        return view('employer.profile', compact('emp'));
    }

    public function updateProfile(Request $request)
    {
        $employer = Employer::where('id', '=', session('LoggedEmp'))->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required', Rule::unique('employers')->ignore($employer->id),
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'contact_no' => 'required',
            'website' => 'required',
            'linkedin' => 'required',
        ]);

        

        $employer->name = $request->name;
        $employer->description = $request->description;
        $employer->email = $request->email;
        $employer->address = $request->address;
        $employer->city = $request->city;
        $employer->state = $request->state;
        $employer->zip_code = $request->zip_code;
        $employer->contact_no = $request->contact_no;
        $employer->website = $request->website;
        $employer->linkedin = $request->linkedin;

        if($request->hasFile('logo'))
        {
            $image = $request->file('logo');
            $ext = $image->extension();
            $image_name =time().'.'.$ext;
            $image->move(public_path('images/employer'), $image_name);
            // $image->storeAs('/public/images', $image_name);

            $employer->logo = $image_name;
        }
        else
        {
            $employer->logo = $employer->logo;
        }

        $save = $employer->save();

        if($save)
        {
            $email_data = array(
                'name' => $request->name,
                'email' => $request->email,
            );
        
            // send email with the template
            Mail::send('emails.profileupdated', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject('Your Profile Has Been Updated');
            });
        }

        return back()->with('success', 'Profile Updated Successfully!!');

    }

    public function allApplications()
    {
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        return view('employer.viewApplication', compact('emp'));
    }

    public function viewStuApplications($id)
    {
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();
        $int = Internship::where('id', '=', $id)->first();

        return view('employer.viewstuapplications', compact('int', 'emp'));
    }

    public function shortlistorreject($intid, $stuid, $status)
    {
        $status = DB::table('internship_student')
                        ->where(['internship_id' => $intid, 'student_id' => $stuid,])
                        ->update(['status' => $status]);
        
        return back();
    }

    public function viewStuProfile($id)
    {
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        $stu = Student::find($id);

        return view('employer.viewStuProfile', compact('emp', 'stu'));
    }

    public function manage_internships()
    {
        $int = Internship::where('employer_id', '=', session('LoggedEmp'))->
                           orderBy('id', 'desc') ->get();

        return view('employer.manage_internship', compact('int'));
    }

    public function showChangePassword()
    {
        return view('employer.changePassword');
    }

    public function updateChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'min:6|required',
            'password' => 'min:6,confirmed,required_with:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        if(Hash::check($request->old_password, $emp->password))
        {
            $emp->password = Hash::make($request->password);
            $emp->save();
            return back()->with('success', 'Password Changed!!');
        }
        else
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }

    }

    public function logout()
    {
        if(session()->has('LoggedEmp'))
        {
            session()->pull('LoggedEmp');
            return redirect('login/employer')->with('success', 'Logout Successfully');
        }
    }
}
