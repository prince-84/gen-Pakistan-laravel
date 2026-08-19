<section class="py-24 bg-white overflow-hidden" id="actionSection">
    <div class="container-custom">
        <div class="bg-gradient-to-r from-corporate-primary to-corporate-secondary rounded-3xl p-12 md:p-16 text-white text-center action-content">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Make an Impact?
            </h2>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto mb-10">
                Whether you're an entrepreneur, investor, or ecosystem builder, GEN Pakistan is your platform for growth and collaboration.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-corporate-accent hover:bg-opacity-90 text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 shadow-lg hover:shadow-corporate-accent/50 hover:-translate-y-1">
                    Start Your Journey
                </button>
                <button class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300 hover:-translate-y-1">
                    Learn More
                </button>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from("#actionSection .action-content", {
        scrollTrigger: {
            trigger: "#actionSection",
            start: "top 80%",
        },
        y: 100,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });
});
</script>