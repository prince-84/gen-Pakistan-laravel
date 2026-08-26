@extends('layouts.admin')

@section('title', 'Manage Resources')
@section('page-heading', 'Resources')

@section('content')
<div class="space-y-6">

    {{-- Page Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-corporate-primary">
                Manage Resources
            </h1>
            <p class="mt-1 text-slate-500">
                Manage the resources displayed on the GEN Pakistan website.
            </p>
        </div>

        <a href="/admin/resources/create" class="inline-flex items-center bg-corporate-primary hover:bg-corporate-secondary text-white px-5 py-3 rounded-lg font-semibold transition-colors">
            + Add Resource
        </a>
    </div>

    {{-- Resources List --}}
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="divide-y divide-slate-200">
            @forelse ($resources as $resource)
                <div class="p-6 flex items-center justify-between gap-4">
                    <div class="flex items-center gap-4 min-w-0">
                        @if ($resource->image)
                            <img src="{{ $resource->image }}" alt="{{ $resource->title }}" class="w-16 h-16 object-cover rounded-lg border border-slate-200 flex-shrink-0">
                        @else
                            <div class="w-16 h-16 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 text-xs flex-shrink-0">
                                No Image
                            </div>
                        @endif

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 mb-1 flex-wrap">
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-600 border border-slate-200">
                                    {{ $resource->category }}
                                </span>
                                <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full border {{ $resource->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-amber-50 text-amber-700 border-amber-200' }}">
                                    {{ $resource->is_active ? 'Active' : 'Inactive' }}
                                </span>
                                <span class="text-xs text-slate-400">
                                    Order: {{ $resource->sort_order }}
                                </span>
                            </div>

                            <h3 class="font-bold text-lg text-corporate-primary truncate">
                                {{ $resource->title }}
                            </h3>

                            <p class="text-sm text-slate-500 mt-1 line-clamp-2">
                                {{ $resource->description }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 flex-shrink-0">
                        <a href="/admin/resources/{{ $resource->id }}/edit" class="px-4 py-2 text-sm font-semibold border border-slate-200 rounded-lg hover:bg-slate-50">
                            Edit
                        </a>
                        <form action="/admin/resources/{{ $resource->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resource?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 text-sm font-semibold text-red-600 border border-red-200 rounded-lg hover:bg-red-50">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="p-8 text-center text-slate-500">
                    No resources have been added yet.
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection