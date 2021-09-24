<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
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
