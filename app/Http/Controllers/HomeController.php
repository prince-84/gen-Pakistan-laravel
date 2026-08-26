<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HomepageAction;
use App\Models\HomepageBanner;
use App\Models\HomepageResource;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $banner = HomepageBanner::first();
        $action = HomepageAction::first();
        $resources = HomepageResource::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('home', compact('services', 'banner', 'action', 'resources'));
    }
}