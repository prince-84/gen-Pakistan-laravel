@extends('layouts.app')

@section('title', 'Top Leadership | Global Entrepreneurship Network')

@section('content')

<main class="top-leadership-page">

    {{-- Page Header --}}
    <section class="top-leadership-header">
        <div class="top-leadership-container">
            <h1>
                Top Leadership
            </h1>
        </div>
    </section>


    {{-- National Leaders --}}
    <section class="top-leadership-content">

        <div class="top-leadership-container">

            <p class="top-leadership-label">
                National Leaders
            </p>


            <div class="top-leadership-grid">

                @foreach ($leadership->leaders ?? [] as $leader)

                    <div class="top-leadership-card">

                        {{-- Photo --}}
                        <a
                            href="{{ $leader['profile_url'] ?: '#' }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="top-leadership-photo-link"
                        >
                            <img
                                src="{{ $leader['photo'] }}"
                                alt="{{ $leader['name'] }}"
                                class="top-leadership-photo"
                            >
                        </a>


                        {{-- Details --}}
                        <div class="top-leadership-details">

                            <h3 class="top-leadership-name">
                                {{ $leader['name'] }}
                            </h3>

                            <p class="top-leadership-country">
                                {{ $leader['country'] }}
                            </p>

                            <p class="top-leadership-role">
                                {{ $leader['role'] }}
                            </p>

                            <p class="top-leadership-organization">
                                {{ $leader['organization'] }}
                            </p>

                        </div>


                        {{-- Light strip --}}
                        <div class="top-leadership-strip"></div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

</main>

@endsection


<style>

.top-leadership-page {
    min-height: 100vh;
    background: #ffffff;
}


/* Page Header */

.top-leadership-header {
    padding: 80px 20px;
    background: #f8fafc;
    border-bottom: 1px solid #f1f5f9;
}

.top-leadership-header h1 {
    margin: 0;
    color: #0f172a;
    font-size: 48px;
    font-weight: 800;
    line-height: 1.1;
    text-align: center;
}


/* Main Content */

.top-leadership-content {
    padding: 80px 20px;
}

.top-leadership-container {
    width: 100%;
    max-width: 1152px;
    margin: 0 auto;
}


/* Section Label */

.top-leadership-label {
    margin: 0 0 32px;
    color: #94a3b8;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}


/* Leader Grid */

.top-leadership-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 32px;
}


/* Leader Card */

.top-leadership-card {
    position: relative;
    display: grid;
    grid-template-columns: 85px minmax(0, 1fr);

    align-items: center;

    gap: 18px;

    min-height: 125px;

    padding: 12px 34px 12px 12px;

    overflow: hidden;

    background: #ffffff;

    border-radius: 8px;

    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);

    transition: box-shadow 0.25s ease;
}

.top-leadership-card:hover {
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.22);
}


/* Photo */

.top-leadership-photo-link {
    display: block;

    width: 85px;
    height: 85px;

    flex-shrink: 0;

    overflow: hidden;

    border: 3px solid #e2e8f0;

    border-radius: 50%;
}

.top-leadership-photo {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;
}


/* Text */

.top-leadership-details {
    min-width: 0;
}

.top-leadership-name {
    margin: 0;

    color: #e11d48;

    font-size: 22px;
    font-weight: 300;

    line-height: 1.15;
}

.top-leadership-country {
    margin: 4px 0 0;

    color: #000000;

    font-size: 14px;

    text-transform: uppercase;
}

.top-leadership-role {
    margin: 10px 0 0;

    color: #64748b;

    font-size: 16px;
    font-weight: 300;

    line-height: 1.3;
}

.top-leadership-organization {
    margin: 0;

    color: #64748b;

    font-size: 16px;
    font-weight: 300;

    line-height: 1.3;

    text-transform: uppercase;

    overflow-wrap: break-word;
}


/* Right Strip */

.top-leadership-strip {
    position: absolute;

    top: 0;
    right: 0;

    width: 16px;
    height: 100%;

    background: #f1f5f9;
}


/* Responsive */

@media (max-width: 1100px) {

    .top-leadership-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

}


@media (max-width: 700px) {

    .top-leadership-header {
        padding: 60px 20px;
    }

    .top-leadership-header h1 {
        font-size: 40px;
    }

    .top-leadership-content {
        padding: 60px 20px;
    }

    .top-leadership-grid {
        grid-template-columns: 1fr;
    }

}


@media (max-width: 450px) {

    .top-leadership-card {
        grid-template-columns: 75px minmax(0, 1fr);
        gap: 14px;
    }

    .top-leadership-photo-link {
        width: 75px;
        height: 75px;
    }

    .top-leadership-name {
        font-size: 20px;
    }

    .top-leadership-role,
    .top-leadership-organization {
        font-size: 14px;
    }

}

</style>