@extends('frontend'.(session()->get('display_type') == "rtl" ? "-rtl" : "").'.layouts.app'.config('theme_layout'))

@push('after-styles')
    <style>
        .b-not_found {
            padding: 50px 0 100px;
            text-align: center;
        }

        .b-not_found .b-page_header {
            position: relative;
            margin-bottom: 10px;
        }

        .b-not_found .b-page_header::before {
            content: "404";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 400px;
            line-height: 320px;
            font-weight: 700;
            color: rgba(142, 142, 142, 0.15);
        }

        .b-not_found h1 {
            margin: 0;
            padding: 115px 0;
            text-transform: uppercase;
            color: #17d0cf;
            opacity: .8;
            letter-spacing: 3px;
            font-size: 75px;
            font-weight: 700;
        }

        .b-not_found h2 {
            font-size: 36px;
            font-weight: bold;
            letter-spacing: 1px;
            line-height: 1.5;
            color: #1B1919;
        }

        .b-not_found p {
            line-height: 1.7;
            color: #8E8E8E;
            margin-bottom: 20px;
        }

        .b-searchform {
            max-width: 350px;
            margin: auto;
            position: relative;
        }

        .b-searchform input {
            width: 100%;
            height: 40px;
            padding-right: 105px;
            border: 1px solid rgba(129, 129, 129, 0.25);
            font-size: 14px;
            padding: 0 10px;
            transition: border-color .5s;
        }

        .b-searchform .btn {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #1daaa3;
            color: white;
            cursor: pointer;
        }

        .b-searchform .btn:hover {
            opacity: 0.75;
        }

        @media (max-width: 990px) {
            .b-not_found .b-page_header::before {
                font-size: 300px;
            }

            .b-not_found h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 767px) {
            .b-not_found h1 {
                font-size: 35px;
                padding: 55px 0;
            }

            .b-not_found .b-page_header::before {
                font-size: 150px;
                line-height: 150px;
            }

            .b-not_found h2 {
                font-size: 22px;
            }

            .b-searchform {
                max-width: 300px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumb Section -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container text-center">
            <div class="page-breadcrumb-content">
                <h2 class="breadcrumb-head black bold"><span>@lang('http.404.title2')</span></h2>
            </div>
        </div>
    </section>

    <!-- 404 Error Page -->
    <section id="about-page" class="about-page-section pb-0">
        <div class="container">
            <div class="row">
                <div class="b-not_found">
                    <div class="b-page_header">
                        <h1>@lang('http.404.title')</h1>
                    </div>
                    <h2><b>@lang('http.404.description')</b></h2>
                    <p>@lang('http.404.description2')</p>
                    <div class="nws-button genius-btn text-center d-inline-block gradient-bg text-uppercase">
                        <a href="{{ url('/') }}">@lang('http.404.back')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
