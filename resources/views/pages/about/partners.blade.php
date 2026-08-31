@extends('layouts.app')

@section('title', $partners->page_heading . ' | GEN Pakistan')

@section('content') <main class="min-h-screen bg-white pb-12">


    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                {{ $partners->page_heading }}
            </h1>
        </div>
    </section>


    {{-- Main Content --}}
    <section class="pt-20 pb-8">

        {{-- Introduction --}}
        <div class="container-custom max-w-4xl mx-auto text-center mb-20">
            <p class="text-[15px] text-slate-500 leading-relaxed font-medium px-4">
                {{ $partners->introduction }}
            </p>
        </div>


        <div class="container-custom max-w-5xl mx-auto space-y-24">

            {{-- Platinum --}}
            <div>
                <div class="w-full bg-slate-200 py-3 text-center mb-16 rounded-sm">
                    <h2 class="text-[11px] font-black text-slate-500 uppercase tracking-[0.25em]">
                        Platinum
                    </h2>
                </div>

                <div class="flex flex-wrap justify-center gap-16 md:gap-32">

                    @foreach ($partners->platinum_partners as $partner)
                        <div class="flex items-center justify-center px-8 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                            <span class="text-3xl md:text-4xl font-black tracking-tight text-slate-800">
                                {{ $partner }}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>


            {{-- Silver --}}
            <div>
                <div class="w-full bg-slate-200 py-3 text-center mb-16 rounded-sm">
                    <h2 class="text-[11px] font-black text-slate-500 uppercase tracking-[0.25em]">
                        Silver
                    </h2>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-12 md:gap-24">

                    @foreach ($partners->silver_partners as $partner)
                        <div class="flex items-center justify-center px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                            <span class="text-xl md:text-2xl font-black tracking-tight text-slate-800">
                                {{ $partner }}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>


            {{-- Bronze --}}
            <div>
                <div class="w-full bg-slate-200 py-3 text-center mb-16 rounded-sm">
                    <h2 class="text-[11px] font-black text-slate-500 uppercase tracking-[0.25em]">
                        Bronze
                    </h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-x-8 gap-y-12 px-8">

                    @foreach ($partners->bronze_partners as $partner)
                        <div class="flex items-center justify-center text-center min-h-[40px]">
                            <span class="text-xl md:text-lg font-bold tracking-tight text-slate-700">
                                {{ $partner }}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>


            {{-- Ecosystem Partner --}}
            <div>
                <div class="w-full bg-slate-200 py-3 text-center mb-16 rounded-sm">
                    <h2 class="text-[11px] font-black text-slate-500 uppercase tracking-[0.25em]">
                        Ecosystem Partner
                    </h2>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-12 md:gap-24">

                    @foreach ($partners->ecosystem_partners as $partner)
                        <div class="flex items-center gap-3 px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">

                            <div class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center">
                                <span class="text-slate-500 font-bold text-[10px]">
                                    {{ strtoupper(substr($partner, 0, 1)) }}
                                </span>
                            </div>

                            <span class="text-base font-bold tracking-tight text-slate-800">
                                {{ $partner }}
                            </span>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>


    {{-- Footer Text --}}
    <section class="pt-24 pb-12 mt-12">

        <div class="container-custom max-w-4xl mx-auto text-center text-[12px] text-slate-500 leading-loose space-y-6">

            @php
                $partnershipText = e($partners->partnership_text);

                if ($partners->apply_url) {
                    $partnershipText = str_replace(
                        'apply here',
                        '<a href="' . e($partners->apply_url) . '" target="_blank" rel="noopener noreferrer" class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4">apply here</a>',
                        $partnershipText
                    );
                }

                if ($partners->local_partnership_url) {
                    $partnershipText = str_replace(
                        'partnerships.genglobal.org',
                        '<a href="' . e($partners->local_partnership_url) . '" target="_blank" rel="noopener noreferrer" class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4">partnerships.genglobal.org</a>',
                        $partnershipText
                    );
                }
            @endphp

            <p>
                {!! $partnershipText !!}
            </p>


            <p>
                {{ $partners->contact_text }}
                {{ $partners->contact_person }} at

                <a
                    href="mailto:{{ $partners->contact_email }}"
                    class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4"
                >
                    {{ $partners->contact_email }}
                </a>
            </p>

        </div>

    </section>

</main>


@endsection
