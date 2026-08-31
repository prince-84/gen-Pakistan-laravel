<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>CMS Login | GEN Pakistan</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center px-4">


<div class="w-full max-w-[380px]">

    {{-- Login Card --}}
    <div class="bg-white border border-slate-200 rounded-xl shadow-lg shadow-slate-900/5 px-7 py-8">

        {{-- Logo --}}
        <div class="text-center mb-6">

            <img
                src="/images/gen_logo.png"
                alt="GEN Pakistan"
                class="h-12 w-auto mx-auto object-contain"
            >

        </div>


        {{-- Heading --}}
        <div class="text-center mb-7">

            <h1 class="text-xl font-bold tracking-tight text-slate-900">
                Welcome back
            </h1>

            <p class="mt-1.5 text-sm text-slate-500">
                Sign in to manage GEN Pakistan content
            </p>

        </div>


        {{-- Form --}}
        <form action="/admin/login" method="POST">
            @csrf

            <div class="space-y-4">

                {{-- Email --}}
                <div>

                    <label
                        for="email"
                        class="block text-xs font-semibold text-slate-700 mb-1.5"
                    >
                        Email address
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="name@company.com"
                        class="block w-full h-10 rounded-md border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10 transition"
                    >

                    @error('email')
                        <p class="mt-1.5 text-xs text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Password --}}
                <div>

                    <label
                        for="password"
                        class="block text-xs font-semibold text-slate-700 mb-1.5"
                    >
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                        class="block w-full h-10 rounded-md border border-slate-300 bg-white px-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10 transition"
                    >

                    @error('password')
                        <p class="mt-1.5 text-xs text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Remember Me --}}
                <div class="flex items-center pt-1">

                    <input
                        id="remember"
                        type="checkbox"
                        name="remember"
                        value="1"
                        class="h-3.5 w-3.5 rounded border-slate-300 text-corporate-primary focus:ring-corporate-primary/20"
                    >

                    <label
                        for="remember"
                        class="ml-2 text-xs text-slate-600 cursor-pointer"
                    >
                        Remember me
                    </label>

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="w-full h-10 rounded-md bg-corporate-primary hover:bg-corporate-secondary text-white text-sm font-semibold transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-corporate-primary/20 focus:ring-offset-1"
                >
                    Sign in
                </button>

            </div>

        </form>


        {{-- Support --}}
        <div class="mt-6 pt-5 border-t border-slate-100 text-center">

            <p class="text-xs text-slate-400">
                Having trouble signing in?
                <a
                    href="#"
                    class="font-medium text-corporate-accent hover:text-corporate-secondary transition-colors"
                >
                    Contact support
                </a>
            </p>

        </div>

    </div>


    {{-- Security Notice --}}
    <p class="mt-4 text-center text-[11px] text-slate-400">
        Private content management system
    </p>

</div>


</body>
</html>
