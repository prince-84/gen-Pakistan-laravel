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
        <aside class="w-64 bg-corporate-primary text-white flex-shrink-0">

            <div class="p-6 border-b border-white/10">
                <h1 class="text-xl font-bold">
                    GEN Pakistan
                </h1>

                <p class="text-xs text-white/60 mt-1 uppercase tracking-wider">
                    Content Management
                </p>
            </div>

            <nav class="p-4 space-y-1">

                <a href="/admin"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Dashboard
                </a>

                <div class="pt-4 pb-2 px-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-white/50">
                        Website Content
                    </span>
                </div>

                <a href="/admin/services"
                    class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Services
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Banner
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Action
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Resources
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    News
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors">
                    Supporters
                </a>

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

</body>
</html>