<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HomepageBanner;
use App\Models\HomepageAction;
use App\Models\HomepageResource;
use App\Models\HomepageNews;
use App\Models\AboutPage;
use App\Models\PartnersPage;
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
    
    public function news()
    {
        $news = HomepageNews::orderBy('sort_order')->get();

        return view('admin.news.index', compact('news'));
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(Request $request)
    {
        HomepageNews::create([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'published_at' => $request->published_at,
            'is_featured' => false,
            'button_url' => $request->button_url,
            'sort_order' => (HomepageNews::max('sort_order') ?? 0) + 1,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect('/admin/news');
    }

    public function editNews(HomepageNews $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function updateNews(Request $request, HomepageNews $news)
    {
        $news->update([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'published_at' => $request->published_at,
            'is_featured' => $news->is_featured,
            'is_active' => $request->boolean('is_active'),
            'button_url' => $request->button_url,
        ]);

        return redirect('/admin/news');
    }

    public function setFeaturedNews(HomepageNews $news)
    {
        HomepageNews::where('is_featured', true)
            ->update(['is_featured' => false]);

        $news->update([
            'is_featured' => true,
        ]);

        return redirect('/admin/news');
    }

    public function deleteNews(HomepageNews $news)
    {
        $news->delete();

        return redirect('/admin/news');
    }

        public function editAbout()
    {
        $about = AboutPage::first();

        return view('admin.about.edit', compact('about'));
    }

    public function updateAbout(Request $request)
    {
        $about = AboutPage::first();

        $about->update([
            'page_heading' => $request->page_heading,
            'video_title' => $request->video_title,
            'video_url' => $request->video_url,
            'article_heading' => $request->article_heading,
            'article_content' => $request->article_content,
            'core_pillars' => $request->core_pillars,
            'impact_heading' => $request->impact_heading,
            'impact_items' => $request->impact_items,
        ]);

        return redirect('/admin/about');
    }

    public function editPartners()
    {
        $partners = PartnersPage::first();

        return view('admin.partners.edit', compact('partners'));
    }

    public function updatePartners(Request $request)
    {
        $partners = PartnersPage::first();

        $cleanPartners = function ($partners) {
            return collect($partners ?? [])
                ->map(fn ($partner) => trim($partner))
                ->filter()
                ->values()
                ->all();
        };

        $partners->update([
            'page_heading' => $request->page_heading,
            'introduction' => $request->introduction,
            'platinum_partners' => $cleanPartners($request->platinum_partners),
            'silver_partners' => $cleanPartners($request->silver_partners),
            'bronze_partners' => $cleanPartners($request->bronze_partners),
            'ecosystem_partners' => $cleanPartners($request->ecosystem_partners),
            'partnership_text' => $request->partnership_text,
            'apply_url' => $request->apply_url,
            'local_partnership_url' => $request->local_partnership_url,
            'contact_text' => $request->contact_text,
            'contact_person' => $request->contact_person,
            'contact_email' => $request->contact_email,
        ]);

        return redirect('/admin/partners');
    }
}