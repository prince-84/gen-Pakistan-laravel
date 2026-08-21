<section id="newsSection" class="news-section py-24 bg-white overflow-hidden">
    <div class="container-custom">

        {{-- Section Header --}}
        <div class="news-anim-header flex flex-col md:flex-row md:items-end justify-between mb-12">

            <div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="h-1 w-12 bg-corporate-accent rounded-full"></div>

                    <h2 class="text-sm font-bold tracking-widest text-corporate-accent uppercase">
                        Corporate Updates
                    </h2>
                </div>

                <h3 class="text-4xl md:text-5xl lg:text-[42px] font-semibold text-corporate-primary tracking-tight">
                    News &amp; Insights
                </h3>
            </div>

            <a href="#"
               class="mt-6 md:mt-0 text-sm font-bold text-corporate-accent hover:text-corporate-primary uppercase flex items-center gap-2 transition-colors duration-300">

                View Media Center

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="16"
                     height="16"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2.5"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M5 12h14m-7-7 7 7-7 7"></path>
                </svg>

            </a>
        </div>


        {{-- News Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            {{-- Featured News --}}
            <div class="news-anim-item lg:col-span-7 group cursor-pointer will-change-[transform,opacity]">

                <div class="relative w-full h-[400px] mb-8 rounded-3xl overflow-hidden shadow-xl shadow-slate-200/50">

                    <div class="absolute inset-0 bg-corporate-primary/10 z-10 transition-opacity duration-300 group-hover:opacity-0"></div>

                    <img
                        src="{{ asset('images/news-featured.png') }}"
                        alt="Corporate Event"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >

                </div>

                <div class="flex items-center gap-3 mb-4">

                    <span class="text-xs font-bold text-corporate-accent uppercase tracking-widest bg-corporate-accent/10 px-3 py-1 rounded-full">
                        Quarterly Report
                    </span>

                    <span class="text-slate-300">&bull;</span>

                    <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">
                        MARCH 8, 2026
                    </span>

                </div>

                <h3 class="text-3xl font-extrabold text-corporate-primary mb-5 group-hover:text-corporate-accent transition-colors duration-300 leading-tight">
                    Strategic Operations Review Recommends Accelerated Digital Transformation Across All Sectors
                </h3>

                <p class="text-slate-600 leading-relaxed font-medium">
                    A comprehensive review of corporate operations highlights the critical need for immediate technological upgrades to maintain competitive market advantages and operational efficiency...
                </p>

            </div>


            {{-- Headlines List --}}
            <div class="lg:col-span-5 flex flex-col justify-between">

                <div class="space-y-6">

                    {{-- Headline 1 --}}
                    <div class="news-anim-item group p-6 rounded-2xl bg-slate-50 border border-slate-100 shadow-sm hover:shadow-md hover:border-corporate-accent/30 cursor-pointer flex flex-col justify-between will-change-[transform,opacity] transition-shadow duration-300">

                        <div class="flex justify-between items-center mb-4">

                            <span class="text-[10px] font-black text-corporate-accent uppercase tracking-widest">
                                Press Release
                            </span>

                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                NOV 16, 2026
                            </span>

                        </div>

                        <h4 class="text-lg font-bold text-corporate-primary leading-snug group-hover:text-corporate-accent transition-colors duration-300">
                            Global Expansion Strategy Announced at Annual Summit
                        </h4>

                    </div>


                    {{-- Headline 2 --}}
                    <div class="news-anim-item group p-6 rounded-2xl bg-slate-50 border border-slate-100 shadow-sm hover:shadow-md hover:border-corporate-accent/30 cursor-pointer flex flex-col justify-between will-change-[transform,opacity] transition-shadow duration-300">

                        <div class="flex justify-between items-center mb-4">

                            <span class="text-[10px] font-black text-corporate-accent uppercase tracking-widest">
                                Market Insight
                            </span>

                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                NOV 14, 2026
                            </span>

                        </div>

                        <h4 class="text-lg font-bold text-corporate-primary leading-snug group-hover:text-corporate-accent transition-colors duration-300">
                            Enterprise Technology Adoption Surges in Asia-Pacific Region
                        </h4>

                    </div>


                    {{-- Headline 3 --}}
                    <div class="news-anim-item group p-6 rounded-2xl bg-slate-50 border border-slate-100 shadow-sm hover:shadow-md hover:border-corporate-accent/30 cursor-pointer flex flex-col justify-between will-change-[transform,opacity] transition-shadow duration-300">

                        <div class="flex justify-between items-center mb-4">

                            <span class="text-[10px] font-black text-corporate-accent uppercase tracking-widest">
                                Partnership
                            </span>

                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                NOV 10, 2026
                            </span>

                        </div>

                        <h4 class="text-lg font-bold text-corporate-primary leading-snug group-hover:text-corporate-accent transition-colors duration-300">
                            Strategic Alliance Formed with Regional Investment Leaders
                        </h4>

                    </div>


                    {{-- Headline 4 --}}
                    <div class="news-anim-item group p-6 rounded-2xl bg-slate-50 border border-slate-100 shadow-sm hover:shadow-md hover:border-corporate-accent/30 cursor-pointer flex flex-col justify-between will-change-[transform,opacity] transition-shadow duration-300">

                        <div class="flex justify-between items-center mb-4">

                            <span class="text-[10px] font-black text-corporate-accent uppercase tracking-widest">
                                Event
                            </span>

                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                                OCT 28, 2026
                            </span>

                        </div>

                        <h4 class="text-lg font-bold text-corporate-primary leading-snug group-hover:text-corporate-accent transition-colors duration-300">
                            Executive Board Discusses Future Regulatory Compliance Frameworks
                        </h4>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    gsap.registerPlugin(ScrollTrigger);

    const section = document.getElementById('newsSection');

    if (!section) return;

    gsap.from('#newsSection .news-anim-header', {
        scrollTrigger: {
            trigger: section,
            start: 'top 85%',
        },
        y: 50,
        opacity: 0,
        duration: 1.2,
        ease: 'power3.out'
    });

    gsap.from('#newsSection .news-anim-item', {
        scrollTrigger: {
            trigger: section,
            start: 'top 80%',
        },
        y: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.3,
        scale: 0.9,
        ease: 'power3.out'
    });

});
</script>
