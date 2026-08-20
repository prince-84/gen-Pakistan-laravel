@extends('layouts.app')

@section('title', 'GEN Global Leaders | Global Entrepreneurship Network')

@section('content') <main class="min-h-screen bg-white pb-24">

    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                GEN Global Leaders
            </h1>
        </div>
    </section>

    <section class="pt-16 pb-8">

        {{-- Introduction --}}
        <div class="container-custom max-w-5xl mx-auto text-center mb-16">
            <p class="text-[15px] text-slate-500 leading-relaxed font-medium px-4">
                GEN works through a selection of the world's leading entrepreneurship ecosystem leaders from 200 countries around the
                world - connecting their home grown entrepreneurship ecosystems... These individuals are connected locally to their
                communities and deeply engaged in catalysing GEN programs and initiatives to support their ecosystems, policy makers and
                ecosystem builders. The following global leaders scale to the programs reach in their areas and globally connect locallyand
                amplify opportunities to participate in events and initiatives.
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
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </div>
                </div>

                <div class="relative w-full md:w-48">
                    <select
                        class="w-full px-4 py-2 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/50 text-sm appearance-none bg-white text-slate-500"
                    >
                        <option value="">Any Role</option>
                        <option value="director">Global Leader</option>
                    </select>

                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none opacity-50">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
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
                    $globalLeaders = [
                        ['name' => 'Jorge Lawson', 'country' => 'ARGENTINA', 'role' => 'Representative, MERCOSUR Economy / Board', 'company' => 'Global Entrepreneurship Network Argentina Chapter'],
                        ['name' => 'Gastelle Ferguson', 'country' => 'BAHAMAS', 'role' => 'General Manager', 'company' => 'ybc242'],
                        ['name' => 'Ilune Solomon', 'country' => 'BELIZE', 'role' => 'Executive Director', 'company' => 'Innovation Strategy Program'],
                        ['name' => 'Viviana Angulo', 'country' => 'BOLIVIA', 'role' => 'Founder & CEO Pithia', 'company' => 'Global Entrepreneurship Network'],
                        ['name' => 'Mladen Bernardet Taume', 'country' => 'BULGARIA', 'role' => 'General Partner', 'company' => 'P2L.vc'],
                        ['name' => 'Amalie Atalla', 'country' => 'CANADA', 'role' => 'Founder', 'company' => 'Think Education'],
                        ['name' => 'Sean Richards', 'country' => 'CANADA', 'role' => 'National Ambassador for Canada', 'company' => 'GEN Canada'],
                        ['name' => 'Ricardo Enrique Pena Ruiz', 'country' => 'COLOMBIA', 'role' => 'National Ambassador for Colombia', 'company' => 'GEN Colombia'],
                        ['name' => 'Khristina Jogle', 'country' => 'CROATIA', 'role' => 'Msc. Arch / Arch / ul', 'company' => 'Innovation Communication Hub & Co-founder HUB385'],
                        ['name' => 'Peter Kahor', 'country' => 'DENMARK', 'role' => 'President', 'company' => 'Global Entrepreneurship Network'],
                        ['name' => 'Camilo Pinzon', 'country' => 'ECUADOR', 'role' => 'Co-founder + Managing Director', 'company' => 'EDES Business School'],
                        ['name' => 'Samuel Salazar Genova', 'country' => 'EL SALVADOR', 'role' => 'National Ambassador / Director', 'company' => 'GEN El Salvador / Fusades'],
                        ['name' => 'Boris Lemus', 'country' => 'GUATEMALA', 'role' => 'National Director', 'company' => 'ASECUA'],
                        ['name' => 'Patrik Kovacs', 'country' => 'HUNGARY', 'role' => 'President', 'company' => 'FIVOSZ - Young Entrepreneurs Association Hungary'],
                        ['name' => 'Joao-Lino Gurlengane', 'country' => 'MOZAMBIQUE', 'role' => 'National Ambassador', 'company' => 'GEN Mozambique'],
                        ['name' => 'Ahmed Wajih Marais', 'country' => 'UNITED ARAB EMIRATES', 'role' => 'Co-Founder and Partner', 'company' => 'GEN UAE'],
                        ['name' => 'Jorge Luis Burgos', 'country' => 'PANAMA', 'role' => 'National Coordinator / Director', 'company' => 'Global Entrepreneurship NetworkPanama'],
                        ['name' => 'Anthony Smart', 'country' => 'PAPUA NEW GUINEA', 'role' => 'Chair', 'company' => 'The Kumul Foundation Inc'],
                        ['name' => 'Abel Calumel Barker', 'country' => 'PERU', 'role' => 'Mentor', 'company' => 'ASEG - UTEC'],
                        ['name' => 'Suresh Dageranth Jernial', 'country' => 'SURINAME', 'role' => 'National Ambassador for Suriname', 'company' => 'GEN Suriname'],
                        ['name' => 'Therese Athua', 'country' => 'UGANDA', 'role' => 'Managing Partner', 'company' => 'SMEZONE'],
                        ['name' => 'Diego Afredi Abdalla Huma...', 'country' => 'UNITED ARAB EMIRATES', 'role' => 'Founder / Senior Partner', 'company' => 'LogiThinking'],
                        ['name' => 'Valeriy Khalkov', 'country' => 'UNITED KINGDOM', 'role' => 'Founder & Managing Partner', 'company' => 'Auril.vc'],
                        ['name' => 'Zoe Pajana', 'country' => 'UNITED KINGDOM', 'role' => 'European Innovation Council Board Member', 'company' => 'EIC Board'],
                        ['name' => 'Ana Maria Torres', 'country' => 'UNITED KINGDOM', 'role' => 'Director for governance, strategy and innovation', 'company' => 'Future Leaders of Professional Institutions'],
                        ['name' => 'Gil Bernat', 'country' => 'UNITED KINGDOM', 'role' => 'Co-Founder', 'company' => 'The Sugar-Coated'],
                        ['name' => 'Deice Curacor', 'country' => 'UNITED STATES', 'role' => 'Head of Community Partnerships', 'company' => 'GEN Japan'],
                        ['name' => 'Cecilia Wessinger', 'country' => 'UNITED STATES', 'role' => 'Principal', 'company' => 'Wessinger Partners'],
                        ['name' => 'Christopher Schroeder', 'country' => 'UNITED STATES', 'role' => 'Co-founder', 'company' => 'Next Billion Ventures'],
                        ['name' => 'Dane Stangler', 'country' => 'UNITED STATES', 'role' => 'Managing Director of Strategic Initiatives', 'company' => 'Bipartisan PolicyCenter'],
                        ['name' => 'Eric Hormon', 'country' => 'UNITED STATES', 'role' => 'Co-Founder', 'company' => 'Center for Entrepreneurial Studies'],
                        ['name' => 'Eileen Valen-Vega', 'country' => 'UNITED STATES', 'role' => 'Executive Director', 'company' => 'Innovation Agency - IC - University of California Hastings Law'],
                        ['name' => 'Hormoz AbaoeHahmanz', 'country' => 'UNITED STATES', 'role' => 'Co-Founder and CEO', 'company' => 'H&H Academy'],
                        ['name' => 'Akmal Abdurahmanov', 'country' => 'UZBEKISTAN', 'role' => 'Co-Founder & CEO', 'company' => 'Team University'],
                    ];
                @endphp

                @foreach ($globalLeaders as $person)
                    <div class="bg-white border border-slate-100 rounded-2xl p-6 flex gap-5 items-center hover:shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] hover:border-corporate-accent/20 transition-all duration-300 group cursor-pointer">

                        <div class="shrink-0 relative w-[72px] h-[72px] rounded-full overflow-hidden border-2 border-slate-100 group-hover:border-corporate-accent transition-colors duration-300">

                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($person['name']) }}&background=f1f5f9&color=e61c24&size=150&font-size=0.33"
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
```

@endsection
