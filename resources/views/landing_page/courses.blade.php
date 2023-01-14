@extends('layouts.landing_page.main')

@section('content')
<main>
    <!-- courses list section start -->
    <section class="list">
        <div class="container">
            <ul class="list_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
                <li class="list-item" data-aos="fade-left">
                    <a data-target="all" class="list_tags-tag tag current" href="#">all</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="50">
                    <a data-target="programming" class="list_tags-tag tag" href="#">programming</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="100">
                    <a data-target="management" class="list_tags-tag tag" href="#">management</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="150">
                    <a data-target="art" class="list_tags-tag tag" href="#">art</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="200">
                    <a data-target="marketing" class="list_tags-tag tag" href="#">digital marketing</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="250">
                    <a data-target="gamedev" class="list_tags-tag tag" href="#">game development</a>
                </li>
            </ul>
            <ul class="list_courses d-md-flex flex-wrap">
                <li data-groups='["gamedev", "programming"]'
                    class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                    <div class="course-card_wrapper">
                        <div class="image"
                            style="background-image: url(https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=240&ixid=MnwxfDB8MXxyYW5kb218MHx8cHl0aG9ufHx8fHx8MTY3MjY1MzY2Mw&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=400);">
                        </div>
                        <div class="top d-flex align-items-start">
                            <div class="wrapper d-flex flex-column">
                                <h6 class="top_title">Belajar Fundamental React</h6>
                                <ul class="rating d-flex align-items-center">
                                    <span class="rating_value">4.7</span>
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
                                <span class="top_author">by Adrian Dawson school <span
                                        class="top_details">Rp200.000</span></span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.php">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li data-groups='["programming"]' class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                    <div class="course-card_wrapper">
                        <div class="image"
                            style="background-image: url(https://images.unsplash.com/photo-1620325867502-221cfb5faa5f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=240&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFuYWdlbWVudHx8fHx8fDE2NzI2NTM3OTc&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=400);">
                        </div>
                        <div class="top d-flex align-items-start">
                            <div class="wrapper d-flex flex-column">
                                <h6 class="top_title">Membangun website menggunakan Laravel 9</h6>
                                <ul class="rating d-flex align-items-center">
                                    <span class="rating_value">4.9</span>
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
                                <span class="top_author">by Angelina Christy <span
                                        class="top_details">Rp250.000</span></span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.php">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li data-groups='["management"]' class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                    <div class="course-card_wrapper">
                        <div class="image"
                            style="background-image: url(https://images.unsplash.com/photo-1511345624864-d6cf46344e8c?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=240&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFuYWdlbWVudHx8fHx8fDE2NzI2NTUwNDU&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=400);">
                        </div>
                        <div class="top d-flex align-items-start">
                            <div class="wrapper d-flex flex-column">
                                <h6 class="top_title">Tips memanagement agenda kerja</h6>
                                <ul class="rating d-flex align-items-center">
                                    <span class="rating_value">4.7</span>
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
                                <span class="top_author">by Adrian Dawson school <span
                                        class="top_details">Rp300.000</span></span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.php">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li data-groups='["art", "marketing"]' class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                    <div class="course-card_wrapper">
                        <div class="image"
                            style="background-image: url(https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=240&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFya2V0aW5nfHx8fHx8MTY3MjY1NTMwNQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=400);">
                        </div>
                        <div class="top d-flex align-items-start">
                            <div class="wrapper d-flex flex-column">
                                <h6 class="top_title">Tutorial membuat Feed menarik di Instagram</h6>
                                <ul class="rating d-flex align-items-center">
                                    <span class="rating_value">4.7</span>
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
                                <span class="top_author">by Adrian Dawson school <span
                                        class="top_details">Rp200.000</span></span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.php">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li data-groups='["gamedev", "programming"]'
                    class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                    <div class="course-card_wrapper">
                        <div class="image"
                            style="background-image: url(https://images.unsplash.com/photo-1556438064-2d7646166914?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=240&ixid=MnwxfDB8MXxyYW5kb218MHx8Z2FtZWRldnx8fHx8fDE2NzI2NTUzNzA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=400);">
                        </div>
                        <div class="top d-flex align-items-start">
                            <div class="wrapper d-flex flex-column">
                                <h6 class="top_title">Membuat game menggunakan Unity</h6>
                                <ul class="rating d-flex align-items-center">
                                    <span class="rating_value">4.7</span>
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
                                <span class="top_author">by Adrian Dawson school <span
                                        class="top_details">Rp200.000</span></span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.php">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- courses list section end -->

    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="reviews_header">What our students say</h2>

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
                            <span class="name h5"> Milagros Bueno </span>
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
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Donec molestie eros dolor. Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et
                            placerat.
                            Aenean ut aliquam erat. Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus
                            euismod
                            sapien non ornare sagittis. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod
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
                            <span class="name h5"> Lisa Smith </span>
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
                            <span class="name h5"> Alice Miller </span>
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
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Curabitur laoreet neque at magna pulvinar cursus. Nulla sed suscipit lectus. Phasellus
                            rhoncus
                            vulputate odio et placerat. Aenean ut aliquam erat. Integer rutrum eleifend ante, a bibendum
                            leo
                            tristique id. Phasellus euismod sapien non ornare sagittis. Donec molestie eros dolor. Nulla
                            euismod
                            orci in varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg"
                                        alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Amanda Rendall </span>
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
                            <span class="name h5"> Luke Grimes </span>
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