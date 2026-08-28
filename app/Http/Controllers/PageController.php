<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about.about');
    }

    public function topLeadership()
    {
        return view('pages.about.top-leadership');
    }

    public function regionalLeadership()
    {
        return view('pages.about.regional-leadership');
    }

    public function compassAwards()
    {
        return view('pages.about.compass-awards');
    }

    public function contact()
    {
        return view('pages.about.contact');
    }

    public function globalLeaders()
    {
        return view('pages.about.global-leaders');
    }

    public function partners()
    {
        return view('pages.about.partners');
    }

    public function nationalInternshipProgram()
    {
        return view('pages.about.national-internship-program');
    }   

    public function youthAmbassadorProgram()
    {
        return view('pages.about.youth-ambassador-program');
    }

}