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
            Update the content displayed on the About GEN in Pakistan page.
        </p>
    </div>


    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/about" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-8">

                {{-- Top Image --}}
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Top Image URL
                    </label>

                    <input
                        type="url"
                        name="top_image"
                        value="{{ old('top_image', $about->top_image) }}"
                        placeholder="https://example.com/image.jpg"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >

                    <p class="mt-2 text-xs text-slate-400">
                        Enter the URL of the image displayed at the top of the page.
                    </p>

                </div>


                {{-- Article Content --}}
                <div class="border-t border-slate-200 pt-8">

                    <h2 class="text-lg font-bold text-corporate-primary mb-1">
                        Article Content
                    </h2>

                    <p class="text-sm text-slate-500 mb-6">
                        Update the content displayed below the image.
                    </p>

                    <textarea
                        name="article_content"
                        rows="20"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed font-mono text-sm"
                    >{{ old('article_content', $about->article_content) }}</textarea>

                    <p class="mt-2 text-xs text-slate-400">
                        You may use HTML for links and bold text. Separate paragraphs with a blank line.
                    </p>

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