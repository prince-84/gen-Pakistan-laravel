@extends('layouts.app')

@section('title', 'About GEN | Global Entrepreneurship Network')

@section('content')
    <main class="min-h-screen bg-white">
        {{-- Page Header --}}
        <section class="py-16 md:py-24 bg-slate-50 border-b border-slate-100">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    About GEN
                </h1>
            </div>
        </section>

        {{-- Main Content --}}
        <section class="py-16 md:py-24">
            <div class="container-custom max-w-4xl mx-auto">

                {{-- Video Placeholder --}}
                <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-2xl mb-16 bg-[#0B2117] group cursor-pointer">

                    {{-- Simulated YouTube Player --}}
                    <div class="absolute inset-0 flex flex-col justify-between p-6 bg-gradient-to-b from-black/50 via-transparent to-transparent">
                        <div class="text-white font-semibold text-lg flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-xs font-bold text-slate-900">
                                GEN
                            </div>

                            Want to Help Solve the World's Hardest Problems?
                        </div>
                    </div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="w-16 h-12 bg-[#FF0000] rounded-xl flex items-center justify-center group-hover:bg-[#FF0000]/90 transition-colors shadow-lg shadow-red-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="white">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Article --}}
                <article class="text-slate-600 leading-relaxed text-[17px]">

                    <h2 class="text-3xl font-extrabold text-slate-900 mb-8 tracking-tight">
                        Building One Global Entrepreneurship Ecosystem
                    </h2>

                    <div class="space-y-6">
                        <p>
                            The Global Entrepreneurship Network operates in 200 countries with a mission to make it easier for anyone, anywhere, to start and scale a business.
                        </p>

                        <p>
                            By fostering deeper cross-border collaboration between founders, investors, policymakers, ecosystem builders and others, GEN fuels healthier and more efficient local and national entrepreneurship ecosystems. Network members collaborate to democratize opportunity, drive economic mobility, create new jobs and grow economies while developing the conditions for entrepreneurs to solve the world's toughest challenges.
                        </p>

                        <p>
                            No matter what one's role is in the ecosystem, GEN works to help everyone succeed. GEN connects entrepreneurs with opportunities to learn, start and scale. It matches investors with up-and-coming founders primed to disrupt industries and change the world as we know it. It shares the best and brightest policies among governments seeking to grow their economies. And, GEN brings ecosystem builders and experts together to benchmark, track and share innovative programs.
                        </p>
                    </div>

                    <div class="mt-14">
                        <h3 class="text-base font-bold text-slate-900 mb-6">
                            GEN's work spans four core pillars:
                        </h3>

                        <ul class="space-y-3 list-none pl-0">
                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>
                                    <strong>GEN Founders:</strong>
                                    Helping bold, disruptive innovators reach their full potential;
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>
                                    <strong>GEN Invest:</strong>
                                    Getting the right capital in the right hands at the right time;
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>
                                    <strong>GEN Policy:</strong>
                                    Sharing evidence-based ideas for smart policy design to help entrepreneurs thrive; and
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>
                                    <strong>GEN Ecosystems:</strong>
                                    Building stronger and more globally-connected entrepreneurial ecosystems.
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-14">
                        <h3 class="text-base font-bold text-slate-900 mb-6 uppercase">
                            Annual Impact:
                        </h3>

                        <ul class="space-y-3 list-none pl-0">
                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>2.24 million entrepreneurs supported</span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>$4M+ in funding mobilized for entrepreneurs</span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>1,000+ partnerships with entrepreneurial support organizations</span>
                            </li>

                            <li class="flex gap-3">
                                <span class="text-corporate-accent font-bold mt-1 text-sm">●</span>
                                <span>300 policy/market engaged</span>
                            </li>
                        </ul>
                    </div>

                </article>
            </div>
        </section>
    </main>
@endsection