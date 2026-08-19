import Alpine from 'alpinejs';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Define initHero globally BEFORE Alpine starts
window.initHero = function() {
    return {
        currentSlide: 0,
        autoPlayInterval: null,
        slides: [
            {
                image: "https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop",
                title: "Global Strategy & Expansion",
                subtitle: "Navigate the global market with corporate precision",
                bottomText: "Strategic Solutions",
                color: "#0f172a"
            },
            {
                image: "https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop",
                title: "Enterprise Technology",
                subtitle: "Future-proof your IT infrastructure",
                bottomText: "Digital Transformation",
                color: "#0284c7"
            },
            {
                image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop",
                title: "Financial Advisory",
                subtitle: "Expert insights for sustainable growth",
                bottomText: "Financial Consulting",
                color: "#334155"
            }
        ],
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            this.animateContent();
            this.resetAutoPlay();
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            this.animateContent();
            this.resetAutoPlay();
        },
        animateContent() {
            gsap.from(".slide-active .hero-content-anim > *", {
                y: 120,
                opacity: 0,
                duration: 1.2,
                scale: 0.8,
                stagger: 0.3,
                ease: "power4.out",
            });
        },
        startAutoPlay() {
            this.autoPlayInterval = setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.animateContent();
            }, 6000);
        },
        resetAutoPlay() {
            clearInterval(this.autoPlayInterval);
            this.startAutoPlay();
        },
        init() {
            this.startAutoPlay();
            this.$nextTick(() => {
                this.animateContent();
            });
        }
    }
}

// Make Alpine and GSAP globally available
window.Alpine = Alpine;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Start Alpine AFTER functions are defined
Alpine.start();