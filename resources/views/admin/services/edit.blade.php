@extends('layouts.admin')

@section('title', 'Edit Service')
@section('page-heading', 'Edit Service')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Edit Service
        </h1>

        <p class="mt-1 text-slate-500">
            Update the service information displayed on the GEN Pakistan website.
        </p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/services/{{ $service->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Service Title
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ $service->title }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="4"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >{{ $service->description }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Features
                    </label>

                    <textarea
                        name="features"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >{{ implode("\n", $service->features ?? []) }}</textarea>

                    <p class="text-xs text-slate-500 mt-2">
                        Enter each feature on a separate line.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Sort Order
                    </label>

                    <input
                        type="number"
                        name="sort_order"
                        value="{{ $service->sort_order }}"
                        min="0"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div class="flex items-center gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                    >
                        Update Service
                    </button>

                    <a
                        href="/admin/services"
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