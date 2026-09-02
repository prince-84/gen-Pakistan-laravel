@extends('layouts.admin')

@section('title', 'View Message')
@section('page-heading', 'View Message')

@section('content')

<div class="max-w-4xl">


{{-- Back --}}
<div class="mb-5">
    <a
        href="/admin/contact/messages"
        class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-corporate-primary transition-colors"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="m15 18-6-6 6-6"/>
        </svg>

        Back to Messages
    </a>
</div>


{{-- Message Card --}}
<div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden">

    {{-- Header --}}
    <div class="px-6 py-5 border-b border-slate-200">

        <div class="flex items-start justify-between gap-6">

            <div class="min-w-0">

                <h1 class="text-xl font-bold text-slate-900 break-words">
                    {{ $message->subject }}
                </h1>

                <div class="mt-3">

                    <p class="text-sm font-semibold text-slate-700">
                        {{ $message->first_name }}
                        {{ $message->last_name }}
                    </p>

                    <a
                        href="mailto:{{ $message->email }}"
                        class="mt-1 inline-block text-sm text-corporate-accent hover:underline break-all"
                    >
                        {{ $message->email }}
                    </a>

                </div>

            </div>


            {{-- Date --}}
            <div class="flex-shrink-0 text-right">

                <p class="text-xs text-slate-400">
                    Received
                </p>

                <p class="mt-1 text-sm font-medium text-slate-600">
                    {{ $message->created_at->format('M d, Y') }}
                </p>

                <p class="text-xs text-slate-400">
                    {{ $message->created_at->format('h:i A') }}
                </p>

            </div>

        </div>

    </div>


    {{-- Message --}}
    <div class="px-6 py-7">

        <p class="text-sm font-bold text-slate-700 mb-3">
            Message
        </p>

        <div class="text-sm leading-7 text-slate-600 whitespace-pre-line break-words">
            {{ $message->message }}
        </div>

    </div>


    {{-- Footer --}}
    <div class="px-6 py-4 border-t border-slate-200 bg-slate-50">

        <div class="flex flex-wrap items-center gap-3">

            <a
                href="mailto:{{ $message->email }}"
                class="px-4 py-2 rounded-lg bg-corporate-primary text-white text-sm font-semibold hover:bg-corporate-secondary transition-colors"
            >
                Reply by Email
            </a>

            <a
                href="/admin/contact/messages"
                class="px-4 py-2 rounded-lg border border-slate-200 bg-white text-slate-600 text-sm font-semibold hover:bg-slate-100 transition-colors"
            >
                Back to Inbox
            </a>

        </div>

    </div>

</div>

</div>

@endsection
