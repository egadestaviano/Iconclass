@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', $page->meta_title ?? app_name())
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? app_name())

@push('after-styles')
    <style>
        .content img {
            margin: 10px;
        }
        .about-page-section ul {
            padding-left: 20px;
            font-size: 20px;
            color: #333;
            font-weight: 300;
            margin-bottom: 25px;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumb Section -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container text-center">
            <h2 class="breadcrumb-head black bold">{{ env('APP_NAME') }} <span>{{ $page->title }}</span></h2>
        </div>
    </section>

    <!-- About Page Section -->
    <section id="about-page" class="about-page-section pb-0">
        <div class="container">
            <div class="row">
                <div class="{{ $page->sidebar ? 'col-md-9' : 'col-md-12' }}">
                    <div class="about-us-content-item">
                        @if($page->image)
                            <div class="about-gallery text-center">
                                <img src="{{ asset('storage/uploads/' . $page->image) }}" alt="Page Image" class="img-fluid">
                            </div>
                        @endif
                        <div class="about-text-item">
                            <h2 class="section-title-2">{{ $page->title }}</h2>
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
                @if($page->sidebar)
                    @include('frontend.layouts.partials.right-sidebar')
                @endif
            </div>
        </div>
    </section>
@endsection
