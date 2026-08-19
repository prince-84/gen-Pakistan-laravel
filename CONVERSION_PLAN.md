# Next.js to Laravel Conversion Plan

## 1. Project Overview

**Current State:**

- Framework: Next.js 16.1.6
- Language: TypeScript + React
- Styling: Tailwind CSS
- Animation Library: GSAP
- Content Type: Static/hardcoded (no database)
- Pages: 8 routes (homepage + 7 content pages)
- Components: 10 reusable components (Header, Footer, 8 homepage sections)

**Conversion Goal:**
Convert to Laravel while maintaining all interactive features and visual design.

## 2. Architecture Overview

**Target Stack:**
- Framework: Laravel 11
- Template Engine: Blade
- Frontend JS: Alpine.js (for interactivity + animations)
- Styling: Tailwind CSS (continue using)
- Animation Library: GSAP (continue using)
- Asset Pipeline: Vite (Laravel default)

**Why these choices:**
- **Blade:** Perfect for server-rendered static content
- **Alpine.js:** Lightweight, keeps JS interactivity simple (carousels, animations, toggles)
- **Vite:** Standard in modern Laravel, handles CSS/JS bundling
- **Keep GSAP & Tailwind:** No need to rewrite working animations/styles

## 3. File Structure Mapping

**Next.js → Laravel conversion:**

| Next.js | Laravel | Purpose |
|---------|---------|---------|
| `src/app/layout.tsx` | `resources/views/layouts/app.blade.php` | Master layout (Header + Footer wrapper) |
| `src/app/page.tsx` | `resources/views/home.blade.php` | Homepage |
| `src/app/about/page.tsx` | `resources/views/pages/about.blade.php` | About page |
| `src/app/contact/page.tsx` | `resources/views/pages/contact.blade.php` | Contact page |
| (other pages) | `resources/views/pages/*.blade.php` | Other pages (/board-staff, /partners, etc.) |
| `src/components/layout/Header.tsx` | `resources/views/components/header.blade.php` | Reusable header component |
| `src/components/layout/Footer.tsx` | `resources/views/components/footer.blade.php` | Reusable footer component |
| `src/components/home/*.tsx` | `resources/views/components/home/*.blade.php` | Homepage section components |
| `public/` | `public/` | Static assets (continue as-is) |
| `src/app/globals.css` | `resources/css/app.css` | Global styles |
| `package.json` | `package.json` (Laravel version) | Node dependencies + npm scripts |

## 4. Routes & Controllers

**Laravel routes file:** `routes/web.php`

| Route | Controller Method | View | Description |
|-------|-------------------|------|-------------|
| `/` | `HomeController@index` | `home.blade.php` | Homepage with 8 sections |
| `/about` | `PageController@about` | `pages/about.blade.php` | About page |
| `/board-staff` | `PageController@boardStaff` | `pages/board-staff.blade.php` | Board + Staff page |
| `/compass-awards` | `PageController@compassAwards` | `pages/compass-awards.blade.php` | Compass Awards page |
| `/contact` | `PageController@contact` | `pages/contact.blade.php` | Contact page |
| `/global-leaders` | `PageController@globalLeaders` | `pages/global-leaders.blade.php` | Global Leaders page |
| `/managing-directors` | `PageController@managingDirectors` | `pages/managing-directors.blade.php` | Managing Directors page |
| `/partners` | `PageController@partners` | `pages/partners.blade.php` | Partners page |

**Controller Structure:**
- `app/Http/Controllers/HomeController.php` — Handles homepage logic
- `app/Http/Controllers/PageController.php` — Handles all static pages

**Note:** Since all content is hardcoded, controllers will simply return views with no dynamic data fetching initially.

## 5. JavaScript & Interactivity Strategy

**Components that need JavaScript:**

| Component | Current Tech | Laravel Approach | Details |
|-----------|--------------|------------------|---------|
| Header mega-menu | React state + CSS | Alpine.js directives | Hover/click toggles for dropdown visibility |
| Hero carousel | React state + GSAP | Alpine.js + GSAP | Auto-rotate, prev/next buttons, pagination dots |
| Homepage sections | GSAP ScrollTrigger | Alpine.js + GSAP | Fade-in animations when scrolling into view |
| Mobile menu toggle | React state | Alpine.js | Show/hide mobile nav on click |
| Buttons & links | Plain HTML | Plain HTML/Alpine | No changes needed |

**Approach:**
- Use **Alpine.js** for all state management (which slide is active, menu open/closed, etc.)
- Keep **GSAP** for animations (no need to rewrite working animations)
- Keep **Tailwind CSS** for styling (no changes needed)
- All JavaScript will be in Blade template files or separate JS modules in `resources/js/`

**Asset Compilation:**
- Use **Vite** (Laravel's default) to bundle JS/CSS
- GSAP will be imported via npm, same as current Next.js setup

## 6. Implementation Order

**Phase 1: Project Setup (Foundation)**
1. Create fresh Laravel 11 project
2. Set up Tailwind CSS in Laravel (via Vite)
3. Install GSAP and Alpine.js via npm
4. Copy `globals.css` and adapt to Laravel's CSS structure
5. Create basic folder structure (`resources/views/layouts`, `resources/views/components`, `resources/views/pages`)

**Phase 2: Layout Components (Shared Structure)**
6. Convert `Header.tsx` → `components/header.blade.php` (with Alpine.js for mega-menu)
7. Convert `Footer.tsx` → `components/footer.blade.php`
8. Create `layouts/app.blade.php` that wraps Header + Footer

**Phase 3: Homepage Sections (Reusable Components)**
9. Convert `Hero.tsx` → `components/home/hero.blade.php` (with Alpine.js carousel + GSAP animations)
10. Convert `AboutSection.tsx` → `components/home/about-section.blade.php` (with GSAP ScrollTrigger)
11. Convert remaining 6 homepage sections similarly

**Phase 4: Pages (Content)**
12. Create `HomeController@index` returning `home.blade.php` (combines 8 sections)
13. Create `PageController` with methods for each static page
14. Convert `/about`, `/contact`, and other pages to Blade views

**Phase 5: Testing & Refinement**
15. Test all routes and navigation
16. Test animations and interactivity across browsers
17. Document any features that differ from Next.js version
18. Report limitations (if any) to senior

## 7. Known Considerations

**Potential Challenges & Solutions:**

| Item | Challenge | Solution | Priority |
|------|-----------|----------|----------|
| Hero carousel auto-rotate | Alpine.js interval timing | Use Alpine.js with JS setInterval | Medium |
| GSAP ScrollTrigger | Detect scroll position in Alpine | Alpine.js can integrate GSAP ScrollTrigger | Medium |
| Mobile menu animation | CSS transitions in Alpine | Use Alpine with Tailwind transitions | Low |
| Image optimization | Next.js Image component | Use Laravel Blade `<img>` tags, optimize manually | Low |
| External Unsplash images | Already broken in Next.js | Will remain same in Laravel (not a conversion issue) | Low |

**What will NOT change:**
- Visual design (same Tailwind CSS)
- Animation effects (same GSAP)
- Page content (all hardcoded, no database)
- Public assets (copied as-is)

**What will change:**
- Template syntax (React TSX → Blade PHP)
- Routing system (Next.js file-based → Laravel routes file)
- Build process (Next.js → Vite)
- Backend language (TypeScript/Node → PHP/Laravel)

## 8. Status & Next Steps

**Current Status:**
- ✅ Codebase analyzed and understood
- ✅ Conversion plan documented
- ⏳ Ready to start implementation

**Next Step:**
- Senior developer review of this plan
- Confirmation to proceed with Phase 1 (Laravel setup)
- Begin actual conversion work