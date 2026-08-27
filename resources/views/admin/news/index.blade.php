@extends('layouts.admin')

@section('title', 'Manage News')
@section('page-heading', 'News')

@section('content')

<div class="space-y-6">

    {{-- Page Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-corporate-primary">
                Manage News
            </h1>

            <p class="mt-1 text-slate-500">
                Manage the news and insights displayed on the GEN Pakistan website.
            </p>
        </div>

        <a href="/admin/news/create"
           class="inline-flex items-center bg-corporate-primary hover:bg-corporate-secondary text-white px-5 py-3 rounded-lg font-semibold transition-colors">
            + Add News
        </a>
    </div>


    {{-- News List --}}
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">

        <div class="divide-y divide-slate-200">

            @forelse ($news as $item)

                <div class="p-6 flex items-center justify-between gap-4
                    border-l-4
                    {{ $item->is_featured
                        ? 'bg-slate-200 border-corporate-accent'
                        : 'bg-white border-transparent' }}">

                    <div class="flex items-center gap-4 min-w-0">

                        {{-- Image --}}
                        @if ($item->image)

                            <img
                                src="{{ asset($item->image) }}"
                                alt="{{ $item->title }}"
                                class="w-20 h-16 object-cover rounded-lg border border-slate-200 flex-shrink-0"
                            >

                        @else

                            <div class="w-20 h-16 bg-slate-200 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 text-xs flex-shrink-0">
                                No Image
                            </div>

                        @endif


                        <div class="min-w-0">

                            {{-- Metadata --}}
                            <div class="flex items-center gap-2 mb-1 flex-wrap">

                                <span class="text-xs font-semibold px-4 py-1 rounded-full bg-slate-200 text-slate-600 border border-slate-300">
                                    {{ $item->category }}
                                </span>

                                @if ($item->is_featured)

                                    <span class="text-xs font-semibold px-4 py-1 rounded-full bg-corporate-accent/10 text-corporate-accent border border-corporate-accent/20">
                                        ★ Featured
                                    </span>

                                @endif

                                <span class="text-xs font-semibold px-4 py-1 rounded-full border {{ $item->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-amber-50 text-amber-700 border-amber-200' }}">
                                    {{ $item->is_active ? 'Active' : 'Inactive' }}
                                </span>

                            </div>


                            {{-- Title --}}
                            <h3 class="font-bold text-lg text-corporate-primary truncate">
                                {{ $item->title }}
                            </h3>


                            {{-- Date --}}
                            <p class="text-sm text-slate-500 mt-1">
                                Published:
                                {{ $item->published_at->format('F j, Y') }}
                            </p>

                        </div>

                    </div>


                    {{-- Actions --}}
                    <div class="flex items-center gap-2 flex-shrink-0">

                        @if ($item->is_featured)

                            <span class="px-4 py-2 text-sm font-semibold text-corporate-accent border border-corporate-accent/30 bg-white rounded-lg">
                                Featured
                            </span>

                        @else

                            <form
                                action="/admin/news/{{ $item->id }}/featured"
                                method="POST"
                            >
                                @csrf
                                @method('PUT')

                                <button
                                    type="submit"
                                    class="px-4 py-2 text-sm font-semibold text-corporate-primary border border-slate-200 rounded-lg hover:bg-white hover:border-corporate-accent hover:text-corporate-accent transition-colors"
                                >
                                    Set as Featured
                                </button>

                            </form>

                        @endif


                        <a href="/admin/news/{{ $item->id }}/edit"
                           class="px-4 py-2 text-sm font-semibold border border-slate-200 rounded-lg hover:bg-white">
                            Edit
                        </a>


                        <form
                            action="/admin/news/{{ $item->id }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this news item?');"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="px-4 py-2 text-sm font-semibold text-red-600 border border-red-200 rounded-lg hover:bg-red-50"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="p-8 text-center text-slate-500">
                    No news has been added yet.
                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection 