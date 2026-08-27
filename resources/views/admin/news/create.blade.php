@extends('layouts.admin')

@section('title', 'Add News')
@section('page-heading', 'Add News')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Add News
        </h1>

        <p class="mt-1 text-slate-500">
            Add a news article or insight to the GEN Pakistan website.
        </p>
    </div>


    <form action="/admin/news" method="POST" class="bg-white rounded-xl border border-slate-200 shadow-sm p-8 space-y-6">

        @csrf


        {{-- Category --}}
        <div>
            <label for="category" class="block text-sm font-semibold text-slate-700 mb-2">
                Category
            </label>

            <input
                type="text"
                id="category"
                name="category"
                value="{{ old('category') }}"
                placeholder="e.g. Press Release"
                required
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >
        </div>


        {{-- Title --}}
        <div>
            <label for="title" class="block text-sm font-semibold text-slate-700 mb-2">
                Title
            </label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                placeholder="Enter news title"
                required
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >
        </div>


        {{-- Description --}}
        <div>
            <label for="description" class="block text-sm font-semibold text-slate-700 mb-2">
                Description
            </label>

            <textarea
                id="description"
                name="description"
                rows="5"
                placeholder="Enter a short description"
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >{{ old('description') }}</textarea>
        </div>


        {{-- Image --}}
        <div>
            <label for="image" class="block text-sm font-semibold text-slate-700 mb-2">
                Image Path
            </label>

            <input
                type="text"
                id="image"
                name="image"
                value="{{ old('image') }}"
                placeholder="e.g. images/news-featured.png"
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >

            <p class="mt-1 text-xs text-slate-400">
                Enter the path of an image inside the public folder.
            </p>
        </div>


        {{-- Published Date --}}
        <div>
            <label for="published_at" class="block text-sm font-semibold text-slate-700 mb-2">
                Published Date
            </label>

            <input
                type="date"
                id="published_at"
                name="published_at"
                value="{{ old('published_at') }}"
                required
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >
        </div>


        {{-- Button URL --}}
        <div>
            <label for="button_url" class="block text-sm font-semibold text-slate-700 mb-2">
                Button URL
            </label>

            <input
                type="text"
                id="button_url"
                name="button_url"
                value="{{ old('button_url') }}"
                placeholder="e.g. /news/article-name"
                class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 focus:border-corporate-accent"
            >
        </div>

        {{-- Active --}}
        <div class="flex items-center gap-3">

            <input
                type="checkbox"
                id="is_active"
                name="is_active"
                value="1"
                {{ old('is_active', true) ? 'checked' : '' }}
                class="w-4 h-4 rounded border-slate-300 text-corporate-accent focus:ring-corporate-accent"
            >

            <label for="is_active" class="text-sm font-semibold text-slate-700">
                Active
            </label>

        </div>
        <p class="ml-7 text-xs text-slate-400">
            Inactive news will not appear on the public website.
        </p>

        {{-- Buttons --}}
        <div class="flex items-center gap-3 pt-4 border-t border-slate-200">

            <button
                type="submit"
                class="px-5 py-3 bg-corporate-primary hover:bg-corporate-secondary text-white rounded-lg font-semibold transition-colors"
            >
                Add News
            </button>

            <a
                href="/admin/news"
                class="px-5 py-3 border border-slate-200 rounded-lg font-semibold text-slate-600 hover:bg-slate-50 transition-colors"
            >
                Cancel
            </a>

        </div>

    </form>

</div>

@endsection