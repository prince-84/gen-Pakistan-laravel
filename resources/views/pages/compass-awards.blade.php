@extends('layouts.app')

@section('title', 'GEN Compass Awards | Global Entrepreneurship Network')

@section('content')

    @php
        $awardCategories = [
            [
                'title' => 'GEC Community',
                'desc' => 'Recognizing individuals and organizations for the GEN Global Entrepreneurship Congress.'
            ],
            [
                'title' => 'Ecosystem Hero',
                'desc' => 'Honoring individuals who go above and beyond in their local ecosystem to support entrepreneurs.'
            ],
            [
                'title' => 'Ecosystem Builder',
                'desc' => 'Celebrating organizations that have proven to be a driving force in the growth of their communities.'
            ],
            [
                'title' => 'Investor Connector',
                'desc' => 'Awarding the investor who built bridges in finance for local startups and scaleups.'
            ],
            [
                'title' => 'Policy Maker',
                'desc' => 'For government officials who have implemented impactful policies supporting entrepreneurship.'
            ],
            [
                'title' => 'Startup Hub',
                'desc' => 'Recognizing incubators and co-working spaces who provide exceptional support for scaling startups.'
            ],
            [
                'title' => 'GEN Global Award',
                'desc' => 'Honoring a contributor who has had a significant global impact across the GEN network.'
            ],
            [
                'title' => 'Compass Partner',
                'desc' => 'Awarding a strategic partner who has demonstrated exceptional commitment to the GEN mission.'
            ],
            [
                'title' => 'Alumni Recognition',
                'desc' => 'Celebrating the continued success and contribution of past award winners.'
            ],
            [
                'title' => 'Global Connector',
                'desc' => 'For an individual who connects the local to the global ecosystem seamlessly.'
            ],
        ];

        $compassInfo = [
            'Nomination Process',
            'Award Categories',
            'Eligibility',
            'Criteria',
            'Recognition',
            'The Selection'
        ];

        $awardsArchive = [
            'Compass Awards 2023',
            'Compass Awards 2022',
            'Compass Awards 2021',
            'Compass Awards 2019'
        ];

        $toolsResources = [
            'Press Release',
            'Media Gallery',
            'Download Quality Media'
        ];
    @endphp

    <main class="min-h-screen bg-white pb-24">

        {{-- Page Header --}}
        <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    GEN Compass Awards
                </h1>
            </div>
        </section>

        <section class="pt-12 pb-8">
            <div class="container-custom max-w-6xl mx-auto">

                {{-- Hero Image --}}
                <div class="relative w-full h-[300px] md:h-[400px] rounded-2xl overflow-hidden mb-16 shadow-xl">
                    <img
                        src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=1200&q=80"
                        alt="Compass Awards Presentation"
                        class="absolute inset-0 w-full h-full object-cover"
                    >
                </div>

                <div class="flex flex-col lg:flex-row gap-16">

                    {{-- Main Content --}}
                    <div class="w-full lg:w-[70%]">

                        {{-- About the Awards --}}
                        <div class="mb-14">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-5 h-5 rounded-full border-[3px] border-amber-400 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                                </div>
                                <h2 class="text-sm font-black text-slate-800 uppercase tracking-widest">
                                    About the Awards
                                </h2>
                            </div>

                            <p class="text-[15px] text-slate-600 leading-relaxed mb-4">
                                The GEN Compass Awards were launched in 2017 to celebrate excellence across the global entrepreneurship ecosystem.
                                We recognize individuals and organizations whose innovative efforts and dedicated support are driving significant
                                impact for entrepreneurs worldwide.
                            </p>

                            <a href="#"
                               class="text-[15px] font-bold text-amber-500 hover:text-amber-600 underline underline-offset-4 decoration-amber-200 hover:decoration-amber-500 transition-colors">
                                Learn more about the awards process and history here.
                            </a>
                        </div>

                        {{-- Eligibility --}}
                        <div class="mb-14">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-5 h-5 rounded-full border-[3px] border-amber-400 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                                </div>
                                <h2 class="text-sm font-black text-slate-800 uppercase tracking-widest">
                                    Eligibility
                                </h2>
                            </div>

                            <p class="text-[15px] text-slate-600 leading-relaxed">
                                Any individual, organization, or government agency that is an active member or partner of the GEN ecosystem is
                                eligible for nomination.
                            </p>
                        </div>

                        {{-- Criteria --}}
                        <div class="mb-16">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-5 h-5 rounded-full border-[3px] border-amber-400 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                                </div>
                                <h2 class="text-sm font-black text-slate-800 uppercase tracking-widest">
                                    Criteria
                                </h2>
                            </div>

                            <ul class="space-y-3 list-none pl-0">
                                <li class="flex gap-3 items-start text-[15px] text-slate-600">
                                    <span class="text-corporate-accent font-bold mt-1 text-xs">●</span>
                                    <span>Demonstrated impact on their national or global entrepreneurial ecosystem.</span>
                                </li>

                                <li class="flex gap-3 items-start text-[15px] text-slate-600">
                                    <span class="text-corporate-accent font-bold mt-1 text-xs">●</span>
                                    <span>Innovative approaches to tackling ecosystem-wide challenges.</span>
                                </li>

                                <li class="flex gap-3 items-start text-[15px] text-slate-600">
                                    <span class="text-corporate-accent font-bold mt-1 text-xs">●</span>
                                    <span>Collaboration with other stakeholders within the GEN network.</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Award Categories --}}
                        <div class="mb-20">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="h-[2px] w-8 bg-amber-400"></div>

                                <h2 class="text-[15px] font-black text-slate-800 uppercase tracking-widest">
                                    Awards Categories
                                </h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                @foreach ($awardCategories as $category)
                                    <div class="bg-white border border-slate-100 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow group">

                                        <div class="flex items-center gap-3 mb-3">
                                            <div class="text-amber-400">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     width="20"
                                                     height="20"
                                                     viewBox="0 0 24 24"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <circle cx="12" cy="8" r="7"/>
                                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                                                </svg>
                                            </div>

                                            <h4 class="font-bold text-slate-800 text-[15px]">
                                                {{ $category['title'] }}
                                            </h4>
                                        </div>

                                        <p class="text-[13px] text-slate-500 leading-relaxed mb-5 h-10 line-clamp-2">
                                            {{ $category['desc'] }}
                                        </p>

                                        <button class="bg-corporate-accent hover:bg-red-700 text-white text-[10px] font-bold px-4 py-1.5 rounded transition-colors uppercase tracking-wider">
                                            Read More
                                        </button>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        {{-- Community Recognition --}}
                        <div class="mb-20">

                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-5 h-5 rounded-full border-[3px] border-amber-400 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                                </div>

                                <h2 class="text-sm font-black text-slate-800 uppercase tracking-widest">
                                    Community Recognition
                                </h2>
                            </div>

                            <div class="relative w-full h-[250px] md:h-[300px] rounded-2xl overflow-hidden mb-6 shadow-lg">
                                <img
                                    src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80"
                                    alt="Global Network"
                                    class="absolute inset-0 w-full h-full object-cover opacity-90"
                                >

                                <div class="absolute inset-0 bg-blue-900/20 mix-blend-multiply"></div>
                            </div>

                            <p class="text-center text-sm font-bold italic text-slate-800">
                                "— View previous winners and their stories —"
                            </p>
                        </div>

                        {{-- Compass Partners --}}
                        <div>

                            <div class="flex items-center gap-4 mb-8">
                                <div class="h-[2px] w-8 bg-amber-400"></div>

                                <h2 class="text-[15px] font-black text-slate-800 uppercase tracking-widest">
                                    Compass Partners
                                </h2>
                            </div>

                            <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60">
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="w-24 h-8 bg-slate-200 rounded"></div>
                                @endfor
                            </div>

                        </div>

                    </div>

                    {{-- Sidebar --}}
                    <div class="w-full lg:w-[30%]">

                        {{-- Compass Info --}}
                        <div class="mb-10">
                            <h3 class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-200 pb-2">
                                Compass Info
                            </h3>

                            <ul class="space-y-3">
                                @foreach ($compassInfo as $link)
                                    <li>
                                        <a href="#"
                                           class="text-[13px] font-semibold text-slate-600 hover:text-corporate-accent transition-colors flex items-center justify-between group">
                                            {{ $link }}

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="14"
                                                 height="14"
                                                 viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all text-corporate-accent">
                                                <path d="m9 18 6-6-6-6"/>
                                            </svg>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Awards Archive --}}
                        <div class="mb-10">
                            <h3 class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-200 pb-2">
                                Awards Archive
                            </h3>

                            <ul class="space-y-3">
                                @foreach ($awardsArchive as $link)
                                    <li>
                                        <a href="#"
                                           class="text-[13px] font-semibold text-slate-600 hover:text-corporate-accent transition-colors flex items-center justify-between group">
                                            {{ $link }}

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="14"
                                                 height="14"
                                                 viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all text-corporate-accent">
                                                <path d="m9 18 6-6-6-6"/>
                                            </svg>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Tools & Resources --}}
                        <div class="mb-10">
                            <h3 class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-200 pb-2">
                                Tools & Resources
                            </h3>

                            <ul class="space-y-3">
                                @foreach ($toolsResources as $link)
                                    <li>
                                        <a href="#"
                                           class="text-[13px] font-semibold text-slate-600 hover:text-corporate-accent transition-colors flex items-center justify-between group">
                                            {{ $link }}

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="14"
                                                 height="14"
                                                 viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all text-corporate-accent">
                                                <path d="m9 18 6-6-6-6"/>
                                            </svg>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Latest Articles --}}
                        <div class="mt-12 bg-slate-50 border border-slate-100 rounded-xl p-6">

                            <h3 class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-4">
                                Latest Articles
                            </h3>

                            <div class="space-y-6">

                                <div>
                                    <span class="text-[11px] font-bold text-corporate-accent uppercase tracking-wider mb-1 block">
                                        May 2, 2024
                                    </span>

                                    <a href="#"
                                       class="text-[14px] font-bold text-slate-800 hover:text-corporate-accent transition-colors leading-snug block">
                                        GEN makes $1M Entrepreneurship World Cup investment
                                    </a>
                                </div>

                                <div>
                                    <span class="text-[11px] font-bold text-corporate-accent uppercase tracking-wider mb-1 block">
                                        May 2, 2024
                                    </span>

                                    <a href="#"
                                       class="text-[14px] font-bold text-slate-800 hover:text-corporate-accent transition-colors leading-snug block">
                                        GEN Hosts 2024 European Awards Selection Committee
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection