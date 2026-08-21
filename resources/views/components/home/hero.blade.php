<div class="relative w-full h-[85vh] min-h-[600px] overflow-hidden bg-corporate-primary" id="heroCarousel">

    <div id="slidesContainer"></div>

    {{-- Previous Slide --}}
    <button
        onclick="heroCarousel.prev()"
        class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-20 p-3 md:p-4 rounded-full bg-white/10 hover:bg-white/25 backdrop-blur-md border border-white/20 text-white transition-all duration-300 group hidden sm:flex items-center justify-center"
        aria-label="Previous slide"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2.5"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="group-hover:-translate-x-1 transition-transform">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>

    {{-- Next Slide --}}
    <button
        onclick="heroCarousel.next()"
        class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-20 p-3 md:p-4 rounded-full bg-white/10 hover:bg-white/25 backdrop-blur-md border border-white/20 text-white transition-all duration-300 group hidden sm:flex items-center justify-center"
        aria-label="Next slide"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2.5"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="group-hover:translate-x-1 transition-transform">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>

    {{-- Pagination Dots --}}
    <div
        id="dotsContainer"
        class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 z-20 translate-y-1/2 w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg border border-slate-100 hidden md:flex animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="24"
             height="24"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="text-corporate-primary">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </div>

</div>

<script>
const heroCarousel = {
    current: 0,
    total: 3,
    autoPlayInterval: null,

    slides: [
        {
            image: "https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop",
            title: "Global Strategy & Expansion",
            subtitle: "Navigate the global market with corporate precision",
            bottomText: "Strategic Solutions"
        },
        {
            image: "https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop",
            title: "Enterprise Technology",
            subtitle: "Future-proof your IT infrastructure",
            bottomText: "Digital Transformation"
        },
        {
            image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop",
            title: "Financial Advisory",
            subtitle: "Expert insights for sustainable growth",
            bottomText: "Financial Consulting"
        }
    ],

    render() {
        const container = document.getElementById('slidesContainer');

        container.innerHTML = this.slides.map((slide, index) => `
            <div
                class="absolute inset-0 transition-opacity duration-1000 ease-in-out
                ${index === this.current
                    ? 'opacity-100 z-10 slide-active'
                    : 'opacity-0 z-0'}"
            >

                {{-- Background Image Layer --}}
                <div class="absolute inset-0 bg-corporate-primary">

                    <img
                        src="${slide.image}"
                        alt="${slide.title}"
                        class="w-full h-full object-cover opacity-40 mix-blend-luminosity"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-corporate-primary via-corporate-primary/50 to-transparent"></div>

                    <div class="absolute inset-0 bg-gradient-to-r from-corporate-primary/80 via-transparent to-transparent"></div>

                </div>

                {{-- Content Layer --}}
                <div class="absolute inset-0 flex flex-col justify-center">

                    <div class="container-custom w-full">

                        <div class="hero-content-anim max-w-4xl text-center xl:text-left will-change-transform opacity-100">

                            <span class="inline-block py-1.5 px-4 rounded-full bg-corporate-accent/20 border border-corporate-accent/50 text-corporate-accent text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-md shadow-sm">
                                ${slide.bottomText}
                            </span>

                            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 tracking-tight leading-[1.1] drop-shadow-2xl">
                                ${slide.title}
                            </h1>

                            <p class="text-lg md:text-[17px] text-slate-300 font-medium max-w-2xl drop-shadow-md pb-10">
                                ${slide.subtitle}
                            </p>

                            <div class="flex flex-col sm:flex-row gap-5 justify-center xl:justify-start items-center">

                                <button class="bg-corporate-accent hover:bg-opacity-90 text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 shadow-lg hover:shadow-corporate-accent/50 hover:-translate-y-1">
                                    Discover More
                                </button>

                                <button class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1">
                                    Contact Us
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        `).join('');

        this.updateDots();

        // Animate newly active slide
        this.animateActiveSlide();
    },

    updateDots() {
        document.getElementById('dotsContainer').innerHTML =
            this.slides.map((_, index) => `
                <button
                    onclick="heroCarousel.goTo(${index})"
                    aria-label="Go to slide ${index + 1}"
                    class="h-2 rounded-full transition-all duration-500 shadow-md
                    ${index === this.current
                        ? 'w-12 bg-corporate-accent'
                        : 'w-3 bg-white/40 hover:bg-white/80'}">
                </button>
            `).join('');
    },

    animateActiveSlide() {
        const activeContent = document.querySelector(
            '#heroCarousel .slide-active .hero-content-anim'
        );

        if (!activeContent || typeof gsap === 'undefined') return;

        gsap.from(activeContent.children, {
            y: 120,
            opacity: 0,
            duration: 1.2,
            scale: 0.8,
            stagger: 0.3,
            ease: "power4.out"
        });
    },

    next() {
        this.current = (this.current + 1) % this.total;
        this.render();
        this.resetAutoPlay();
    },

    prev() {
        this.current = (this.current - 1 + this.total) % this.total;
        this.render();
        this.resetAutoPlay();
    },

    goTo(index) {
        this.current = index;
        this.render();
        this.resetAutoPlay();
    },

    resetAutoPlay() {
        clearInterval(this.autoPlayInterval);

        this.autoPlayInterval = setInterval(() => {
            this.next();
        }, 6000);
    }
};

document.addEventListener('DOMContentLoaded', () => {
    heroCarousel.render();
    heroCarousel.resetAutoPlay();
});
</script>

