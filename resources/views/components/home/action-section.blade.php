<section id="actionSection" class="action-section py-24 bg-slate-50 border-y border-slate-200 overflow-hidden">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

        {{-- Main Content --}}
        <div class="action-content-anim lg:col-span-7 flex flex-col will-change-[transform,opacity]">
            <div class="flex flex-col items-start mb-10">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>
                    <span class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">
                        Global Situations
                    </span>
                </div>

                <h3 class="text-4xl md:text-5xl lg:text-[42px] font-semibold text-corporate-primary tracking-tight leading-[1.1]">
                    Strategic Global<br />Involvement
                </h3>
            </div>

            <p class="text-slate-600 leading-relaxed mb-10">
                Partnering with forward-thinking enterprises to drive economic growth and expand strategic global influence. Join our network of top-tier executives and founders to shape the future of enterprise innovation.
            </p>

            <div class="flex flex-col sm:flex-row gap-5">
                <button class="bg-corporate-primary hover:bg-corporate-secondary text-white px-8 py-4 rounded-xl font-bold tracking-wide shadow-lg shadow-corporate-primary/20 hover:-translate-y-1 transition-all duration-300">
                    Initiate Partnership
                </button>

                <button class="bg-white hover:bg-slate-50 text-corporate-primary border border-slate-200 px-8 py-4 rounded-xl font-bold tracking-wide shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    Corporate Access
                </button>
            </div>
        </div>

        {{-- Sidebar Content --}}
        <div class="action-sidebar-anim lg:col-span-5 will-change-[transform,opacity]">

            {{-- Quote Block --}}
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/50 relative overflow-hidden group">

                {{-- Decorative Quote --}}
                <div class="absolute top-0 right-0 p-6 opacity-[0.03] rotate-180 text-corporate-primary group-hover:scale-110 transition-transform duration-500">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 21L16.41 14.596L18 14.654C19.743 14.771 21.054 13.565 21.233 11.516C21.411 9.497 20.306 8.272 18.513 8.35L17.553 8.414C17.575 6.946 18.151 5.485 19.336 4.316L17.882 2.862C16.275 4.329 15.353 6.368 15.009 8.643C14.717 10.609 14.931 12.302 16.035 13.435L13.593 19.957L14.017 21ZM5.017 21L7.41 14.596L9 14.654C10.743 14.771 12.054 13.565 12.233 11.516C12.411 9.497 11.306 8.272 9.513 8.35L8.553 8.414C8.575 6.946 9.151 5.485 10.336 4.316L8.882 2.862C7.275 4.329 6.353 6.368 6.009 8.643C5.717 10.609 5.931 12.302 7.035 13.435L4.593 19.957L5.017 21Z" />
                    </svg>
                </div>

                <p class="mb-8 text-slate-700 italic text-lg leading-relaxed relative z-10 font-medium tracking-wide">
                    "In the modern economic landscape, enterprise agility and bold strategic partnerships are the true drivers of sustainable global success."
                </p>

                <div class="flex items-center gap-4 relative z-10">
                    <div class="relative w-14 h-14 rounded-full overflow-hidden shadow-md border-2 border-white">
                        <img
                            src="/images/author.png"
                            alt="Industry Leader"
                            class="w-full h-full object-cover"
                        />
                    </div>

                    <div>
                        <div class="text-base font-extrabold text-corporate-primary">
                            Executive Board
                        </div>

                        <div class="text-xs uppercase font-bold text-corporate-accent tracking-widest mt-1">
                            Global Strategy Group
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);

    const section = document.getElementById('actionSection');

    if (!section) return;

    gsap.from('#actionSection .action-content-anim', {
        scrollTrigger: {
            trigger: section,
            start: 'top 80%',
        },
        x: -150,
        y: 50,
        opacity: 0,
        duration: 1.5,
        scale: 0.8,
        ease: 'power4.out'
    });

    gsap.from('#actionSection .action-sidebar-anim', {
        scrollTrigger: {
            trigger: section,
            start: 'top 80%',
        },
        x: 150,
        y: 50,
        opacity: 0,
        duration: 1.5,
        scale: 0.8,
        ease: 'power4.out'
    });
});
</script>
