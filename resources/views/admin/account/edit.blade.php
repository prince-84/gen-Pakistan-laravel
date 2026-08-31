@extends('layouts.admin')

@section('title', 'Account Settings')
@section('page-heading', 'Account Settings')

@section('content')

<div class="max-w-3xl">


<div class="mb-6">
    <h1 class="text-2xl font-bold text-corporate-primary">
        Account Settings
    </h1>

    <p class="mt-1 text-slate-500">
        Manage your CMS account information and password.
    </p>
</div>


{{-- Account Information --}}
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 mb-6">

    <h2 class="text-lg font-bold text-corporate-primary mb-1">
        Account Information
    </h2>

    <p class="text-sm text-slate-500 mb-6">
        Update the email address used to sign in to the CMS.
    </p>

    <form action="/admin/account/email" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-5">

            {{-- Current Email --}}
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Current Email
                </label>

                <input
                    type="email"
                    value="{{ auth()->user()->email }}"
                    disabled
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-slate-500 cursor-not-allowed"
                >
            </div>


            {{-- New Email --}}
            <div>
                <label
                    for="email"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    New Email
                </label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    placeholder="name@company.com"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >

                @error('email')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Current Password --}}
            <div>
                <label
                    for="email_current_password"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Current Password
                </label>

                <input
                    id="email_current_password"
                    type="password"
                    name="current_password"
                    required
                    autocomplete="current-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >

                @error('current_password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <div class="flex justify-end">
                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-5 py-2.5 rounded-lg font-semibold transition-colors"
                >
                    Update Email
                </button>
            </div>

        </div>

    </form>

</div>


{{-- Change Password --}}
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">

    <h2 class="text-lg font-bold text-corporate-primary mb-1">
        Change Password
    </h2>

    <p class="text-sm text-slate-500 mb-6">
        Use a strong password that you do not use elsewhere.
    </p>

    <form action="/admin/account/password" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-5">

            {{-- Current Password --}}
            <div>
                <label
                    for="password_current"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Current Password
                </label>

                <input
                    id="password_current"
                    type="password"
                    name="current_password"
                    required
                    autocomplete="current-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >

                @error('current_password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- New Password --}}
            <div>
                <label
                    for="password"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    New Password
                </label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >

                @error('password')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Confirm New Password --}}
            <div>
                <label
                    for="password_confirmation"
                    class="block text-sm font-semibold text-slate-700 mb-2"
                >
                    Confirm New Password
                </label>

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:outline-none focus:border-corporate-primary focus:ring-2 focus:ring-corporate-primary/10"
                >
            </div>


            <div class="flex justify-end">
                <button
                    type="submit"
                    class="bg-corporate-primary hover:bg-corporate-secondary text-white px-5 py-2.5 rounded-lg font-semibold transition-colors"
                >
                    Change Password
                </button>
            </div>

        </div>

    </form>

</div>


{{-- Back --}}
<div class="mt-6">
    <a
        href="/admin"
        class="text-sm font-semibold text-slate-600 hover:text-corporate-primary transition-colors"
    >
        ← Back to Dashboard
    </a>
</div>


</div>

@endsection
