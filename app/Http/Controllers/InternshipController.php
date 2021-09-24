<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Internship;
use App\Models\Perk;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    
    public function showInternshipForm()
    {
        // $cat = Category::orderBy('name', 'asc')->get();
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        return view('employer.postInternship', compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitInternshipForm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'salary' => 'required|integer',
            'openings' => 'required|integer',
            'duration' => 'required',
            'last_date' => 'required'
        ]);

        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        $job = new Internship();

        $job->title = $request->title;
        $job->description = $request->description;
        $job->category = $request->category;
        $job->salary = $request->salary;
        $job->openings = $request->openings;
        $job->duration = $request->duration;
        $job->last_date = $request->last_date;

        $emp->internship()->save($job);

        $internship = Internship::orderBy('id', 'DESC')->first();

        $perk = new Perk();

        if($request->perk1 == '')
        {
            $perk->perk1 = 0;
        }
        else
        {
            $perk->perk1 = $request->perk1;
        }

        if($request->perk2 == '')
        {
            $perk->perk2 = 0;
        }
        else
        {
            $perk->perk2 = $request->perk2;
        }

        if($request->perk3 == '')
        {
            $perk->perk3 = 0;
        }
        else
        {
            $perk->perk3 = $request->perk3;
        }

        if($request->perk4 == '')
        {
            $perk->perk4 = 0;
        }
        else
        {
            $perk->perk4 = $request->perk4;
        }

        $a = $internship->perk()->save($perk);

        if($a)
        {
            return back()->with('success', 'Internship is Addedd Successfully, But It is in Pending Now!!');
        }
        else
        {
            return back()->with('fail', 'something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }

    public function internships()
    {
        $internship = Internship::all();

        return view('pages.internships', compact('internship'));
    }
}
