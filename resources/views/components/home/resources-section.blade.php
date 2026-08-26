<section id="resourcesSection" class="resources-section py-24 bg-white overflow-hidden">
    <div class="container-custom">

        {{-- Header --}}
        <div class="resources-header-anim flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">

            <div class="max-w-3xl">

                <div class="flex flex-col items-start mb-10">

                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>

                        <h2 class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">
                            Strategic Assets
                        </h2>
                    </div>

                    <h3 class="text-4xl md:text-5xl lg:text-[42px] font-semibold text-corporate-primary tracking-tight leading-[1.1]">
                        Strategic Resources<br />& Insights
                    </h3>

                </div>

            </div>

            <a href="#"
               class="inline-flex items-center gap-2 text-corporate-primary font-bold hover:text-corporate-accent transition-colors duration-300 group pb-1 border-b-2 border-transparent hover:border-corporate-accent">

                Explore All Resources

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2.5"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     class="transition-transform duration-300 group-hover:translate-x-1">

                    <path d="M5 12h14m-7-7 7 7-7 7" />

                </svg>

            </a>

        </div>


        {{-- Resource Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($resources as $resource)
                <div class="resource-card-anim group bg-slate-50 rounded-[2rem] overflow-hidden border border-slate-100 will-change-transform hover:shadow-2xl hover:shadow-slate-200 hover:-translate-y-2 transition-shadow duration-500">

                    <div class="relative h-64 w-full overflow-hidden">

                        <img
                            src="{{ $resource->image }}"
                            alt="{{ $resource->title }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        >

                        <div class="absolute top-6 left-6">
                            <span class="bg-white/90 backdrop-blur-md text-corporate-primary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest shadow-sm">
                                {{ $resource->category }}
                            </span>
                        </div>

                    </div>

                    <div class="p-8">

                        <h4 class="text-xl font-extrabold text-corporate-primary mb-4 leading-tight group-hover:text-corporate-accent transition-colors duration-300">
                            {{ $resource->title }}
                        </h4>

                        <p class="text-slate-500 leading-relaxed mb-8 font-medium">
                            {{ $resource->description }}
                        </p>

                        <a href="{{ $resource->button_url }}"
                           class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-widest text-corporate-primary hover:text-corporate-accent transition-colors duration-300">

                            {{ $resource->button_text }}

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="14"
                                 height="14"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="3"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M5 12h14m-7-7 7 7-7 7" />

                            </svg>

                        </a>

                    </div>

                </div>
            @empty
                <div class="col-span-full text-center text-slate-500 py-8">
                    No resources available at the moment.
                </div>
            @endforelse

        </div>

    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    gsap.registerPlugin(ScrollTrigger);

    gsap.from('#resourcesSection .resources-header-anim', {
        scrollTrigger: {
            trigger: '#resourcesSection',
            start: 'top 85%',
        },
        y: 30,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    gsap.from('#resourcesSection .resource-card-anim', {
        scrollTrigger: {
            trigger: '#resourcesSection',
            start: 'top 80%',
        },
        y: 120,
        opacity: 0,
        duration: 1.2,
        stagger: 0.3,
        scale: 0.85,
        ease: 'power3.out'
    });

});
</script>