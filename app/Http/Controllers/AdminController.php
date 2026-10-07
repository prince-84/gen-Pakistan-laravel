<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HomepageBanner;
use App\Models\HomepageAction;
use App\Models\HomepageResource;
use App\Models\HomepageNews;
use App\Models\AboutPage;
use App\Models\PartnersPage;
use App\Models\TopLeadershipPage;
use App\Models\ContactPage;
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
            'top_image' => $request->top_image,
            'article_content' => $request->article_content,
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

        $sections = collect($request->partner_sections ?? [])
            ->map(function ($section) {

                $sectionPartners = collect($section['partners'] ?? [])
                    ->map(function ($partner) {
                        return [
                            'logo' => trim($partner['logo'] ?? ''),
                            'url' => trim($partner['url'] ?? ''),
                        ];
                    })
                    ->filter(function ($partner) {
                        return $partner['logo'] !== '' || $partner['url'] !== '';
                    })
                    ->values()
                    ->all();

                return [
                    'heading' => trim($section['heading'] ?? ''),
                    'partners' => $sectionPartners,
                ];
            })
            ->filter(function ($section) {
                return $section['heading'] !== '' || count($section['partners']) > 0;
            })
            ->values()
            ->all();

        $partners->update([
            'partner_sections' => $sections,
        ]);

        return redirect('/admin/partners');
    }

    public function editTopLeadership()
    {
        $leadership = TopLeadershipPage::first();

        if (!$leadership) {
            $leadership = TopLeadershipPage::create([
                'leaders' => [],
            ]);
        }

        return view('admin.top-leadership.edit', compact('leadership'));
    }

    public function updateTopLeadership(Request $request)
    {
        $leadership = TopLeadershipPage::first();

        if (!$leadership) {
            $leadership = TopLeadershipPage::create([
                'leaders' => [],
            ]);
        }

        $leaders = collect($request->leaders ?? [])
            ->map(function ($leader) {
                return [
                    'name' => trim($leader['name'] ?? ''),
                    'country' => trim($leader['country'] ?? ''),
                    'role' => trim($leader['role'] ?? ''),
                    'organization' => trim($leader['organization'] ?? ''),
                    'photo' => trim($leader['photo'] ?? ''),
                    'profile_url' => trim($leader['profile_url'] ?? ''),
                ];
            })
            ->filter(function ($leader) {
                return $leader['name'] !== '';
            })
            ->values()
            ->all();

        $leadership->update([
            'leaders' => $leaders,
        ]);

        return redirect('/admin/top-leadership');
    }

    public function editContact()
    {
        $contact = ContactPage::first();

        return view('admin.contact.edit', compact('contact'));
    }

    public function updateContact(Request $request)
    {
        $contact = ContactPage::first();

        $validated = $request->validate([
            'intro_paragraph_1' => ['required', 'string'],
            'intro_paragraph_2' => ['required', 'string'],
            'intro_paragraph_3' => ['required', 'string'],
            'phone' => ['nullable', 'string', 'max:50'],
            'quote' => ['required', 'string'],
            'facebook_url' => ['nullable', 'url'],
            'twitter_url' => ['nullable', 'url'],
            'linkedin_url' => ['nullable', 'url'],
            'youtube_url' => ['nullable', 'url'],
            'instagram_url' => ['nullable', 'url'],
        ]);

        $contact->update($validated);

        return redirect('/admin/contact');
    }
}