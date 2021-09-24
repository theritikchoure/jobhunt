<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class EmpFPController extends Controller
{
    public function showForgetPasswordForm()
    {
       return view('employer.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $val = $request->validate([
            'email' => 'required|email|exists:employers',
        ]);

        $token = Str::random(64);

        $save = DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        if($save)
        {
            $email_data = array(
                'email' => $request->email,
                'token' => $token,
            );

        
            // send email with the template
            Mail::send('emails.forgetPassword', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'])
                    ->subject('Reset Password');
            });
        }

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    
    public function showResetPasswordForm($token) { 
       return view('employer.resetpassword', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:employers',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = Employer::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('login/employer')->with('success', 'Your password has been changed!');
    }
}
