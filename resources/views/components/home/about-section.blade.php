<section id="aboutSection" class="about-section py-24 bg-white overflow-hidden">
    <div class="container-custom">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            {{-- Main Content --}}
            <div class="lg:col-span-8">

                <div class="flex items-center gap-3 mb-4">
                    <div class="h-0.5 w-10 bg-corporate-accent rounded-full"></div>

                    <span class="text-sm font-black tracking-[0.2em] text-corporate-accent uppercase">
                        About Us
                    </span>
                </div>

                <h3 class="text-4xl md:text-5xl lg:text-[42px] font-semibold text-corporate-primary tracking-tight leading-[1.1] mb-10">
                    Empowering Global<br />Innovation in Pakistan
                </h3>

                <div class="about-anim text-slate-600 leading-relaxed space-y-8 mb-12 max-w-3xl font-medium">

                    <p>
                        GEN began working in Pakistan in 2008 when it launched Global Entrepreneurship Week (GEW). The first campaign focused on catalyzing Pakistan’s entrepreneurial community and held build a consensus around the wide-ranging benefits of entrepreneurship. Each successive year drew in steadily higher-profile champions and greater government attention, building the campaign into a national movement. GEN's partnerships reached across the countr y to include chambers of commerce, incubators, and universities. In 2019, GEN established a Startup Huddle chapter in Lahore, hosted by Innovation District 92, to support founders. In 2022, GEN established a registered affiliate, GEN Pakistan, to carry its work forward on a year-round basis and added Huddle chapters in Islamabad and Karachi.
                    </p>

                    <p>
                        GEN maintains relationships with a broad range of Pakistani institutions, including the Prime Minister's Office, the Senate of Pakistan, the Higher Education Commission, the Punjab Small Industries Corporation, the Arfa Karim Foundation, Ashreitech, and Ejad Labs. To extend its reach, GEN has worked with National Incubation Center campuses in Hyderabad and Peshawar, and hosted GEW programming and pitch competitions for founders in Khyber Pakhtunkhwa and Sindh.
                    </p>

                </div>

                <div class="about-anim will-change-[transform,opacity]">

                    <button class="bg-corporate-primary hover:bg-corporate-secondary text-white px-8 py-4 rounded-xl font-bold tracking-wide shadow-lg shadow-corporate-primary/20 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        Discover Our Global Impact
                    </button>

                </div>

            </div>


            {{-- Profile Card --}}
            <div class="about-anim lg:col-span-4 will-change-[transform,opacity]">

                <div class="bg-slate-50 p-10 rounded-3xl border border-slate-100 shadow-2xl shadow-slate-200/50 flex flex-col items-center text-center relative overflow-hidden group">

                    {{-- Decorative Background Element --}}
                    <div class="absolute top-0 left-0 w-full h-40 bg-gradient-to-br from-corporate-primary/5 to-corporate-accent/10"></div>

                    <div class="relative w-48 h-48 mb-8 rounded-full overflow-hidden border-[10px] border-white shadow-xl z-10 transition-transform duration-700 group-hover:scale-105">

                        <img
                            src="{{ asset('images/kashif-khan.png') }}"
                            alt="Kashif Khan"
                            class="w-full h-full object-cover"
                        >

                    </div>

                    <h3 class="text-2xl font-semibold text-corporate-primary mb-2">
                        Kashif Khan
                    </h3>

                    <p class="text-sm text-corporate-accent font-bold uppercase tracking-widest mb-6">
                        Managing Director
                    </p>

                    <p class="text-slate-500 text-sm font-medium leading-relaxed">
                        Driving strategic growth and enterprise excellence within the regional ecosystem.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    gsap.registerPlugin(ScrollTrigger);

    gsap.from('#aboutSection .about-anim', {
        scrollTrigger: {
            trigger: '#aboutSection',
            start: 'top 80%',
        },
        y: 150,
        opacity: 0,
        duration: 1.5,
        scale: 0.85,
        stagger: 0.3,
        ease: 'power4.out'
    });

});
</script>
