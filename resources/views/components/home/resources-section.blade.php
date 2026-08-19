<section class="py-24 bg-slate-50 overflow-hidden" id="resourcesSection">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>
                <span class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">Resources</span>
                <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-corporate-primary mb-6">
                Tools & Knowledge
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">
                Access our comprehensive library of resources to support your entrepreneurial journey.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="#" class="resources-anim group">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                    <div class="w-12 h-12 bg-corporate-accent/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-corporate-accent/20 transition-colors">
                        <svg class="w-6 h-6 text-corporate-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-corporate-primary mb-2 group-hover:text-corporate-accent transition-colors">Research Library</h3>
                    <p class="text-slate-600">Access latest reports, studies, and market insights.</p>
                </div>
            </a>

            <a href="#" class="resources-anim group">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                    <div class="w-12 h-12 bg-corporate-accent/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-corporate-accent/20 transition-colors">
                        <svg class="w-6 h-6 text-corporate-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-corporate-primary mb-2 group-hover:text-corporate-accent transition-colors">Funding Guide</h3>
                    <p class="text-slate-600">Learn about investment opportunities and financing.</p>
                </div>
            </a>

            <a href="#" class="resources-anim group">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 h-full">
                    <div class="w-12 h-12 bg-corporate-accent/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-corporate-accent/20 transition-colors">
                        <svg class="w-6 h-6 text-corporate-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-corporate-primary mb-2 group-hover:text-corporate-accent transition-colors">Training Programs</h3>
                    <p class="text-slate-600">Develop skills with our expert-led workshops.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<script>
function initResourcesAnimations() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from(".resources-anim", {
        scrollTrigger: {
            trigger: "section:has(.resources-anim)",
            start: "top 80%",
        },
        y: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out"
    });
}

document.addEventListener('DOMContentLoaded', initResourcesAnimations);
</script>