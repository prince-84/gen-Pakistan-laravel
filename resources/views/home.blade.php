@extends('layouts.app')

@section('title', 'GEN Pakistan | Global Entrepreneurship Network')

@section('content')
    @include('components.home.hero')
    @include('components.home.about-section')
    @include('components.home.services-section')
    @include('components.home.banner-section')
    @include('components.home.action-section')
    @include('components.home.resources-section')
    @include('components.home.news-section')
    @include('components.home.supporters-section')
@endsection
