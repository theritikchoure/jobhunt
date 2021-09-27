<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedStu') && ($request->path() !='login/student') && ($request->path() !='register/student'))
        {
            return redirect('login/student')->with('fail', 'You must be logged in!!');
        }

        if(session()->has('LoggedStu') && ($request->path() =='login/student' || $request->path() == 'register/student') )
        {
            return back()->with('fail', 'You have already logged in!!');;
        }
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma', 'no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
