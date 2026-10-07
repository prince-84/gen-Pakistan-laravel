@extends('layouts.admin')

@section('title', 'Edit Top Leadership')
@section('page-heading', 'Edit Top Leadership')

@section('content')

<div class="max-w-4xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Edit Top Leadership
        </h1>

        <p class="mt-1 text-slate-500">
            Manage the leaders displayed on the Top Leadership page.
        </p>
    </div>


    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/top-leadership" method="POST">
            @csrf
            @method('PUT')

            <div id="leaders-container" class="space-y-8">

                @php
                    $leaders = old('leaders', $leadership->leaders ?? []);

                    if (empty($leaders)) {
                        $leaders = [
                            [
                                'name' => '',
                                'country' => '',
                                'role' => '',
                                'organization' => '',
                                'photo' => '',
                                'profile_url' => '',
                            ],
                        ];
                    }
                @endphp


                @foreach ($leaders as $leaderIndex => $leader)

                    <div class="leader-card border-t border-slate-200 pt-8">

                        <div class="flex items-center justify-between gap-4 mb-6">

                            <h2 class="text-lg font-bold text-corporate-primary">
                                Leader {{ $leaderIndex + 1 }}
                            </h2>

                            <button
                                type="button"
                                class="remove-leader px-3 py-2 rounded-lg border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition-colors"
                            >
                                Remove
                            </button>

                        </div>


                        <div class="space-y-5">

                            {{-- Name --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Name
                                </label>

                                <input
                                    type="text"
                                    data-field="name"
                                    value="{{ $leader['name'] ?? '' }}"
                                    placeholder="e.g. Sheikh Safeer ul Haq"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>


                            {{-- Country --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Country
                                </label>

                                <input
                                    type="text"
                                    data-field="country"
                                    value="{{ $leader['country'] ?? '' }}"
                                    placeholder="e.g. Pakistan"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>


                            {{-- Role --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Role
                                </label>

                                <input
                                    type="text"
                                    data-field="role"
                                    value="{{ $leader['role'] ?? '' }}"
                                    placeholder="e.g. Founder & CEO"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>


                            {{-- Organization --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Organization
                                </label>

                                <input
                                    type="text"
                                    data-field="organization"
                                    value="{{ $leader['organization'] ?? '' }}"
                                    placeholder="e.g. INDUS OFFICE AUTOMATION"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>


                            {{-- Profile Photo --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Profile Photo URL
                                </label>

                                <input
                                    type="url"
                                    data-field="photo"
                                    value="{{ $leader['photo'] ?? '' }}"
                                    placeholder="https://example.com/profile.jpg"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>


                            {{-- Profile URL --}}
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">
                                    Profile URL
                                </label>

                                <input
                                    type="url"
                                    data-field="profile_url"
                                    value="{{ $leader['profile_url'] ?? '' }}"
                                    placeholder="https://example.com/leader-profile"
                                    class="w-full rounded-lg border border-slate-300 px-4 py-3"
                                >
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


            {{-- Add Leader --}}
            <div class="border-t border-slate-200 pt-6 mt-8">

                <button
                    type="button"
                    id="add-leader"
                    class="px-4 py-2.5 rounded-lg border border-slate-300 text-slate-700 font-semibold hover:bg-slate-50 transition-colors"
                >
                    + Add Leader
                </button>

            </div>


            {{-- Actions --}}
            <div class="border-t border-slate-200 pt-6 mt-8 flex items-center gap-3">

                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                >
                    Update Top Leadership
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

    const leadersContainer = document.getElementById('leaders-container');
    const addLeaderButton = document.getElementById('add-leader');


    function updateIndexes() {

        const leaderCards =
            leadersContainer.querySelectorAll('.leader-card');

        leaderCards.forEach(function (card, leaderIndex) {

            card.querySelector('h2').textContent =
                `Leader ${leaderIndex + 1}`;

            card.querySelectorAll('[data-field]').forEach(function (input) {

                const field = input.dataset.field;

                input.name =
                    `leaders[${leaderIndex}][${field}]`;

            });

        });

    }


    function createLeaderCard() {

        const card = document.createElement('div');

        card.className =
            'leader-card border-t border-slate-200 pt-8';

        card.innerHTML = `
            <div class="flex items-center justify-between gap-4 mb-6">

                <h2 class="text-lg font-bold text-corporate-primary">
                    Leader
                </h2>

                <button
                    type="button"
                    class="remove-leader px-3 py-2 rounded-lg border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition-colors"
                >
                    Remove
                </button>

            </div>

            <div class="space-y-5">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Name
                    </label>

                    <input
                        type="text"
                        data-field="name"
                        placeholder="e.g. Sheikh Safeer ul Haq"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Country
                    </label>

                    <input
                        type="text"
                        data-field="country"
                        placeholder="e.g. Pakistan"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Role
                    </label>

                    <input
                        type="text"
                        data-field="role"
                        placeholder="e.g. Founder & CEO"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Organization
                    </label>

                    <input
                        type="text"
                        data-field="organization"
                        placeholder="e.g. INDUS OFFICE AUTOMATION"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Profile Photo URL
                    </label>

                    <input
                        type="url"
                        data-field="photo"
                        placeholder="https://example.com/profile.jpg"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Profile URL
                    </label>

                    <input
                        type="url"
                        data-field="profile_url"
                        placeholder="https://example.com/leader-profile"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

            </div>
        `;

        return card;
    }


    addLeaderButton.addEventListener('click', function () {

        leadersContainer.appendChild(
            createLeaderCard()
        );

        updateIndexes();

    });


    document.addEventListener('click', function (event) {

        if (event.target.classList.contains('remove-leader')) {

            const card =
                event.target.closest('.leader-card');

            if (card) {
                card.remove();
                updateIndexes();
            }

        }

    });


    updateIndexes();

});
</script>

@endsection