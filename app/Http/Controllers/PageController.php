<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Internship;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $search = $request->search;
            $int = Internship::where('title', 'like', '%'.$search.'%')
                             ->orwhere('category', 'like', '%'.$search.'%')  
                             ->orderby('id', 'desc')->paginate(10);
            $cat = Category::where('status', '1')->limit(5)->get();
        }
        else
        {
            $int = Internship::orderBy('id', 'desc')->paginate(10);
            $cat = Category::where('status', '1')->limit(5)->get();
        }
        return view('welcome', compact('int', 'cat'));
    }
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function how_it_work()
    {
        return view('pages.howitwork');
    }

    public function termcon()
    {
        return view('pages.termcon');
    }
}
