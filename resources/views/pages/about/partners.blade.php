@extends('layouts.app')

@section('title', 'Our Partners in Pakistan | GEN Pakistan')

@section('content')

<main class="min-h-screen bg-white pb-24">

    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Our Partners in Pakistan
            </h1>
        </div>
    </section>

    {{-- Partner Sections --}}
    <section class="py-12 md:py-16">

        <div class="container-custom max-w-6xl mx-auto space-y-20">

            @foreach ($partners->partner_sections ?? [] as $section)

                <section>

                    {{-- Section Heading --}}
                    <h3 class="text-center text-lg font-bold text-slate-500 uppercase tracking-[0.2em] mt-12 mb-10">
                        {{ $section['heading'] }}
                    </h3>

                    {{-- Logos: flex-wrap row of fixed-size sponsor cards --}}
                    <div class="flex flex-wrap items-center justify-center gap-6">

                        @foreach ($section['partners'] ?? [] as $partner)

                            @if (!empty($partner['logo']))

                                <a
                                    href="{{ $partner['url'] ?: '#' }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center justify-center flex-shrink-0 w-28 h-16 p-1 bg-white border border-slate-100 rounded-lg shadow-sm hover:shadow-md transition-all duration-300"
                                >
                                    <img
                                        src="{{ $partner['logo'] }}"
                                        alt="Partner"
                                        class="w-full h-full object-contain"
                                    >
                                </a>

                            @endif

                        @endforeach

                    </div>

                </section>

            @endforeach

        </div>

    </section>

</main>

@endsection