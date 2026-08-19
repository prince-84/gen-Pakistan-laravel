<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function boardStaff()
    {
        return view('pages.board-staff');
    }

    public function compassAwards()
    {
        return view('pages.compass-awards');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function globalLeaders()
    {
        return view('pages.global-leaders');
    }

    public function managingDirectors()
    {
        return view('pages.managing-directors');
    }

    public function partners()
    {
        return view('pages.partners');
    }
}