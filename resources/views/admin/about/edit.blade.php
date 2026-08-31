@extends('layouts.admin')

@section('title', 'Edit About GEN')
@section('page-heading', 'Edit About GEN')

@section('content')

<div class="max-w-4xl">

<div class="mb-6">
    <h1 class="text-2xl font-bold text-corporate-primary">
        Edit About GEN
    </h1>

    <p class="mt-1 text-slate-500">
        Update the content displayed on the About GEN page.
    </p>
</div>

<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

    <form action="/admin/about" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-8">

            {{-- Page Heading --}}
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Page Heading
                </label>

                <input
                    type="text"
                    name="page_heading"
                    value="{{ old('page_heading', $about->page_heading) }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                >
            </div>


            {{-- Video --}}
            <div class="border-t border-slate-200 pt-8">
                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Video
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Configure the video displayed near the top of the page.
                </p>

                <div class="space-y-6">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Video Title
                        </label>

                        <input
                            type="text"
                            name="video_title"
                            value="{{ old('video_title', $about->video_title) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Video URL
                        </label>

                        <input
                            type="url"
                            name="video_url"
                            value="{{ old('video_url', $about->video_url) }}"
                            placeholder="https://www.youtube.com/watch?v=..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                </div>
            </div>


            {{-- Article --}}
            <div class="border-t border-slate-200 pt-8">
                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Article
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the main article content displayed on the page.
                </p>

                <div class="space-y-6">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Article Heading
                        </label>

                        <input
                            type="text"
                            name="article_heading"
                            value="{{ old('article_heading', $about->article_heading) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Article Content
                        </label>

                        <textarea
                            name="article_content"
                            rows="12"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed"
                        >{{ old('article_content', $about->article_content) }}</textarea>

                        <p class="mt-2 text-xs text-slate-400">
                            Use a blank line between paragraphs.
                        </p>
                    </div>

                </div>
            </div>


            {{-- Core Pillars --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Core Pillars
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the four core pillars of GEN's work.
                </p>

                <div class="space-y-5">

                    @foreach ($about->core_pillars as $index => $pillar)

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">

                            <h3 class="text-sm font-bold text-slate-700 mb-4">
                                Pillar {{ $index + 1 }}
                            </h3>

                            <div class="space-y-4">

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        name="core_pillars[{{ $index }}][name]"
                                        value="{{ old("core_pillars.$index.name", $pillar['name']) }}"
                                        class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                                    >
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                                        Description
                                    </label>

                                    <textarea
                                        name="core_pillars[{{ $index }}][description]"
                                        rows="3"
                                        class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                                    >{{ old("core_pillars.$index.description", $pillar['description']) }}</textarea>
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


            {{-- Annual Impact --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Annual Impact
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the annual impact heading and impact statements.
                </p>

                <div class="space-y-6">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Impact Heading
                        </label>

                        <input
                            type="text"
                            name="impact_heading"
                            value="{{ old('impact_heading', $about->impact_heading) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div class="space-y-4">

                        @foreach ($about->impact_items as $index => $item)

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Impact {{ $index + 1 }}
                                </label>

                                <input
                                    type="text"
                                    name="impact_items[{{ $index }}]"
                                    value="{{ old("impact_items.$index", $item) }}"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>


            {{-- Actions --}}
            <div class="border-t border-slate-200 pt-6 flex items-center gap-3">

                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                >
                    Update About GEN
                </button>

                <a
                    href="/admin"
                    class="px-6 py-3 rounded-lg border border-slate-200 text-slate-600 font-semibold hover:bg-slate-50"
                >
                    Cancel
                </a>

            </div>

        </div>

    </form>

</div>

</div>

@endsection
