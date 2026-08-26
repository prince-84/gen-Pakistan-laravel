@extends('layouts.admin')

@section('title', 'Edit Homepage Banner')
@section('page-heading', 'Edit Homepage Banner')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Edit Homepage Banner
        </h1>

        <p class="mt-1 text-slate-500">
            Update the banner content displayed on the GEN Pakistan homepage.
        </p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/banner" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Section Label
                    </label>

                    <input
                        type="text"
                        name="label"
                        value="{{ $banner->label }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="heading"
                        value="{{ $banner->heading }}"
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
                    >{{ $banner->description }}</textarea>
                </div>

                <div class="flex items-center gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                    >
                        Update Banner
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