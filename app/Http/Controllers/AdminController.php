<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
            'email' => 'required|email',
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
        if(session()->has('LoggedAdmin'))
        {
            $admin = Admin::where('id', '=', session('LoggedAdmin'))->first();
        }

        return view('admin.dashboard', compact('admin'));
    }

}
