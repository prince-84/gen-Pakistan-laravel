@extends('layouts.admin')

@section('title', 'Contact Messages')
@section('page-heading', 'Contact Messages')

@section('content')

<div class="messages-page">


{{-- Top Toolbar --}}
<div class="messages-toolbar">

    <div class="toolbar-left">

        <button
            type="button"
            class="toolbar-button"
            title="Refresh"
            onclick="window.location.reload()"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="18"
                 height="18"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M20 11a8.1 8.1 0 0 0-15.5-2M4 5v4h4"/>
                <path d="M4 13a8.1 8.1 0 0 0 15.5 2M20 19v-4h-4"/>
            </svg>
        </button>

        <button
            type="button"
            class="toolbar-button"
            title="Previous page"
            @disabled($messages->onFirstPage())
            onclick="window.location.href='{{ $messages->previousPageUrl() ?? '#' }}'"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="18"
                 height="18"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"/>
            </svg>
        </button>

        <button
            type="button"
            class="toolbar-button"
            title="Next page"
            @disabled(! $messages->hasMorePages())
            onclick="window.location.href='{{ $messages->nextPageUrl() ?? '#' }}'"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="18"
                 height="18"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"/>
            </svg>
        </button>

    </div>


    <div class="message-count">
        @if ($messages->total() > 0)
            {{ $messages->firstItem() }} - {{ $messages->lastItem() }} | {{ $messages->total() }}
        @else
            0 | 0
        @endif
    </div>

</div>


{{-- Main Message Area --}}
<div class="messages-container">

    {{-- Options / Filters --}}
    <aside class="messages-options">

        <div class="option-section">

            <button type="button" class="message-filter active">
                <span>All Messages</span>
                <span>{{ $messages->total() }}</span>
            </button>

            <button type="button" class="message-filter">
                <span>Unread</span>
                <span>0</span>
            </button>

            <button type="button" class="message-filter">
                <span>Starred</span>
                <span>0</span>
            </button>

        </div>

    </aside>


    {{-- Inbox --}}
    <section class="messages-inbox">

        @if ($messages->isEmpty())

            <div class="empty-state">
                <p>No messages have been received.</p>
            </div>

        @else

            <div class="message-list">

                @foreach ($messages as $message)

                <div class="message-row">

                    {{-- Read / Unread --}}
                    <div class="message-status">

                        <form
                            action="/admin/contact/messages/{{ $message->id }}/read"
                            method="POST"
                        >
                            @csrf
                            @method('PATCH')

                            <button
                                type="submit"
                                class="message-action-button {{ $message->status === 'unread' ? 'unread' : 'read' }}"
                                title="{{ $message->status === 'unread' ? 'Mark as read' : 'Mark as unread' }}"
                            >
                                @if ($message->status === 'unread')

                                    {{-- Eye --}}
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
                                        <path d="M2.06 12.35a1 1 0 0 1 0-.7C3.76 7.75 7.55 5 12 5s8.24 2.75 9.94 6.65a1 1 0 0 1 0 .7C20.24 16.25 16.45 19 12 19s-8.24-2.75-9.94-6.65Z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>

                                @else

                                    {{-- Eye Slash --}}
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
                                        <path d="M10.58 10.58a2 2 0 1 0 2.83 2.83"/>
                                        <path d="M9.88 4.24A9.77 9.77 0 0 1 12 4c4.45 0 8.24 2.75 9.94 6.65a1 1 0 0 1 0 .7 11.4 11.4 0 0 1-4.1 4.74"/>
                                        <path d="M6.61 6.61A11.4 11.4 0 0 0 2.06 11.3a1 1 0 0 0 0 .7C3.76 16.25 7.55 19 12 19a9.77 9.77 0 0 0 2.12-.24"/>
                                        <path d="m2 2 20 20"/>
                                    </svg>

                                @endif
                            </button>
                        </form>

                    </div>


                    {{-- Message --}}
                    <a
                        href="/admin/contact/messages/{{ $message->id }}"
                        class="message-main"
                    >

                        <div class="message-meta">

                            <div class="message-sender">
                                {{ $message->first_name }}
                                {{ $message->last_name }}
                            </div>

                            <div class="message-date">
                                {{ $message->created_at->format('M d, Y') }}
                            </div>

                        </div>

                        <div class="message-subject">
                            {{ $message->subject }}
                        </div>

                        <div class="message-preview">
                            {{ \Illuminate\Support\Str::limit($message->message, 110) }}
                        </div>

                    </a>

                </div>


                @endforeach


            </div>

        @endif

    </section>

</div>


</div>

<style>

    .messages-page {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    
    /* Toolbar */

    .messages-toolbar {
        width: 100%;
        min-height: 64px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 18px;

        background: #f7f8ff;
        border: 1px solid #c7c7c7;
        border-radius: 10px;

        box-shadow: 0 0 10px rgba(153, 153, 153, 0.25);
    }

    .toolbar-left {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .toolbar-button {
        width: 38px;
        height: 38px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 0;
        border-radius: 7px;

        background: transparent;
        color: #777;

        cursor: pointer;

        transition:
            background-color 0.15s ease,
            color 0.15s ease;
    }

    .toolbar-button:hover:not(:disabled) {
        background: #eceeff;
        color: #353539;
    }

    .toolbar-button:disabled {
        opacity: 0.3;
        cursor: not-allowed;
    }

    .message-count {
        color: #777;
        font-size: 13px;
        white-space: nowrap;
    }


    /* Main area */

    .messages-container {
        width: 100%;

        display: grid;
        grid-template-columns: 220px minmax(0, 1fr);
        gap: 12px;

        min-height: 560px;
    }


    /* Options */

    .messages-options,
    .messages-inbox {
        min-width: 0;

        background: #f7f8ff;
        border: 1px solid #dad7d7;
        border-radius: 10px;

        overflow: hidden;
    }

    .messages-options {
        padding: 12px;
    }

    .message-filter {
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 11px 12px;

        border: 0;
        border-radius: 7px;

        background: transparent;
        color: #666;

        font-family: inherit;
        font-size: 13px;

        cursor: pointer;

        transition:
            background-color 0.15s ease,
            color 0.15s ease;
    }

    .message-filter:hover {
        background: #eceeff;
        color: #333;
    }

    .message-filter.active {
        background: #e8eaff;
        color: #353539;
        font-weight: 600;
    }


    /* Inbox */

    .message-list {
        width: 100%;
    }

    .message-row {
        width: 100%;
        min-width: 0;

        display: flex;
        align-items: flex-start;
        gap: 12px;

        padding: 16px 18px;

        border-bottom: 1px solid #e5e5e5;

        background: #fff;

        transition:
            background-color 0.15s ease;
    }

    .message-row:hover {
        background: #fafaff;
    }

    .message-row:last-child {
        border-bottom: 0;
    }

    .message-status {
        flex: 0 0 auto;
        padding-top: 6px;
    }

    .status-dot {
        display: block;

        width: 9px;
        height: 9px;

        border-radius: 50%;
        background: #c9c9c9;
    }

    .status-dot.unread {
        background: #e61c24;
    }

    .message-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
    }

    .message-sender {
        color: #303034;
        font-size: 13px;
        font-weight: 700;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .message-date {
        flex: 0 0 auto;

        color: #999;
        font-size: 11px;
        white-space: nowrap;
    }

    .message-subject {
        margin-top: 4px;

        color: #45454a;
        font-size: 13px;
        font-weight: 600;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .message-preview {
        margin-top: 4px;

        color: #8a8a8a;
        font-size: 12px;
        line-height: 1.5;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .message-main {
        flex: 1;
        min-width: 0;
        text-decoration: none;
    }

    .message-action-button {
        width: 30px;
        height: 30px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 0;
        border-radius: 6px;

        background: transparent;

        cursor: pointer;

        transition:
            background-color 0.15s ease,
            color 0.15s ease;
    }

    .message-action-button.unread {
    color: #d97706;
    }

    .message-action-button.unread:hover {
        background: #fff7ed;
        color: #b45309;
    }

    .message-action-button.read {
        color: #a0a0a0;
    }

    .message-action-button.read:hover {
        background: #f3f4f6;
        color: #525252;
    }


    /* Empty state */

    .empty-state {
        min-height: 560px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #999;
        font-size: 14px;
    }


    /* Responsive */

    @media (max-width: 900px) {

        .messages-container {
            grid-template-columns: 180px minmax(0, 1fr);
        }

    }

    @media (max-width: 700px) {

        .messages-container {
            grid-template-columns: 1fr;
        }

        .messages-options {
            display: flex;
            align-items: center;
            gap: 6px;

            padding: 8px;
        }

        .option-section {
            width: 100%;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
        }

        .message-filter {
            padding: 9px 8px;
        }

        .message-filter span:last-child {
            display: none;
        }

    }

    @media (max-width: 500px) {

        .messages-toolbar {
            padding: 0 10px;
        }

        .message-row {
            padding: 13px;
        }

        .message-meta {
            align-items: flex-start;
            flex-direction: column;
            gap: 2px;
        }

    }

</style>

@endsection
