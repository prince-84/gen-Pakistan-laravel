@extends('layouts.admin')

@section('title', 'Edit Homepage Action')
@section('page-heading', 'Edit Homepage Action')

@section('content')

<div class="max-w-3xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-corporate-primary">
            Edit Homepage Action
        </h1>

        <p class="mt-1 text-slate-500">
            Update the action section content displayed on the GEN Pakistan homepage.
        </p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

        <form action="/admin/action" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-6">

                {{-- Label --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Section Label
                    </label>

                    <input
                        type="text"
                        name="label"
                        value="{{ $action->label }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                {{-- Heading --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Heading
                    </label>

                    <input
                        type="text"
                        name="heading"
                        value="{{ $action->heading }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >
                </div>

                {{-- Description --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        class="w-full rounded-lg border border-slate-300 px-4 py-3"
                    >{{ $action->description }}</textarea>
                </div>

                {{-- Primary Button --}}
                <div class="pt-2 border-t border-slate-200">
                    <h3 class="text-lg font-bold text-corporate-primary mb-4">
                        Primary Button
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Button Text
                            </label>

                            <input
                                type="text"
                                name="primary_button_text"
                                value="{{ $action->primary_button_text }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Button URL
                            </label>

                            <input
                                type="text"
                                name="primary_button_url"
                                value="{{ $action->primary_button_url }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                    </div>
                </div>

                {{-- Secondary Button --}}
                <div class="pt-2 border-t border-slate-200">
                    <h3 class="text-lg font-bold text-corporate-primary mb-4">
                        Secondary Button
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Button Text
                            </label>

                            <input
                                type="text"
                                name="secondary_button_text"
                                value="{{ $action->secondary_button_text }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Button URL
                            </label>

                            <input
                                type="text"
                                name="secondary_button_url"
                                value="{{ $action->secondary_button_url }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                    </div>
                </div>

                {{-- Quote --}}
                <div class="pt-2 border-t border-slate-200">
                    <h3 class="text-lg font-bold text-corporate-primary mb-4">
                        Quote
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Quote Text
                            </label>

                            <textarea
                                name="quote"
                                rows="4"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >{{ $action->quote }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Author Name
                            </label>

                            <input
                                type="text"
                                name="author_name"
                                value="{{ $action->author_name }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">
                                Author Role
                            </label>

                            <input
                                type="text"
                                name="author_role"
                                value="{{ $action->author_role }}"
                                class="w-full rounded-lg border border-slate-300 px-4 py-3"
                            >
                        </div>

                    </div>
                </div>

                {{-- Buttons --}}
                <div class="flex items-center gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-corporate-primary hover:bg-corporate-secondary text-white px-6 py-3 rounded-lg font-semibold"
                    >
                        Update Action
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

@endsection