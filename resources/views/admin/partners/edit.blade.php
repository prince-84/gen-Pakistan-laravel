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
            Manage the partner sections displayed on the Our Partners in Pakistan page.
        </p>
    </div>


    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/partners" method="POST">
            @csrf
            @method('PUT')

            <div id="sections-container" class="space-y-8">

                @php
                    $sections = old('partner_sections', $partners->partner_sections ?? []);

                    if (empty($sections)) {
                        $sections = [
                            [
                                'heading' => '',
                                'partners' => [
                                    [
                                        'logo' => '',
                                        'url' => '',
                                    ],
                                ],
                            ],
                        ];
                    }
                @endphp


                @foreach ($sections as $sectionIndex => $section)

                    <div class="partner-section border-t border-slate-200 pt-8">

                        <div class="flex items-center justify-between gap-4 mb-5">

                            <h2 class="text-lg font-bold text-corporate-primary">
                                Section {{ $sectionIndex + 1 }}
                            </h2>

                            <button
                                type="button"
                                class="remove-section px-3 py-2 rounded-lg border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition-colors"
                            >
                                Remove Section
                            </button>

                        </div>


                        {{-- Section Heading --}}
                        <div class="mb-6">

                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Section Heading
                            </label>

                            <input
                                type="text"
                                name="partner_sections[{{ $sectionIndex }}][heading]"
                                value="{{ $section['heading'] ?? '' }}"
                                placeholder="e.g. Platinum"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >

                        </div>


                        {{-- Partners --}}
                        <div class="partners-container space-y-4">

                            @foreach (($section['partners'] ?? []) as $partnerIndex => $partner)

                                <div class="partner-row rounded-xl border border-slate-200 bg-slate-50 p-5">

                                    <div class="flex items-center justify-between mb-4">

                                        <h3 class="text-sm font-bold text-slate-700">
                                            Partner
                                        </h3>

                                        <button
                                            type="button"
                                            class="remove-partner text-sm font-semibold text-red-600 hover:text-red-700"
                                        >
                                            Remove
                                        </button>

                                    </div>


                                    <div class="space-y-4">

                                        <div>
                                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                                Logo URL
                                            </label>

                                            <input
                                                type="url"
                                                name="partner_sections[{{ $sectionIndex }}][partners][{{ $partnerIndex }}][logo]"
                                                value="{{ $partner['logo'] ?? '' }}"
                                                placeholder="https://example.com/logo.png"
                                                class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                                            >
                                        </div>


                                        <div>
                                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                                Website URL
                                            </label>

                                            <input
                                                type="url"
                                                name="partner_sections[{{ $sectionIndex }}][partners][{{ $partnerIndex }}][url]"
                                                value="{{ $partner['url'] ?? '' }}"
                                                placeholder="https://example.com"
                                                class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                                            >
                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        </div>


                        <button
                            type="button"
                            class="add-partner mt-4 px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-50 transition-colors"
                        >
                            + Add Partner
                        </button>

                    </div>

                @endforeach

            </div>


            {{-- Add Section --}}
            <div class="border-t border-slate-200 pt-6 mt-8">

                <button
                    type="button"
                    id="add-section"
                    class="px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-50 transition-colors"
                >
                    + Add Section
                </button>

            </div>


            {{-- Actions --}}
            <div class="border-t border-slate-200 pt-6 mt-8 flex items-center gap-3">

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

        </form>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const sectionsContainer = document.getElementById('sections-container');
    const addSectionButton = document.getElementById('add-section');


    function updateIndexes() {

        const sections = sectionsContainer.querySelectorAll('.partner-section');

        sections.forEach(function (section, sectionIndex) {

            section.querySelector('h2').textContent =
                `Section ${sectionIndex + 1}`;

            const headingInput = section.querySelector(
                'input[data-field="heading"]'
            );

            if (headingInput) {
                headingInput.name =
                    `partner_sections[${sectionIndex}][heading]`;
            }

            const partnerRows = section.querySelectorAll('.partner-row');

            partnerRows.forEach(function (row, partnerIndex) {

                const logoInput = row.querySelector(
                    'input[data-field="logo"]'
                );

                const urlInput = row.querySelector(
                    'input[data-field="url"]'
                );

                if (logoInput) {
                    logoInput.name =
                        `partner_sections[${sectionIndex}][partners][${partnerIndex}][logo]`;
                }

                if (urlInput) {
                    urlInput.name =
                        `partner_sections[${sectionIndex}][partners][${partnerIndex}][url]`;
                }

            });

        });

    }


    function createPartnerRow() {

        const row = document.createElement('div');

        row.className =
            'partner-row rounded-xl border border-slate-200 bg-slate-50 p-5';

        row.innerHTML = `
            <div class="flex items-center justify-between mb-4">

                <h3 class="text-sm font-bold text-slate-700">
                    Partner
                </h3>

                <button
                    type="button"
                    class="remove-partner text-sm font-semibold text-red-600 hover:text-red-700"
                >
                    Remove
                </button>

            </div>

            <div class="space-y-4">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Logo URL
                    </label>

                    <input
                        type="url"
                        data-field="logo"
                        placeholder="https://example.com/logo.png"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Website URL
                    </label>

                    <input
                        type="url"
                        data-field="url"
                        placeholder="https://example.com"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3 bg-white"
                    >
                </div>

            </div>
        `;

        return row;
    }


    function createSection() {

        const section = document.createElement('div');

        section.className =
            'partner-section border-t border-slate-200 pt-8';

        section.innerHTML = `
            <div class="flex items-center justify-between gap-4 mb-5">

                <h2 class="text-lg font-bold text-corporate-primary">
                    Section
                </h2>

                <button
                    type="button"
                    class="remove-section px-3 py-2 rounded-lg border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition-colors"
                >
                    Remove Section
                </button>

            </div>

            <div class="mb-6">

                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Section Heading
                </label>

                <input
                    type="text"
                    data-field="heading"
                    placeholder="e.g. Platinum"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                >

            </div>

            <div class="partners-container space-y-4"></div>

            <button
                type="button"
                class="add-partner mt-4 px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-50 transition-colors"
            >
                + Add Partner
            </button>
        `;

        section.querySelector('.partners-container')
            .appendChild(createPartnerRow());

        return section;
    }


    addSectionButton.addEventListener('click', function () {

        sectionsContainer.appendChild(createSection());

        updateIndexes();

    });


    document.addEventListener('click', function (event) {

        if (event.target.classList.contains('add-partner')) {

            const section = event.target.closest('.partner-section');

            section
                .querySelector('.partners-container')
                .appendChild(createPartnerRow());

            updateIndexes();
        }


        if (event.target.classList.contains('remove-partner')) {

            const row = event.target.closest('.partner-row');

            if (row) {
                row.remove();
                updateIndexes();
            }
        }


        if (event.target.classList.contains('remove-section')) {

            const section = event.target.closest('.partner-section');

            if (section) {
                section.remove();
                updateIndexes();
            }
        }

    });


    updateIndexes();

});
</script>

@endsection