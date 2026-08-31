@extends('layouts.app')

@section('title', $about->page_heading . ' | Global Entrepreneurship Network')

@section('content') <main class="min-h-screen bg-white">

    {{-- Page Header --}}
    <section class="py-16 md:py-24 bg-slate-50 border-b border-slate-100">
        <div class="container-custom text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                {{ $about->page_heading }}
            </h1>
        </div>
    </section>


    {{-- Main Content --}}
    <section class="py-16 md:py-24">
        <div class="container-custom max-w-4xl mx-auto">

            {{-- Video --}}
            <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-2xl mb-16 bg-[#0B2117] group cursor-pointer">

                {{-- Simulated YouTube Player --}}
                <div class="absolute inset-0 flex flex-col justify-between p-6 bg-gradient-to-b from-black/50 via-transparent to-transparent">
                    <div class="text-white font-semibold text-lg flex items-center gap-4">

                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-xs font-bold text-slate-900">
                            GEN
                        </div>

                        {{ $about->video_title }}

                    </div>
                </div>

                <div class="absolute inset-0 flex items-center justify-center">
                    <button
                        class="w-16 h-12 bg-[#FF0000] rounded-xl flex items-center justify-center group-hover:bg-[#FF0000]/90 transition-colors shadow-lg shadow-red-500/20"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="white"
                        >
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>

            </div>


            {{-- Article --}}
            <article class="text-slate-600 leading-relaxed text-[17px]">

                <h2 class="text-3xl font-extrabold text-slate-900 mb-8 tracking-tight">
                    {{ $about->article_heading }}
                </h2>

                <div class="space-y-6">

                    @foreach (preg_split('/\r\n\r\n|\r\r|\n\n/', trim($about->article_content)) as $paragraph)
                        <p>
                            {{ $paragraph }}
                        </p>
                    @endforeach

                </div>


                {{-- Core Pillars --}}
                <div class="mt-14">

                    <h3 class="text-base font-bold text-slate-900 mb-6">
                        GEN's work spans four core pillars:
                    </h3>

                    <ul class="space-y-3 list-none pl-0">

                        @foreach ($about->core_pillars as $pillar)

                            <li class="flex gap-3">

                                <span class="text-corporate-accent font-bold mt-1 text-sm">
                                    ●
                                </span>

                                <span>
                                    <strong>{{ $pillar['name'] }}:</strong>
                                    {{ $pillar['description'] }};
                                </span>

                            </li>

                        @endforeach

                    </ul>

                </div>


                {{-- Annual Impact --}}
                <div class="mt-14">

                    <h3 class="text-base font-bold text-slate-900 mb-6 uppercase">
                        {{ $about->impact_heading }}:
                    </h3>

                    <ul class="space-y-3 list-none pl-0">

                        @foreach ($about->impact_items as $item)

                            <li class="flex gap-3">

                                <span class="text-corporate-accent font-bold mt-1 text-sm">
                                    ●
                                </span>

                                <span>
                                    {{ $item }}
                                </span>

                            </li>

                        @endforeach

                    </ul>

                </div>

            </article>

        </div>
    </section>

</main>


@endsection
