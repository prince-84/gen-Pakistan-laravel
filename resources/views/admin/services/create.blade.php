@extends('layouts.admin')

@section('title', 'Add Service')
@section('page-heading', 'Add Service')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Add Service
        </h1>

        <p class="mt-1 text-slate-500">
            Add a new service to the GEN Pakistan website.
        </p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/services" method="POST">
    @csrf

            <div class="space-y-6">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Service Title
                    </label>

                    <input
                        type="text"
                        name="title"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-corporate-primary focus:ring-corporate-primary"
                        placeholder="e.g. Business Consultancy Services"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="4"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-corporate-primary focus:ring-corporate-primary"
                        placeholder="Describe this service..."
                    ></textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Features
                    </label>

                    <textarea
                        name="features"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-corporate-primary focus:ring-corporate-primary"
                        placeholder="Enter one feature per line"
                    ></textarea>

                    <p class="text-xs text-slate-500 mt-2">
                        Enter each feature on a separate line.
                    </p>
                </div>

                <div class="flex items-center gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold transition-colors"
                    >
                        Save Service
                    </button>

                    <a
                        href="/admin/services"
                        class="px-6 py-3 rounded-lg border border-slate-200 text-slate-600 font-semibold hover:bg-slate-50 transition-colors"
                    >
                        Cancel
                    </a>

                </div>

            </div>

        </form>

    </div>

</div>

@endsection