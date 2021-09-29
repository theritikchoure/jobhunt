<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employer;
use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        $admin->save();

        return redirect('admin/login')->with('success', 'You have Registered Successfully!!');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password'=> 'required',
        ]);

        $adminInfo = Admin::where('email', '=', $request->email)->first();

        if(!$adminInfo)
        {
            return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
        }
        else
        {
            if(Hash::check($request->password, $adminInfo->password))
            {
                $request->session()->put('LoggedAdmin', $adminInfo->id);
                return redirect('admin/dashboard');
            }
            else
            {
                return back()->with('fail', 'Credentials Are Wrong, Try Again With Right Credentials!!');
            }
        }
    }

    public function dashboard()
    {
        // if(session()->has('LoggedAdmin'))
        // {
        //     $admin = Admin::where('id', '=', session('LoggedAdmin'))->first();
        // }

        return view('admin.dashboard');
    }

    public function allEmployers()
    {
        $emp = Employer::whereNotIn('status', [1])
                        ->orderBy('updated_at', 'desc')
                        ->get();
        return view('admin.allEmployers', compact('emp'));
    }

    public function pendingEmployers()
    {
        $emp = Employer::where('status', [1])->orderBy('updated_at', 'desc')->get();
        return view('admin.pendingEmployers', compact('emp'));
    }

    public function employerStatus($id, $status)
    {
        $emp = Employer::find($id);

        $emp->status = $status;
        $emp->save();
        return back();
    }

    public function allInternships()
    {
        $int = Internship::whereNotIn('status', [1])
                        ->orderBy('updated_at', 'desc')
                        ->get();
        return view('admin.allInternships', compact('int'));
    }

    public function pendingInternships()
    {
        $int = Internship::where('status', [1])->orderBy('updated_at', 'desc')->get();
        return view('admin.pendingInternships', compact('int'));
    }

    public function internshipStatus($id, $status)
    {
        $int = Internship::find($id);

        $int->status = $status;
        $int->save();
        return back();
    }

}
