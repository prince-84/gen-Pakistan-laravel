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
            @if ($featuredNews)

                <div class="news-anim-item lg:col-span-7 group cursor-pointer will-change-[transform,opacity]">

                    <div class="relative w-full h-[400px] mb-8 rounded-3xl overflow-hidden shadow-xl shadow-slate-200/50">

                        <div class="absolute inset-0 bg-corporate-primary/10 z-10 transition-opacity duration-300 group-hover:opacity-0"></div>

                        @if ($featuredNews->image)
                            <img
                                src="{{ asset($featuredNews->image) }}"
                                alt="{{ $featuredNews->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            >
                        @endif

                    </div>

                    <div class="flex items-center gap-3 mb-4">

                        <span class="text-xs font-bold text-corporate-accent uppercase tracking-widest bg-corporate-accent/10 px-3 py-1 rounded-full">
                            {{ $featuredNews->category }}
                        </span>

                        <span class="text-slate-300">&bull;</span>

                        <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">
                            {{ $featuredNews->published_at->format('F j, Y') }}
                        </span>

                    </div>

                    <h3 class="text-3xl font-extrabold text-corporate-primary mb-5 group-hover:text-corporate-accent transition-colors duration-300 leading-tight">
                        {{ $featuredNews->title }}
                    </h3>

                    <p class="text-slate-600 leading-relaxed font-medium">
                        {{ $featuredNews->description }}
                    </p>

                </div>

            @endif


            {{-- Headlines List --}}
            <div class="lg:col-span-5 flex flex-col justify-between">

                <div class="space-y-6">

    @forelse ($headlineNews as $news)

        <div class="news-anim-item group p-6 rounded-2xl bg-slate-50 border border-slate-100 shadow-sm hover:shadow-md hover:border-corporate-accent/30 cursor-pointer flex flex-col justify-between will-change-[transform,opacity] transition-shadow duration-300">

            <div class="flex justify-between items-center mb-4">

                <span class="text-[10px] font-black text-corporate-accent uppercase tracking-widest">
                    {{ $news->category }}
                </span>

                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    {{ $news->published_at->format('M j, Y') }}
                </span>

            </div>

            <h4 class="text-lg font-bold text-corporate-primary leading-snug group-hover:text-corporate-accent transition-colors duration-300">
                {{ $news->title }}
            </h4>

        </div>

    @empty

        <div class="text-slate-500">
            No news available at the moment.
        </div>

    @endforelse

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
