@if(auth()->check() && isset($recently_viewed_courses) && $recently_viewed_courses->count() > 0)
    <!-- Start of recently viewed courses section
    ============================================= -->
    <section id="recently-viewed" class="recently-viewed-section">
        <div class="container">
            <div class="section-title mb20 headline text-center">
                <span class="subtitle text-uppercase">@lang('labels.frontend.home.recently_viewed')</span>
                <h2>@lang('labels.frontend.home.continue_learning')</h2>
            </div>

            <div class="course-slide">
                @foreach($recently_viewed_courses as $course)
                    <div class="course-item-pic-box">
                        <div class="course-item-pic">
                            <div class="course-pic">
                                <img src="{{ $course->image }}" alt="{{ $course->title }}">
                                @if($course->free == 1)
                                    <div class="course-price text-uppercase text-center gradient-bg">
                                        <span>@lang('labels.frontend.courses.free')</span>
                                    </div>
                                @else
                                    <div class="course-price text-uppercase text-center gradient-bg">
                                        <span>{{ $appCurrency->symbol }}{{ $course->price }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="course-item-text">
                                <div class="course-meta">
                                    <span class="course-category"><a href="{{ route('courses.category', [$course->category->slug]) }}">{{ $course->category->name }}</a></span>
                                    <span class="course-author">{{ $course->teachers->first()->full_name ?? '' }}</span>
                                </div>
                                <h3 class="bold-font"><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a></h3>
                                <div class="course-item-bottom">
                                    <div class="course-rating">
                                        @if($course->reviews->count() > 0)
                                            <div class="course-rating">
                                                <span class="rating">
                                                    @for($i=1; $i<=(int)$course->rating; $i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                    @if((int)$course->rating != $course->rating)
                                                        <i class="fas fa-star-half-alt"></i>
                                                    @endif
                                                    @for($i=1; $i<=(5-(int)$course->rating); $i++)
                                                        @if((int)$course->rating == $course->rating)
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </span>
                                                <span>({{ $course->reviews->count() }} @lang('labels.frontend.courses.reviews'))</span>
                                            </div>
                                        @else
                                            <div class="course-rating">
                                                <span class="rating">
                                                    @for($i=1; $i<=5; $i++)
                                                        <i class="far fa-star"></i>
                                                    @endfor
                                                </span>
                                                <span>(0 @lang('labels.frontend.courses.reviews'))</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="course-price">
                                        @if($course->free == 1)
                                            <span>@lang('labels.frontend.courses.free')</span>
                                        @else
                                            <span>{{ $appCurrency->symbol }}{{ $course->price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of recently viewed courses section
        ============================================= -->
@endif