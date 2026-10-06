@extends('layouts.app')

@section('title', 'Our Partners in Pakistan | GEN Pakistan')

@section('content')

<main class="min-h-screen bg-white ">

    {{-- Introductory Paragraph --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom max-w-6xl mx-auto text-center">
            <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
                Global Entrepreneurship Network (GEN) Pakistan works with a diverse range of institutional, educational, government, and ecosystem partners. The following organizations have signed official Memorandums of Understanding (MOUs) or maintain strategic collaborations with GEN Pakistan
            </p>
        </div>
    </section>

    {{-- Page Heading --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                ECOSYSTEM PARTNERS
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

    {{-- Closing Paragraph --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100 mt-16">
        <div class="container-custom max-w-6xl mx-auto text-center">
            <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
                If you are interested in entering into a non-financial partnership with GEN, please apply here. Please note that GEN requires a minimum of three-year partnership timelines to allow the parties to develop usual and relevant support for each other's programs. For further information please email awaqarmohsin@genglobal.org and the appropriate GEN Team member will respond within 2 business days.
            </p>
            <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
                For questions about sponsorships or grant related partnerships, please contact Alejandra Molina at awaqarmohsin@genglobal.org.
            </p>
        </div>
    </section>

</main>

@endsection