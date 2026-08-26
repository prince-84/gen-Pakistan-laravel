@extends('layouts.admin')

@section('title', 'Edit Resource')
@section('page-heading', 'Edit Resource')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Edit Resource
        </h1>

        <p class="mt-1 text-slate-500">
            Update the resource information displayed on the GEN Pakistan website.
        </p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/resources/{{ $resource->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Category
                    </label>

                    <input
                        type="text"
                        name="category"
                        value="{{ $resource->category }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Resource Title
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ $resource->title }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >{{ $resource->description }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Image URL
                    </label>

                    <input
                        type="text"
                        name="image"
                        value="{{ $resource->image }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >

                    <p class="text-xs text-slate-500 mt-2">
                        Enter the URL of the image to display for this resource.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Button Text
                    </label>

                    <input
                        type="text"
                        name="button_text"
                        value="{{ $resource->button_text }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Button URL
                    </label>

                    <input
                        type="text"
                        name="button_url"
                        value="{{ $resource->button_url }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div class="flex items-center gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                    >
                        Update Resource
                    </button>

                    <a
                        href="/admin/resources"
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

