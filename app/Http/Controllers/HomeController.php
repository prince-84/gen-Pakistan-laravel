<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HomepageBanner;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $banner = HomepageBanner::first();

        return view('home', compact('services', 'banner'));
    }
}