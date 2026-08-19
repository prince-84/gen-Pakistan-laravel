<section class="py-24 bg-white overflow-hidden" id="newsSection">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>
                <span class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">Latest News</span>
                <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-corporate-primary mb-6">
                What's Happening
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto text-lg">
                Stay updated with the latest news and announcements from GEN Pakistan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <article class="news-anim bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 group">
                <div class="h-48 bg-gradient-to-br from-corporate-primary to-corporate-secondary relative overflow-hidden">
                    <div class="absolute inset-0 opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <span class="text-xs font-bold text-corporate-accent tracking-widest uppercase">Announcement</span>
                    <h3 class="text-xl font-bold text-corporate-primary mt-3 mb-3 group-hover:text-corporate-accent transition-colors">Ecosystem Growth Initiative Launched</h3>
                    <p class="text-slate-600 text-sm mb-4">Discover how GEN Pakistan is accelerating entrepreneurship growth across the nation.</p>
                    <a href="#" class="text-corporate-accent font-bold text-sm hover:underline">Read More →</a>
                </div>
            </article>

            <article class="news-anim bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 group">
                <div class="h-48 bg-gradient-to-br from-corporate-accent to-red-600 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <span class="text-xs font-bold text-corporate-accent tracking-widest uppercase">Event</span>
                    <h3 class="text-xl font-bold text-corporate-primary mt-3 mb-3 group-hover:text-corporate-accent transition-colors">Global Entrepreneurship Week 2026</h3>
                    <p class="text-slate-600 text-sm mb-4">Join us for celebrations and networking opportunities throughout the month.</p>
                    <a href="#" class="text-corporate-accent font-bold text-sm hover:underline">Learn More →</a>
                </div>
            </article>

            <article class="news-anim bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-100 group">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-corporate-primary relative overflow-hidden">
                    <div class="absolute inset-0 opacity-50 group-hover:opacity-75 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <span class="text-xs font-bold text-corporate-accent tracking-widest uppercase">Update</span>
                    <h3 class="text-xl font-bold text-corporate-primary mt-3 mb-3 group-hover:text-corporate-accent transition-colors">New Mentorship Program Available</h3>
                    <p class="text-slate-600 text-sm mb-4">Connect with experienced mentors to guide your entrepreneurial journey.</p>
                    <a href="#" class="text-corporate-accent font-bold text-sm hover:underline">Join Now →</a>
                </div>
            </article>
        </div>
    </div>
</section>

<script>
function initNewsAnimations() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from(".news-anim", {
        scrollTrigger: {
            trigger: "section:has(.news-anim)",
            start: "top 80%",
        },
        y: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out"
    });
}

document.addEventListener('DOMContentLoaded', initNewsAnimations);
</script>