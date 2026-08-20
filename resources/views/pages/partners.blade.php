@extends('layouts.app')

@section('title', 'Partners | GEN Pakistan')

@section('content') <main class="min-h-screen bg-white pb-12">

    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Partners
            </h1>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="pt-20 pb-8">
        <div class="container-custom max-w-4xl mx-auto text-center mb-20">
            <p class="text-[15px] text-slate-500 leading-relaxed font-medium px-4">
                The Global Entrepreneurship Network is a dynamic organization that is supported through partnerships in
                the global community. We would particularly like to acknowledge the Partners here for their contributions.
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
                    <div class="flex items-center justify-center px-8 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-3xl md:text-4xl font-black tracking-tight text-blue-900">
                            Kauffman Foundation
                        </span>
                    </div>

                    <div class="flex items-center justify-center px-8 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-3xl md:text-4xl font-black tracking-tight text-red-600">
                            WELLS FARGO
                        </span>
                    </div>
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

                    <div class="flex items-center justify-center px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-xl md:text-2xl font-black tracking-tight text-pink-600">
                            Empower
                        </span>
                    </div>

                    <div class="flex items-center justify-center px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-xl md:text-2xl font-black tracking-tight text-slate-900">
                            HELLO ALICE
                        </span>
                    </div>

                    <div class="flex items-center justify-center px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-xl md:text-2xl font-black tracking-tight text-blue-800">
                            INDIANA THE BOLD
                        </span>
                    </div>

                    <div class="flex items-center justify-center px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <span class="text-xl md:text-2xl font-black tracking-tight text-cyan-700">
                            YBI
                        </span>
                    </div>

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
                    @for ($i = 0; $i < 42; $i++)
                        <div class="h-[3px] w-full bg-slate-300 rounded-full opacity-80"></div>
                    @endfor
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

                    <div class="flex items-center gap-3 px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <div class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center"></div>
                        <span class="text-base font-bold tracking-tight text-slate-800">
                            GLOBAL
                        </span>
                    </div>

                    <div class="flex items-center gap-3 px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <div class="w-8 h-8 bg-blue-900 rounded-sm flex items-center justify-center"></div>
                        <span class="text-base font-bold tracking-tight text-blue-900">
                            X-PARTNER
                        </span>
                    </div>

                    <div class="flex items-center gap-3 px-4 grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer opacity-80 hover:opacity-100">
                        <div class="w-8 h-8 bg-sky-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-[10px]">S</span>
                        </div>
                        <span class="text-base font-bold tracking-tight text-sky-600">
                            Startup Universe
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{-- Footer Text --}}
    <section class="pt-24 pb-12 mt-12">
        <div class="container-custom max-w-4xl mx-auto text-center text-[12px] text-slate-500 leading-loose space-y-6">

            <p>
                If you are interested in belonging to a world-class partnership with GEN, please
                <a href="#"
                   class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4">
                    apply here
                </a>.
                Please note that GEN requires a minimum of three year partnership timeline for all of the partners listed on this page.
                If you would like to engage in more local programs, for further information please visit
                <a href="#"
                   class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4">
                    partnerships.genglobal.org
                </a>
                and the appropriate country link in the
                <span class="text-corporate-accent font-semibold">Countries</span>
                <br />dropdown menu.
            </p>

            <p>
                For questions about sponsorship or partner relationships, please contact Alejandra Molina at
                <a href="mailto:alejandra@genglobal.org"
                   class="text-corporate-accent hover:text-red-700 transition-colors font-semibold underline decoration-transparent hover:decoration-red-700 underline-offset-4">
                    alejandra@genglobal.org
                </a>
            </p>

        </div>
    </section>

</main>
```

@endsection
