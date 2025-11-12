@extends('frontend.layouts.app'.config('theme_layout'))

@push('after-styles')
    <style>
        .couse-pagination li.active { color: #333333 !important; font-weight: 700; }
        .page-link { padding: .5rem .75rem; margin-left: -1px; color: #c7c7c7; background-color: white; border: none; }
        .page-item.active .page-link { color: #333333; background-color: white; border: none; }
        ul.pagination { display: inline; text-align: center; }
    </style>
@endpush

@section('content')

    <!-- Breadcrumb -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
            <div class="page-breadcrumb-content text-center">
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold">{{ env('APP_NAME') }} <span>@lang('labels.frontend.teacher.title')</span></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section id="teacher-page" class="teacher-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="teachers-archive">
                        <div class="row">
                            @forelse($teachers as $teacher)
                                <x-teacher-card :teacher="$teacher" />
                            @empty
                                <h4>@lang('labels.general.no_data_available')</h4>
                            @endforelse
                        </div>
                        <div class="couse-pagination text-center ul-li">
                            {{ $teachers->links() }}
                        </div>
                    </div>
                </div>
                @include('frontend.layouts.partials.right-sidebar')
            </div>
        </div>
    </section>

@endsection
