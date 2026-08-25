<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        $features = array_filter(
            array_map('trim', explode("\n", $request->features))
        );

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'features' => $features,
            'sort_order' => $request->sort_order,
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
        $features = array_filter(
            array_map('trim', explode("\n", $request->features))
        );

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'features' => $features,
            'sort_order' => $request->sort_order,
        ]);

        return redirect('/admin/services');
    }
    public function deleteService(Service $service)
    {
        $service->delete();

        return redirect('/admin/services');
    }
}