@extends('layouts.app')

@section('title', 'About GEN in Pakistan | Global Entrepreneurship Network')

@section('content')

<main class="min-h-screen bg-white pb-24">

    {{-- Page Header --}}
    <section class="py-16 md:py-20 bg-slate-50 border-b border-slate-100">
        <div class="container-custom max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                About GEN in Pakistan
            </h1>
        </div>
    </section>


    {{-- Main Content --}}
    <section class="py-12 md:py-16">
        <div class="container-custom max-w-6xl mx-auto">

            {{-- Top Image --}}
            @if ($about->top_image)
                <div class="w-full max-w-5xl mx-auto mb-12 overflow-hidden rounded-xl">
                    <img
                        src="{{ $about->top_image }}"
                        alt="Karachi"
                        class="w-full h-auto object-cover"
                    >
                </div>
            @endif

            {{-- Article --}}
            <article class="max-w-5xl mx-auto text-slate-600 text-[16px] md:text-[17px] leading-relaxed">

                <div class="space-y-6 article-content">
                    {!! $about->article_content !!}
                </div>

            </article>
            
        </div>
    </section>

</main>

@endsection

<style>
    .article-content a {
        color: #e61c24;
        text-decoration: underline;
    }

    .article-content a:hover {
        color: #b91c1c;
    }

    .article-content strong {
        color: #334155;
        font-weight: 700;
    }
</style>