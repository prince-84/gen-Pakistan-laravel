@php
    $sidebarSections = [
        [
            'name' => 'Homepage',
            'items' => [
                ['label' => 'Services', 'href' => '/admin/services'],
                ['label' => 'Banner', 'href' => '/admin/banner'],
                ['label' => 'Action', 'href' => '/admin/action'],
                ['label' => 'Resources', 'href' => '/admin/resources'],
                ['label' => 'News', 'href' => '/admin/news'],
            ],
        ],
        [
            'name' => 'About',
            'items' => [
                ['label' => 'About GEN', 'href' => '#'],
                ['label' => 'Our Partners', 'href' => '#'],
                ['label' => 'Contact GEN', 'href' => '#'],
            ],
        ],
        [
            'name' => 'Our Work',
            'items' => [],
        ],
        [
            'name' => 'Resources',
            'items' => [],
        ],
        [
            'name' => 'Events',
            'items' => [],
        ],
        [
            'name' => 'News',
            'items' => [],
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'GEN Pakistan CMS')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-slate-800">

    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-corporate-primary text-white flex-shrink-0 h-screen sticky top-0">

            <!-- CMS Brand / Dashboard Link -->
            <a href="/admin"
            class="block p-6 border-b border-white/10 hover:bg-white/5 transition-colors">

                <h1 class="text-xl font-bold">
                    GEN Pakistan
                </h1>

                <p class="text-xs text-white/60 mt-1 uppercase tracking-wider">
                    Content Management
                </p>

            </a>


            <!-- Sidebar Navigation -->
            <nav class="p-4 overflow-y-auto h-[calc(100vh-97px)] sidebar-scroll">
                @foreach ($sidebarSections as $section)

                    <div class="sidebar-section mt-1">

                        <button
                            type="button"
                            class="sidebar-accordion w-full flex items-center justify-between px-4 py-3 rounded-lg hover:bg-white/10 transition-colors text-left"
                        >
                            <span class="text-lg font-bold">
                                {{ $section['name'] }}
                            </span>

                            <svg
                                class="sidebar-chevron w-4 h-4 transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sidebar-accordion-content ml-3 mt-1 space-y-4 hidden">

                            @foreach ($section['items'] as $item)

                                <a
                                    href="{{ $item['href'] }}"
                                    class="block px-4 py-2.5 rounded-lg text-white/80 hover:bg-white/10 hover:text-white transition-colors text-base font-semibold"
                                >
                                    {{ $item['label'] }}
                                </a>

                            @endforeach

                        </div>

                    </div>

                @endforeach
            </nav>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 min-w-0">

            <header class="bg-white border-b border-slate-200 px-8 py-5">
                <h2 class="text-xl font-bold text-corporate-primary">
                    @yield('page-heading', 'Dashboard')
                </h2>
            </header>

            <div class="p-8">
                @yield('content')
            </div>

        </main>

    </div>

        <style>
            .sidebar-scroll {
                scrollbar-width: none;
            }

            .sidebar-scroll::-webkit-scrollbar {
                display: none;
            }
        </style>

        <script>
        document.addEventListener('DOMContentLoaded', function () {

            const accordions = document.querySelectorAll('.sidebar-accordion');

            accordions.forEach(function (accordion) {

                accordion.addEventListener('click', function () {

                    const content = accordion.nextElementSibling;
                    const chevron = accordion.querySelector('.sidebar-chevron');

                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        chevron.classList.add('rotate-180');
                    } else {
                        content.classList.add('hidden');
                        chevron.classList.remove('rotate-180');
                    }

                });

            });

        });
        </script>

</body>
</html>
