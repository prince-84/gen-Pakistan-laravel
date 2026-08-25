@extends('layouts.admin')

@section('title', 'Manage Services')
@section('page-heading', 'Services')

@section('content')

<div class="space-y-6">

    {{-- Page Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-corporate-primary">
                Manage Services
            </h1>

            <p class="mt-1 text-slate-500">
                Manage the services displayed on the GEN Pakistan website.
            </p>
        </div>

        <button class="bg-corporate-primary hover:bg-corporate-secondary text-white px-5 py-3 rounded-lg font-semibold transition-colors">
            + Add Service
        </button>
    </div>

    {{-- Services --}}
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">

        <div class="divide-y divide-slate-200">

            @forelse ($services as $service)

                <div class="p-6 flex items-center justify-between">

                    <div>
                        <h3 class="font-bold text-lg text-corporate-primary">
                            {{ $service->title }}
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            {{ $service->description }}
                        </p>
                    </div>

                    <div class="flex gap-2">

                        <button class="px-4 py-2 text-sm font-semibold border border-slate-200 rounded-lg hover:bg-slate-50">
                            Edit
                        </button>

                        <button class="px-4 py-2 text-sm font-semibold text-red-600 border border-red-200 rounded-lg hover:bg-red-50">
                            Delete
                        </button>

                    </div>

                </div>

            @empty

                <div class="p-8 text-center text-slate-500">
                    No services have been added yet.
                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection