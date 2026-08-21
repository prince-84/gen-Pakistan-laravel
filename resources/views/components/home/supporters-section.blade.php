<section id="supportersSection"
    class="supporters-section py-24 bg-slate-50 border-t border-slate-200 overflow-hidden">

    <div class="container-custom text-center">

        <h2 class="supporter-anim text-sm font-bold tracking-widest text-slate-400 uppercase mb-12 will-change-[transform,opacity]">
            Trusted Strategic Partners
        </h2>

        <div class="supporter-anim flex flex-wrap items-center justify-center gap-16 opacity-70 hover:opacity-100 transition-opacity duration-700 will-change-[transform,opacity]">

            {{-- Placeholder for corporate partner logo --}}
            <div class="flex items-center gap-2 grayscale hover:grayscale-0 transition-all duration-500 cursor-pointer">

                <div class="relative flex items-center justify-center">
                    <span class="text-3xl font-extrabold text-corporate-primary tracking-tighter">
                        GLOBAL<span class="text-corporate-accent uppercase">CORP</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);

    const section = document.getElementById('supportersSection');

    if (!section) return;

    gsap.from('#supportersSection .supporter-anim', {
        scrollTrigger: {
            trigger: section,
            start: 'top 90%',
        },
        y: 80,
        opacity: 0,
        duration: 1.5,
        stagger: 0.2,
        scale: 0.8,
        ease: 'power4.out'
    });
});
</script>