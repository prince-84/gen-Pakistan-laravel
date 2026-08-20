@extends('layouts.app')

@section('title', 'National Managing Directors | GEN Pakistan')

@section('content') <main class="min-h-screen bg-white pb-24">

    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                National Managing Directors
            </h1>
        </div>
    </section>

    <section class="pt-16 pb-8">

        {{-- Introduction --}}
        <div class="container-custom max-w-5xl mx-auto text-center mb-16">
            <p class="text-[15px] text-slate-500 leading-relaxed font-medium px-4">
                GEN maintains chapters in a number of countries to provide ecosystem leadership and coalition building —
                streamlining efforts to support local entrepreneurs. In addition to being part of a global network, each
                country network is led by an entrepreneur ecosystem leader and backed by an independent board of directors
                and supported by a wide range of strategic partners relevant to all geographic regions and ecosystem
                development. Managing directors are the public face of GEN in each country and are involved in all aspects
                of GEN's local and national engagement.
            </p>
        </div>

        {{-- Filter Bar --}}
        <div class="container-custom max-w-4xl mx-auto mb-16">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-center">

                <input
                    type="text"
                    placeholder="Search Members"
                    class="w-full md:w-64 px-4 py-2 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/50 text-sm"
                >

                <div class="relative w-full md:w-48">
                    <select
                        class="w-full px-4 py-2 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/50 text-sm appearance-none bg-white text-slate-500"
                    >
                        <option value="">Any Country</option>
                        <option value="pakistan">Pakistan</option>
                    </select>

                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </div>
                </div>

                <div class="relative w-full md:w-48">
                    <select
                        class="w-full px-4 py-2 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/50 text-sm appearance-none bg-white text-slate-500"
                    >
                        <option value="">Any Role</option>
                        <option value="director">Managing Director</option>
                    </select>

                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </div>
                </div>

                <button
                    class="w-full md:w-auto px-8 py-2 bg-corporate-accent text-white font-bold text-sm rounded-md hover:bg-red-700 transition-colors"
                >
                    APPLY
                </button>

            </div>
        </div>

        {{-- Directory Grid --}}
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @php
                    $managingDirectors = [
                        ['name' => 'Soumaya Merfadi', 'country' => 'ALGERIA', 'role' => 'Founder & CEO', 'company' => 'GEN Algeria'],
                        ['name' => 'Craig Inez', 'country' => 'ARGENTINA', 'role' => 'Managing Director', 'company' => 'GEN Argentina'],
                        ['name' => 'Seymur Hasanov', 'country' => 'ARMENIA', 'role' => 'Managing Director', 'company' => 'GEN Armenia'],
                        ['name' => 'Geordany Yohannes Ndong...', 'country' => 'CHAD', 'role' => 'Managing Director', 'company' => 'GEN Chad'],
                        ['name' => 'Diliana Amelia Rea Morales', 'country' => 'EL SALVADOR', 'role' => 'Director General', 'company' => 'GEN El Salvador'],
                        ['name' => 'Ahmed Osman', 'country' => 'EGYPT', 'role' => 'Chair', 'company' => 'GEN Egypt'],
                        ['name' => 'Stephen Gyasi-Kwaw', 'country' => 'GHANA', 'role' => 'Country Founder/Managing Director', 'company' => 'GEN Ghana'],
                        ['name' => 'Fran Senduk', 'country' => 'INDONESIA', 'role' => 'Managing Director', 'company' => 'GEN Indonesia'],
                        ['name' => 'Ran Yashir', 'country' => 'ISRAEL', 'role' => 'Chair', 'company' => 'GEN Israel'],
                        ['name' => 'Craig O Monroe', 'country' => 'LIBERIA', 'role' => 'Managing Director', 'company' => 'GEN Liberia'],
                        ['name' => 'Ayla Salmon', 'country' => 'MYANMAR', 'role' => 'Chair', 'company' => 'GEN Myanmar'],
                        ['name' => 'Cheryl J Steward', 'country' => 'JAMAICA', 'role' => 'Managing Director', 'company' => 'GEN Jamaica'],
                        ['name' => 'Hiro Nishiguchi', 'country' => 'JAPAN', 'role' => 'Managing Director', 'company' => 'GEN Japan'],
                        ['name' => 'Jame Martinez', 'country' => 'JORDAN', 'role' => 'Managing Director', 'company' => 'GEN Jordan'],
                        ['name' => 'Alexander Kordi', 'country' => 'LIBYA', 'role' => 'Managing Director', 'company' => 'GEN Libya'],
                        ['name' => 'Prasant M Rabarijaona', 'country' => 'MADAGASCAR', 'role' => 'Managing Director', 'company' => 'GEN Madagascar'],
                        ['name' => 'Yuda-Hwa Chin', 'country' => 'MALAYSIA', 'role' => 'Managing Director', 'company' => 'GEN Malaysia'],
                        ['name' => 'Barley G. Munguy', 'country' => 'MONGOLIA', 'role' => 'Managing Director & Co-Founder', 'company' => 'GEN Mongolia'],
                        ['name' => 'Muman Isou', 'country' => 'NIGERIA', 'role' => 'Managing Director', 'company' => 'GEN Nigeria'],
                        ['name' => 'Marc Strong', 'country' => 'RWANDA', 'role' => 'Managing Director', 'company' => 'GEN Rwanda'],
                        ['name' => 'Dave Ruckaray', 'country' => 'NEW ZEALAND', 'role' => 'Chair', 'company' => 'GEN NZ'],
                        ['name' => 'Ammon Nse', 'country' => 'SYRIA', 'role' => 'Managing Director', 'company' => 'GEN Syria'],
                        ['name' => 'Khadija Abdurrassul', 'country' => 'TUNISIA', 'role' => 'Managing Director', 'company' => 'GEN Tunisia'],
                        ['name' => 'Kashif Alam', 'country' => 'PAKISTAN', 'role' => 'Managing Director', 'company' => 'GEN Pakistan'],
                        ['name' => 'Roberto Urbieta', 'country' => 'PARAGUAY', 'role' => 'Managing Director', 'company' => 'GEN Paraguay'],
                        ['name' => 'Henry Ong', 'country' => 'PHILIPPINES', 'role' => 'Managing Director', 'company' => 'GEN Philippines'],
                        ['name' => 'Francis Stevens George', 'country' => 'SIERRA LEONE', 'role' => 'Managing Director', 'company' => 'GEN Sierra Leone'],
                        ['name' => 'James Tan', 'country' => 'SINGAPORE', 'role' => 'Managing Director', 'company' => 'GEN Singapore'],
                        ['name' => 'Carmen Pade', 'country' => 'SOUTH AFRICA', 'role' => 'Managing Director and National Lead (GEN SA)', 'company' => 'GEN South Africa'],
                        ['name' => 'Colin Grothubay', 'country' => 'SOUTH AFRICA', 'role' => 'Board Ambassador', 'company' => 'GEN South Africa'],
                        ['name' => 'Vimanu De Melio', 'country' => 'SOUTH AFRICA', 'role' => 'Account Manager', 'company' => 'GEN South Africa'],
                        ['name' => 'Korado Jackson', 'country' => 'SURINAME', 'role' => 'Managing Director', 'company' => 'GEN Suriname'],
                        ['name' => 'Steve Cheah', 'country' => 'THAILAND', 'role' => 'Chair', 'company' => 'GEN Thailand'],
                        ['name' => 'Koli Agbovi', 'country' => 'TOGO', 'role' => 'Managing Director', 'company' => 'GEN Togo'],
                        ['name' => 'Bojan Avli', 'country' => 'TURKEY', 'role' => 'General Secretary/ Managing Director', 'company' => 'GEN Turkey'],
                        ['name' => 'Alice V Olumw', 'country' => 'UGANDA', 'role' => 'Managing Director', 'company' => 'GEN Uganda'],
                        ['name' => 'Marc Grimes', 'country' => 'UNITED KINGDOM', 'role' => 'Chair', 'company' => 'GEN UK'],
                        ['name' => 'Edwin Zulu', 'country' => 'ZAMBIA', 'role' => 'Managing Director', 'company' => 'GEN Zambia'],
                    ];
                @endphp

                @foreach ($managingDirectors as $person)
                    @php
                        $avatarUrl = 'https://ui-avatars.com/api/?name=' . urlencode($person['name']) . '&background=f1f5f9&color=e61c24&size=150&font-size=0.33';
                    @endphp

                    <div class="bg-white border border-slate-100 rounded-2xl p-6 flex gap-5 items-center hover:shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] hover:border-corporate-accent/20 transition-all duration-300 group cursor-pointer">

                        <div class="shrink-0 relative w-[72px] h-[72px] rounded-full overflow-hidden border-2 border-slate-100 group-hover:border-corporate-accent transition-colors duration-300">
                            <img
                                src="{{ $avatarUrl }}"
                                alt="{{ $person['name'] }}"
                                class="w-full h-full object-cover"
                            >
                        </div>

                        <div class="flex flex-col">
                            <h4 class="text-[17px] font-bold text-corporate-accent mb-0.5 group-hover:text-red-700 transition-colors">
                                {{ $person['name'] }}
                            </h4>

                            <span class="text-[9px] font-extrabold text-slate-400 uppercase tracking-widest mb-1.5">
                                {{ $person['country'] }}
                            </span>

                            <span class="text-[13px] font-bold text-slate-800 leading-tight">
                                {{ $person['role'] }}
                            </span>

                            @if ($person['company'])
                                <span class="text-[12px] text-slate-500 mt-0.5 leading-tight">
                                    {{ $person['company'] }}
                                </span>
                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </section>
</main>

@endsection
