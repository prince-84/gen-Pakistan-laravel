<section class="py-24 bg-corporate-primary text-white overflow-hidden" id="bannerSection">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="banner-text">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Join the Global Entrepreneurship Movement
                </h2>
                <p class="text-lg text-slate-300 mb-8 leading-relaxed">
                    Be part of a network of 200+ countries working together to empower entrepreneurs and build stronger ecosystems.
                </p>
                <button class="bg-corporate-accent hover:bg-opacity-90 text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 shadow-lg hover:shadow-corporate-accent/50 hover:-translate-y-1">
                    Get Involved
                </button>
            </div>

            <div class="banner-features">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-12 border border-white/20">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-corporate-accent/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-2xl font-bold text-corporate-accent">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Global Network</h3>
                                <p class="text-slate-300">Connect with entrepreneurs worldwide and expand your opportunities.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-corporate-accent/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-2xl font-bold text-corporate-accent">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Expert Mentorship</h3>
                                <p class="text-slate-300">Learn from industry leaders and accelerate your growth.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-corporate-accent/20 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-2xl font-bold text-corporate-accent">✓</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Funding Opportunities</h3>
                                <p class="text-slate-300">Access capital and investment for your entrepreneurial ventures.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from("#bannerSection .banner-text, #bannerSection .banner-features", {
        scrollTrigger: {
            trigger: "#bannerSection",
            start: "top 80%",
        },
        x: (index) => index === 0 ? -100 : 100,
        opacity: 0,
        duration: 1.2,
        ease: "power3.out"
    });
});
</script>