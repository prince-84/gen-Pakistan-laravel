<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HomepageBanner;
use App\Models\HomepageAction;
use App\Models\HomepageResource;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function services()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function createService()
    {
        return view('admin.services.create');
    }

    public function storeService(Request $request)
    {
        $features = array_filter(array_map('trim', explode("\n", $request->features)));

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'features' => $features,
            'sort_order' => (Service::max('sort_order') ?? 0) + 1,
            'is_active' => true,
        ]);

        return redirect('/admin/services');
    }

    public function editService(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function updateService(Request $request, Service $service)
    {
        $features = array_filter(array_map('trim', explode("\n", $request->features)));

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'features' => $features,
        ]);

        return redirect('/admin/services');
    }

    public function deleteService(Service $service)
    {
        $service->delete();
        return redirect('/admin/services');
    }

    public function editBanner()
    {
        $banner = HomepageBanner::first();

        return view('admin.banner.edit', compact('banner'));
    }

    public function updateBanner(Request $request)
    {
        $banner = HomepageBanner::first();

        $banner->update([
            'label' => $request->label,
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return redirect('/admin/banner');
    }

    public function editAction()
    {
        $action = HomepageAction::first();

        return view('admin.action.edit', compact('action'));
    }

    public function updateAction(Request $request)
    {
        $action = HomepageAction::first();

        $action->update([
            'label' => $request->label,
            'heading' => $request->heading,
            'description' => $request->description,
            'primary_button_text' => $request->primary_button_text,
            'primary_button_url' => $request->primary_button_url,
            'secondary_button_text' => $request->secondary_button_text,
            'secondary_button_url' => $request->secondary_button_url,
            'quote' => $request->quote,
            'author_name' => $request->author_name,
            'author_role' => $request->author_role,
        ]);

        return redirect('/admin/action');
    }

    public function resources()
    {
        $resources = HomepageResource::orderBy('sort_order')->get();

        return view('admin.resources.index', compact('resources'));
    }

    public function createResource()
    {
        return view('admin.resources.create');
    }

    public function storeResource(Request $request)
    {
        HomepageResource::create([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'sort_order' => (HomepageResource::max('sort_order') ?? 0) + 1,
            'is_active' => true,
        ]);

        return redirect('/admin/resources');
    }

    public function editResource(HomepageResource $resource)
    {
        return view('admin.resources.edit', compact('resource'));
    }

    public function updateResource(Request $request, HomepageResource $resource)
    {
        $resource->update([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect('/admin/resources');
    }

    public function deleteResource(HomepageResource $resource)
    {
        $resource->delete();

        return redirect('/admin/resources');
    }
}