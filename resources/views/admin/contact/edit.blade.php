@extends('layouts.admin')

@section('title', 'Edit Contact GEN')
@section('page-heading', 'Edit Contact GEN')

@section('content')

<div class="max-w-4xl">

<div class="mb-6">
    <h1 class="text-2xl font-bold text-corporate-primary">
        Edit Contact GEN
    </h1>

    <p class="mt-1 text-slate-500">
        Update the contact information and content displayed on the Contact GEN page.
    </p>
</div>


<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

    <form action="/admin/contact" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-8">

            {{-- Contact Introduction --}}
            <div>

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Contact Information
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the introductory information shown beside the contact form.
                </p>


                {{-- Introduction Paragraph 1 --}}
                <div class="mb-6">
                    <label
                        for="intro_paragraph_1"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Introduction Paragraph 1
                    </label>

                    <textarea
                        id="intro_paragraph_1"
                        name="intro_paragraph_1"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                    >{{ old('intro_paragraph_1', $contact->intro_paragraph_1) }}</textarea>

                    @error('intro_paragraph_1')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Introduction Paragraph 2 --}}
                <div class="mb-6">
                    <label
                        for="intro_paragraph_2"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Introduction Paragraph 2
                    </label>

                    <textarea
                        id="intro_paragraph_2"
                        name="intro_paragraph_2"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                    >{{ old('intro_paragraph_2', $contact->intro_paragraph_2) }}</textarea>

                    @error('intro_paragraph_2')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Introduction Paragraph 3 --}}
                <div>
                    <label
                        for="intro_paragraph_3"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Introduction Paragraph 3
                    </label>

                    <textarea
                        id="intro_paragraph_3"
                        name="intro_paragraph_3"
                        rows="3"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                    >{{ old('intro_paragraph_3', $contact->intro_paragraph_3) }}</textarea>

                    @error('intro_paragraph_3')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Phone --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Phone
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    This number is displayed below the Contact GEN introduction.
                </p>

                <label
                    for="phone"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Phone Number
                </label>

                <input
                    id="phone"
                    type="text"
                    name="phone"
                    value="{{ old('phone', $contact->phone) }}"
                    placeholder="+1 (202) 683-4100"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >

                @error('phone')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- Quote --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Quote
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the quote displayed in the highlighted quote box.
                </p>

                <textarea
                    id="quote"
                    name="quote"
                    rows="5"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >{{ old('quote', $contact->quote) }}</textarea>

                @error('quote')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- Social Media --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Social Media
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Enter the URLs for the GEN social media accounts. Leave a field empty to hide that social icon.
                </p>

                <div class="space-y-5">

                    {{-- Facebook --}}
                    <div>
                        <label
                            for="facebook_url"
                            class="block text-sm font-semibold text-slate-700 mb-2"
                        >
                            Facebook URL
                        </label>

                        <input
                            id="facebook_url"
                            type="url"
                            name="facebook_url"
                            value="{{ old('facebook_url', $contact->facebook_url === '#' ? '' : $contact->facebook_url) }}"
                            placeholder="https://www.facebook.com/..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                        >

                        @error('facebook_url')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Twitter / X --}}
                    <div>
                        <label
                            for="twitter_url"
                            class="block text-sm font-semibold text-slate-700 mb-2"
                        >
                            Twitter / X URL
                        </label>

                        <input
                            id="twitter_url"
                            type="url"
                            name="twitter_url"
                            value="{{ old('twitter_url', $contact->twitter_url === '#' ? '' : $contact->twitter_url) }}"
                            placeholder="https://x.com/..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                        >

                        @error('twitter_url')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- LinkedIn --}}
                    <div>
                        <label
                            for="linkedin_url"
                            class="block text-sm font-semibold text-slate-700 mb-2"
                        >
                            LinkedIn URL
                        </label>

                        <input
                            id="linkedin_url"
                            type="url"
                            name="linkedin_url"
                            value="{{ old('linkedin_url', $contact->linkedin_url === '#' ? '' : $contact->linkedin_url) }}"
                            placeholder="https://www.linkedin.com/..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                        >

                        @error('linkedin_url')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Instagram --}}
                    <div>
                        <label
                            for="instagram_url"
                            class="block text-sm font-semibold text-slate-700 mb-2"
                        >
                            Instagram URL
                        </label>

                        <input
                            id="instagram_url"
                            type="url"
                            name="instagram_url"
                            value="{{ old('instagram_url', $contact->instagram_url === '#' ? '' : $contact->instagram_url) }}"
                            placeholder="https://www.instagram.com/..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                        >

                        @error('instagram_url')
                            <p class="mt-2 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>

            </div>


            {{-- Actions --}}
            <div class="border-t border-slate-200 pt-6 flex items-center gap-3">

                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold transition-colors"
                >
                    Update Contact GEN
                </button>

                <a
                    href="/admin"
                    class="px-6 py-3 rounded-lg border border-slate-200 text-slate-600 font-semibold hover:bg-slate-50 transition-colors"
                >
                    Cancel
                </a>

            </div>

        </div>

    </form>

</div>

</div>

@endsection
