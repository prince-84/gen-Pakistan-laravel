@extends('layouts.admin')

@section('title', 'Edit Partners')
@section('page-heading', 'Edit Partners')

@section('content')

<div class="max-w-4xl">
<div class="mb-6">
    <h1 class="text-2xl font-bold text-corporate-primary">
        Edit Partners
    </h1>

    <p class="mt-1 text-slate-500">
        Update the partner information displayed on the Our Partners page.
    </p>
</div>

<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

    <form action="/admin/partners" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-8">

            {{-- Page Heading --}}
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Page Heading
                </label>

                <input
                    type="text"
                    name="page_heading"
                    value="{{ old('page_heading', $partners->page_heading) }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                >
            </div>


            {{-- Introduction --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Introduction
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the introductory text displayed beneath the page heading.
                </p>

                <textarea
                    name="introduction"
                    rows="5"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed"
                >{{ old('introduction', $partners->introduction) }}</textarea>

            </div>


            {{-- Partner Sections --}}
            @php
                $partnerSections = [
                    [
                        'key' => 'platinum_partners',
                        'title' => 'Platinum Partners',
                        'description' => 'Add, edit or remove Platinum partners.',
                    ],
                    [
                        'key' => 'silver_partners',
                        'title' => 'Silver Partners',
                        'description' => 'Add, edit or remove Silver partners.',
                    ],
                    [
                        'key' => 'bronze_partners',
                        'title' => 'Bronze Partners',
                        'description' => 'Add, edit or remove Bronze partners.',
                    ],
                    [
                        'key' => 'ecosystem_partners',
                        'title' => 'Ecosystem Partners',
                        'description' => 'Add, edit or remove Ecosystem partners.',
                    ],
                ];
            @endphp

            @foreach ($partnerSections as $section)

                <div class="border-t border-slate-200 pt-8">

                    <h2 class="text-lg font-bold text-corporate-primary mb-1">
                        {{ $section['title'] }}
                    </h2>

                    <p class="text-sm text-slate-500 mb-6">
                        {{ $section['description'] }}
                    </p>

                    <div
                        class="partner-list space-y-4"
                        data-partner-list="{{ $section['key'] }}"
                    >

                        @php
                            $items = old(
                                $section['key'],
                                $partners->{$section['key']} ?? []
                            );
                        @endphp

                        @foreach ($items as $partner)

                            <div class="partner-row flex items-center gap-3">

                                <input
                                    type="text"
                                    name="{{ $section['key'] }}[]"
                                    value="{{ $partner }}"
                                    class="flex-1 rounded-lg border border-slate-300 px-4 py-3"
                                >

                                <button
                                    type="button"
                                    class="remove-partner px-4 py-3 rounded-lg border border-red-200 text-red-600 font-semibold hover:bg-red-50 transition-colors"
                                >
                                    Remove
                                </button>

                            </div>

                        @endforeach

                    </div>

                    <button
                        type="button"
                        class="add-partner mt-4 px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-50 transition-colors"
                        data-target="{{ $section['key'] }}"
                    >
                        + Add Partner
                    </button>

                </div>

            @endforeach


            {{-- Partnership Information --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Partnership Information
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the partnership information and related links displayed at the bottom of the page.
                </p>

                <div class="space-y-6">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Partnership Text
                        </label>

                        <textarea
                            name="partnership_text"
                            rows="7"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3 leading-relaxed"
                        >{{ old('partnership_text', $partners->partnership_text) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Apply Here URL
                        </label>

                        <input
                            type="url"
                            name="apply_url"
                            value="{{ old('apply_url', $partners->apply_url) }}"
                            placeholder="https://..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Local Partnerships URL
                        </label>

                        <input
                            type="url"
                            name="local_partnership_url"
                            value="{{ old('local_partnership_url', $partners->local_partnership_url) }}"
                            placeholder="https://..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                </div>

            </div>


            {{-- Contact --}}
            <div class="border-t border-slate-200 pt-8">

                <h2 class="text-lg font-bold text-corporate-primary mb-1">
                    Contact
                </h2>

                <p class="text-sm text-slate-500 mb-6">
                    Update the sponsorship and partnership contact information.
                </p>

                <div class="space-y-6">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Contact Text
                        </label>

                        <input
                            type="text"
                            name="contact_text"
                            value="{{ old('contact_text', $partners->contact_text) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Contact Person
                        </label>

                        <input
                            type="text"
                            name="contact_person"
                            value="{{ old('contact_person', $partners->contact_person) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Contact Email
                        </label>

                        <input
                            type="email"
                            name="contact_email"
                            value="{{ old('contact_email', $partners->contact_email) }}"
                            class="w-full rounded-lg border border-slate-300 px-4 py-3"
                        >
                    </div>

                </div>

            </div>


            {{-- Actions --}}
            <div class="border-t border-slate-200 pt-6 flex items-center gap-3">

                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                >
                    Update Partners
                </button>

                <a
                    href="/admin"
                    class="px-6 py-3 rounded-lg border border-slate-200 text-slate-600 font-semibold hover:bg-slate-50"
                >
                    Cancel
                </a>

            </div>
        </div>
    </form>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.add-partner').forEach(function (button) {

        button.addEventListener('click', function () {

            const target = button.dataset.target;
            const list = document.querySelector(
                '[data-partner-list="' + target + '"]'
            );

            const row = document.createElement('div');

            row.className = 'partner-row flex items-center gap-3';

            row.innerHTML = `
                <input
                    type="text"
                    name="${target}[]"
                    class="flex-1 rounded-lg border border-slate-300 px-4 py-3"
                    placeholder="Partner name"
                >

                <button
                    type="button"
                    class="remove-partner px-4 py-3 rounded-lg border border-red-200 text-red-600 font-semibold hover:bg-red-50 transition-colors"
                >
                    Remove
                </button>
            `;

            list.appendChild(row);

            row.querySelector('.partner-input')?.focus();
            row.querySelector('input').focus();

        });

    });


    document.addEventListener('click', function (event) {

        if (!event.target.classList.contains('remove-partner')) {
            return;
        }

        const row = event.target.closest('.partner-row');

        if (row) {
            row.remove();
        }

    });

});
</script>

@endsection
