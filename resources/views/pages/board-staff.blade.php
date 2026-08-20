@extends('layouts.app')

@section('title', 'Leadership | Global Entrepreneurship Network')

@section('content')
    @php
        $globalBoard = [
            ['name' => 'Neil Dhillon', 'country' => 'UNITED STATES', 'role' => 'Board Member', 'company' => ''],
            ['name' => 'Elizabeth Gore', 'country' => 'UNITED STATES', 'role' => 'Co-Founder + President', 'company' => 'Hello Alice'],
            ['name' => 'Donna Harris', 'country' => 'UNITED STATES', 'role' => 'Founder & CEO', 'company' => 'Builders + Backers'],
            ['name' => 'Jeff Hoffman', 'country' => 'UNITED STATES', 'role' => 'Chairman', 'company' => ''],
            ['name' => 'Rebecca Hwang', 'country' => 'UNITED STATES', 'role' => 'Managing Director', 'company' => 'Kaleid Ventures'],
            ['name' => 'Jonathan Ortmans', 'country' => 'UNITED STATES', 'role' => 'Founder + President', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Erik Pages', 'country' => 'UNITED STATES', 'role' => 'President', 'company' => 'EntreWorks Consulting'],
            ['name' => 'Tom Sullivan', 'country' => 'UNITED STATES', 'role' => 'Vice President, Small Business Policy', 'company' => 'U.S. Chamber of Commerce'],
            ['name' => 'Cris Turner', 'country' => 'UNITED STATES', 'role' => 'Vice President, Government Affairs and Public Policy', 'company' => 'Google'],
        ];

        $globalStaff = [
            ['name' => 'William Charter', 'country' => 'UNITED STATES', 'role' => 'Chief of Staff', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Cristina Fernandez', 'country' => 'UNITED STATES', 'role' => 'Director for Knowledge + Programming', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Kathryn Forrest', 'country' => 'CANADA', 'role' => 'Director for Communications', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Tom Hancock', 'country' => 'UNITED KINGDOM', 'role' => 'Research Associate', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Peter Komives', 'country' => 'UNITED STATES', 'role' => 'Vice President', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Garry Lyon', 'country' => 'UNITED STATES', 'role' => 'Program Manager', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Mark Marich', 'country' => 'UNITED STATES', 'role' => 'Executive Vice President', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Ashley Massengill', 'country' => 'UNITED STATES', 'role' => 'Director of Web Development', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Alejandra Molina', 'country' => 'UNITED STATES', 'role' => 'Vice President for GEN Invest', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Pretty Ndlovu', 'country' => 'SOUTH AFRICA', 'role' => 'Director for Startup Huddle', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Jonathan Ortmans', 'country' => 'UNITED STATES', 'role' => 'Founder + President', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Stephan Recke', 'country' => 'UNITED STATES', 'role' => 'Executive Director, GEN Space', 'company' => 'gen global'],
            ['name' => 'Steven A Rodriguez', 'country' => 'COLOMBIA', 'role' => 'Manager for Startups', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Alan Simensky', 'country' => 'UNITED STATES', 'role' => 'Chief Financial Officer', 'company' => 'Global Entrepreneurship Network'],
            ['name' => 'Matt Smith', 'country' => 'UNITED KINGDOM', 'role' => 'Vice President', 'company' => 'Global Entrepreneurship Network'],
        ];
    @endphp

    <main class="min-h-screen bg-white pb-24">

        {{-- Page Header --}}
        <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Leadership
                </h1>
            </div>
        </section>

        <section class="pt-16 md:pt-24">
            <div class="container-custom">

                {{-- Global Board --}}
                <div class="mb-20">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-10 pl-2 border-l-4 border-corporate-accent">
                        Global Board
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($globalBoard as $person)
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

                {{-- Global Staff --}}
                <div>
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-10 pl-2 border-l-4 border-corporate-accent">
                        Global Staff
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($globalStaff as $person)
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

            </div>
        </section>
    </main>
@endsection