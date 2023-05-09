@extends('layouts.main')

@section('content')
<main>
    <!-- courses list section start -->
    <section class="list">
        <div class="container">
            <ul class="list_courses d-md-flex flex-wrap justify-content-center my-4">
                @foreach ($books as $book)
                <li data-groups='[]' class="list_courses-card course-card col-12 col-md-4 col-xl-3">
                    <a href="/book/{{ $book->slug }}">
                        <div class="book-card_wrapper">
                            <img class="book-cover book--shadow" src="{{ asset('storage/'.$book->cover_url) }}" alt="">
                            <div class="top d-flex align-items-start">
                                <div class="wrapper d-flex flex-column">
                                    <h6 class="top_title">{{ $book->title }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- courses list section end -->

    <!-- reviews section start -->
    <section class="reviews mt-5" id="reviews">
        <div class="container">
            <h2 class="reviews_header">Apa yang mereka katakan tentang BASWARA</h2>

            <div class="reviews_slider">
                <div class="swiper-wrapper">
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut aliquam
                            erat.
                            Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                            ornare sagittis.
                            Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod
                            orci in
                            varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg"
                                        alt="media" />
                                </picture>
                            </span>
                            <span class="name h5">Muhammad Hardiansyah</span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="reviews_slider-controls d-flex align-items-center justify-content-between">
                    <a class="swiper-button-prev" href="#">
                        <i class="icon-angle-left icon"></i>
                    </a>
                    <a class="swiper-button-next" href="#">
                        <i class="icon-angle-right icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews section end -->
</main>
@endsection

@section('script')
    <script src="{{ asset('dist/js/courses.min.js') }}"></script>
    <script src="{{ asset('dist/js/reviews.min.js') }}"></script>
@endsection