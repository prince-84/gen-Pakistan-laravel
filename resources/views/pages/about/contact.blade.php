@extends('layouts.app')

@section('title', 'Contact GEN | Global Entrepreneurship Network')

@section('content') <main class="min-h-screen bg-white pb-24">

    <div class="h-8 md:h-16"></div>

    <section class="pt-8 pb-8">
        <div class="container-custom max-w-6xl mx-auto">

            <div class="flex flex-col lg:flex-row gap-16 md:gap-24">

                {{-- Left Column: Form --}}

<div class="w-full lg:w-[60%]">

@if (session('success'))
    <div
        id="success-message"
        class="mb-6 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700 transition-opacity duration-500"
    >
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function () {
            const successMessage = document.getElementById('success-message');

            if (successMessage) {
                successMessage.classList.add('opacity-0');

                setTimeout(function () {
                    successMessage.remove();
                }, 500);
            }
        }, 5000);
    </script>
@endif

<form action="/contact" method="POST" class="space-y-8">
    @csrf

    {{-- First Name --}}
    <div class="space-y-2">
        <label for="firstName" class="block text-sm font-bold text-slate-800">
            First Name <span class="text-red-600">*</span>
        </label>

        <input
            type="text"
            id="firstName"
            name="firstName"
            value="{{ old('firstName') }}"
            required
            class="w-full px-4 py-3 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 text-sm bg-white"
        >

        @error('firstName')
            <p class="text-sm text-red-600 mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>


    {{-- Last Name --}}
    <div class="space-y-2">
        <label for="lastName" class="block text-sm font-bold text-slate-800">
            Last Name <span class="text-red-600">*</span>
        </label>

        <input
            type="text"
            id="lastName"
            name="lastName"
            value="{{ old('lastName') }}"
            required
            class="w-full px-4 py-3 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 text-sm bg-white"
        >

        @error('lastName')
            <p class="text-sm text-red-600 mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>


    {{-- Email --}}
    <div class="space-y-2">
        <label for="email" class="block text-sm font-bold text-slate-800">
            Your email address <span class="text-red-600">*</span>
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="w-full px-4 py-3 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 text-sm bg-white"
        >

        @error('email')
            <p class="text-sm text-red-600 mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>


    {{-- Subject --}}
    <div class="space-y-2">
        <label for="subject" class="block text-sm font-bold text-slate-800">
            Subject <span class="text-red-600">*</span>
        </label>

        <input
            type="text"
            id="subject"
            name="subject"
            value="{{ old('subject') }}"
            required
            class="w-full px-4 py-3 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 text-sm bg-white"
        >

        @error('subject')
            <p class="text-sm text-red-600 mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>


    {{-- Message --}}
    <div class="space-y-2">
        <label for="message" class="block text-sm font-bold text-slate-800">
            Message <span class="text-red-600">*</span>
        </label>

        <textarea
            id="message"
            name="message"
            required
            rows="8"
            class="w-full px-4 py-3 border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-corporate-accent/30 text-sm bg-white resize-y"
        >{{ old('message') }}</textarea>

        @error('message')
            <p class="text-sm text-red-600 mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>


    {{-- CAPTCHA Placeholder --}}
    <div class="space-y-2">

        <label class="block text-sm font-bold text-slate-800 mb-4">
            CAPTCHA <span class="text-red-600">*</span>
        </label>

        <div class="w-full md:w-[300px] h-[70px] bg-slate-50 border border-slate-200 rounded flex items-center justify-between px-4">

            <div class="flex items-center gap-3">

                <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="white"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>

                <span class="text-sm font-medium text-slate-700">
                    Success!
                </span>

            </div>

            <div class="flex flex-col items-end">

                <span class="text-[9px] font-bold text-slate-500 uppercase tracking-wider">
                    CLOUDFLARE
                </span>

                <span class="text-[8px] text-slate-400">
                    Privacy - Terms
                </span>

            </div>

        </div>

        <p class="text-[11px] text-slate-500 italic mt-3">
            This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.
        </p>

    </div>


    {{-- Action Buttons --}}
    <div class="flex flex-wrap gap-4 pt-4">

        <button
            type="submit"
            class="px-8 py-3 bg-[#E61C24] hover:bg-red-700 text-white font-bold text-sm rounded transition-colors shadow-sm"
        >
            Send message
        </button>

    </div>

</form>


{{-- Support Text --}}
<div class="mt-16 pt-8 border-t border-slate-100">

    <p class="text-[13px] text-slate-500">

        Having trouble with your account or need technical support?

        <a
            href="#"
            class="text-corporate-accent hover:underline font-semibold"
        >
            Open a new support ticket here.
        </a>

    </p>

</div>

</div>

{{-- Right Column: Contact Information --}}
<div class="w-full lg:w-[40%]">

    {{-- Contact GEN --}}
    <div class="mb-14">

        <h2 class="text-[11px] font-black text-slate-400 uppercase tracking-[0.25em] mb-8">
            CONTACT GEN
        </h2>

        <div class="space-y-6 text-[14px] text-slate-600 leading-relaxed">

            <p>
                {{ $contact->intro_paragraph_1 }}
            </p>

            <p>
                {{ $contact->intro_paragraph_2 }}
            </p>

            <p>
                {{ $contact->intro_paragraph_3 }}
            </p>

            @if ($contact->phone)

                <p>
                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $contact->phone) }}"
                        class="inline-flex items-center gap-2 text-corporate-accent hover:text-red-700 transition-colors"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            height="18"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 1.98 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .72 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 1 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>

                        {{ $contact->phone }}
                    </a>
                </p>

            @endif

        </div>

    </div>


    {{-- About GEN --}}
    <div class="mb-14">

        <h2 class="text-[11px] font-black text-slate-400 uppercase tracking-[0.25em] mb-6">
            ABOUT GEN
        </h2>

        <p class="text-[14px] text-slate-600 leading-relaxed">
            The Global Entrepreneurship Network operates programs in 200 countries aimed at making it easier for anyone, anywhere to start and scale a business.
        </p>

    </div>


    {{-- Social Follow --}}
    <div>

        <h2 class="text-[11px] font-black text-slate-400 uppercase tracking-[0.25em] mb-5">
            FOLLOW GEN
        </h2>

        <div class="flex items-center gap-4">

            {{-- Facebook --}}
            @if ($contact->facebook_url)

                <a
                    href="{{ $contact->facebook_url }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Facebook"
                    class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-corporate-accent hover:border-corporate-accent transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                        <path d="M14 8h3V4h-3c-3.31 0-6 2.69-6 6v2H5v4h3v8h4v-8h4l1-4h-5v-2c0-1.1.9-2 2-2z"/>
                    </svg>
                </a>

            @endif


            {{-- LinkedIn --}}
            @if ($contact->linkedin_url)

                <a
                    href="{{ $contact->linkedin_url }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="LinkedIn"
                    class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-corporate-accent hover:border-corporate-accent transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                        <path d="M6.94 8.5H3.5V21h3.44V8.5zM5.22 3A2.01 2.01 0 1 0 5.22 7.02 2.01 2.01 0 0 0 5.22 3zM20.5 13.1c0-3.77-2.01-5.53-4.7-5.53-2.17 0-3.14 1.2-3.68 2.04V8.5H8.68V21h3.44v-6.18c0-1.63.31-3.21 2.33-3.21 1.99 0 2.02 1.87 2.02 3.31V21h3.44l.01-7.9z"/>
                    </svg>
                </a>

            @endif


            {{-- Instagram --}}
            @if ($contact->instagram_url)

                <a
                    href="{{ $contact->instagram_url }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Instagram"
                    class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-corporate-accent hover:border-corporate-accent transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <rect width="20" height="20" x="2" y="2" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r=".5" fill="currentColor"/>
                    </svg>
                </a>

            @endif


            {{-- YouTube --}}
            @if ($contact->youtube_url)

                <a
                    href="{{ $contact->youtube_url }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="YouTube"
                    class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:text-corporate-accent hover:border-corporate-accent transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                        <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8zM9.6 15.8V8.2l6.5 3.8-6.5 3.8z"/>
                    </svg>
                </a>

            @endif

        </div>

    </div>

</div>

</div>

            </div>

        </div>
    </section>

</main>


@endsection
