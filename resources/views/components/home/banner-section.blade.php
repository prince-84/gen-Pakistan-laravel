<section id="bannerSection" class="banner-section relative py-32 overflow-hidden bg-corporate-primary">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <img
            src="/images/corporate_banner_bg.png"
            alt="Corporate Business Collaboration"
            class="banner-bg-anim w-full h-full object-cover opacity-50 mix-blend-overlay"
        />

        <div class="absolute inset-0 bg-gradient-to-r from-corporate-primary/95 via-corporate-primary/75 to-corporate-primary/40"></div>
    </div>

    <div class="container-custom relative z-10">
        <div class="max-w-3xl">

            {{-- Section Label --}}
            <div class="banner-content-anim flex items-center gap-3 mb-6">
                <div class="h-0.5 w-12 bg-corporate-accent rounded-full"></div>

                <span class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">
                    Accelerate Growth
                </span>
            </div>

            {{-- Heading --}}
            <h3 class="banner-content-anim text-4xl md:text-5xl lg:text-[42px] font-semibold text-white tracking-tight leading-[1.2] mb-8">
                Join the Global Network of Forward-Thinking Enterprise Leaders
            </h3>

            {{-- Description --}}
            <p class="banner-content-anim text-slate-300 text-lg leading-relaxed mb-10 max-w-2xl font-medium">
                Unlock exclusive access to strategic resources, high-level networking, and global market expansion opportunities. We empower visionary businesses to scale globally.
            </p>

            {{-- Buttons --}}
            <div class="banner-content-anim flex flex-col sm:flex-row gap-5">
                <a
                    href="/contact"
                    class="inline-flex justify-center items-center bg-corporate-accent hover:bg-sky-500 text-white px-8 py-4 rounded-xl font-bold tracking-wide shadow-lg shadow-corporate-accent/30 hover:-translate-y-1 transition-all duration-300"
                >
                    Become a Member
                </a>

                <a
                    href="/about"
                    class="inline-flex justify-center items-center bg-transparent border border-slate-500 hover:border-white text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 hover:bg-white/5"
                >
                    Learn More About Us
                </a>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);

    const section = document.getElementById('bannerSection');

    if (!section) return;

    // Content entrance animation
    gsap.from('#bannerSection .banner-content-anim', {
        scrollTrigger: {
            trigger: section,
            start: 'top 80%',
        },
        y: 50,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: 'power3.out'
    });

    // Background parallax / scale animation
    gsap.fromTo(
        '#bannerSection .banner-bg-anim',
        {
            scale: 1.1
        },
        {
            scale: 1,
            scrollTrigger: {
                trigger: section,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1.5
            }
        }
    );
});
</script>

