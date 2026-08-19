<section class="py-24 bg-slate-50 overflow-hidden" id="supportersSection">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-corporate-primary mb-6">
                Supported By
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">
                Partner organizations dedicated to fostering entrepreneurship in Pakistan.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 supporters-anim">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 flex items-center justify-center min-h-[140px] group hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-sm font-bold text-slate-600 group-hover:text-corporate-accent transition-colors">Partner Organization</div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 flex items-center justify-center min-h-[140px] group hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-sm font-bold text-slate-600 group-hover:text-corporate-accent transition-colors">Partner Organization</div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 flex items-center justify-center min-h-[140px] group hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-sm font-bold text-slate-600 group-hover:text-corporate-accent transition-colors">Partner Organization</div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 flex items-center justify-center min-h-[140px] group hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-sm font-bold text-slate-600 group-hover:text-corporate-accent transition-colors">Partner Organization</div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 flex items-center justify-center min-h-[140px] group hover:-translate-y-1">
                <div class="text-center">
                    <div class="text-sm font-bold text-slate-600 group-hover:text-corporate-accent transition-colors">Partner Organization</div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <button class="bg-corporate-primary hover:bg-corporate-secondary text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                Become a Partner
            </button>
        </div>
    </div>
</section>

<script>
function initSupportersAnimations() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from(".supporters-anim > div", {
        scrollTrigger: {
            trigger: ".supporters-anim",
            start: "top 80%",
        },
        y: 80,
        opacity: 0,
        duration: 0.8,
        stagger: 0.1,
        ease: "power3.out"
    });
}

document.addEventListener('DOMContentLoaded', initSupportersAnimations);
</script>