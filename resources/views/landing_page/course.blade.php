@extends('layouts.main')

@section('content')
<main>
    <!-- hero section start -->
    <section class="hero-course">
        <div class="underlay">
            <div class="underlay_bg rellax"></div>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <span class="hero_icon d-flex align-items-center justify-content-center">
                <i class="icon-css3 icon"></i>
            </span>
            <h2 class="hero_header">Computer CSS3 Programming Course</h2>
            <p class="hero_text">
                Donec accumsan, dolor ac malesuada rhoncus, leo arcu pellentesque dolor, nec tristique diam neque vitae
                sem. Nulla a
                lectus sollicitudin, volutpat lacus id, eleifend ipsum. Etiam sollicitudin faucibus nibh sed ultrices
            </p>
            <div class="hero_info d-sm-flex align-items-center justify-content-center">
                <div class="hero_info-block d-flex flex-column align-items-center align-items-sm-end">
                    <span class="hero_info-block_title">Start at March 24, 2021</span>
                    <span class="hero_info-block_text">1,152,628 already registered</span>
                </div>
                <div class="hero_info-block d-flex flex-column align-items-center align-items-sm-start">
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
                    <span class="hero_info-block_text">more than 99% of students rate this course content and results as
                        Super</span>
                </div>
            </div>
            <a class="hero_btn btn btn--gradient" href="@guest /signup @endguest @auth /payment @endauth">
                <span class="text">
                    @guest Daftar Sekarang @endguest
                    @auth Beli kursus ini @endauth
                </span>
            </a>
            <ul class="hero_nav d-flex flex-wrap justify-content-center">
                <li class="hero_nav-item">
                    <a class="link text" href="#skills">Skills You Get</a>
                </li>
                <li class="hero_nav-item">
                    <a class="link text" href="#program">Course Program</a>
                </li>
                <li class="hero_nav-item">
                    <a class="link text" href="#reviews">Testimonials</a>
                </li>
                <li class="hero_nav-item">
                    <a class="link text" href="#teachers">Teachers</a>
                </li>
                <li class="hero_nav-item">
                    <a class="link text" href="#price">Price</a>
                </li>
            </ul>
        </div>
    </section>
    <div class="presentation">
        <div class="container">
            <div class="presentation_video">
                <div class="cover">
                    <div class="cover_media">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                        </picture>
                    </div>
                    <a class="cover_play" href="#">
                        <lottie-player src="lottie/play.json" background="transparent" speed=".5"
                            style="width: 100%; height: 100%" loop autoplay></lottie-player>
                    </a>
                </div>
                <iframe src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0" title="YouTube video player"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- hero section end -->
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="container">
            <div class="skills_header">
                <h2 class="skills_header-title">Skills you will get</h2>
                <p class="skills_header-text">
                    Duis ac tristique justo. Nulla porttitor mattis nibh, et dignissim nibh ullamcorper a. Donec
                    dignissim semper
                    facilisis. Nunc consectetur mauris consectetur justo gravida, eu tristique urna mattis
                </p>
            </div>
            <ul class="skills_list d-sm-flex flex-wrap">
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-html5-brands icon"></i>
                        Html5
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-css3 icon"></i>
                        Css3
                    </span>
                    <p class="skills_list-item_text">
                        Skills focus on the marketable skills of styling the Web-page with Cascade Style Sheets CSS3
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-file-code-solid icon"></i>
                        Web Development
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-object-group-solid icon"></i>
                        Web Design Skills
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-sitemap-solid icon"></i>
                        Advanced Sheets Styling
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-laptop-code-solid icon"></i>
                        Adaptive layout making
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-window-restore-solid icon"></i>
                        Moved the site to WordPress
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
                <li
                    class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                    <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                        <i class="icon-edit-solid icon"></i>
                        Editing and adding content
                    </span>
                    <p class="skills_list-item_text">
                        Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                        posuere tempor.
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <!-- skills section end -->
    <!-- course program section start -->
    <section class="program" id="program">
        <div class="container">
            <div class="program_header d-lg-flex align-items-start">
                <div class="block col-lg-5 col-xl-4">
                    <h3 class="program_header-title">Course program:</h3>
                    <span class="program_header-text text text--sm">All course - 3 Units ( 320 hours)</span>
                </div>
                <p class="program_header-description">
                    Duis maximus nisl gravida elit molestie tincidunt. Duis ac tristique justo. Nulla porttitor mattis
                    nibh, et
                    dignissim nibh ullamcorper a. Donec dignissim semper facilisis. Nunc consectetur mauris consectetur
                    justo
                    gravida, eu tristique urna mattis. Fusce eu dolor vitae dui semper gravida ut quis nisi. Praesent
                    semper
                    suscipit bibendum. Mauris sed dictum ipsum. Aenean dictum ipsum eu arcu pretium, vestibulum
                    malesuada orci
                    tincidunt. Aenean ut fringilla velit. In tincidunt, mauris ut vestibulum tristique, neque enim
                    posuere diam, ut
                    ullamcorper diam dui eu mauris
                </p>
            </div>
            <ul class="program_list">
                <li class="program_list-item d-lg-flex align-items-start">
                    <div class="module d-flex col-lg-5 col-xl-4">
                        <i class="icon-circle icon"></i>
                        <div class="module_main">
                            <h4 class="module_main-header">1st Unit</h4>
                            <span class="module_main-text text text--sm">80 hours</span>
                        </div>
                    </div>
                    <div class="main">
                        <div class="item">
                            <h4 class="main_header">Course: Getting Started with Simple Styling</h4>
                            <p class="main_text">
                                Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut
                                aliquam erat.
                                Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                                ornare
                                sagittis. Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus
                            </p>
                            <div class="main_about">
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">
                                        <img src="{{ asset('dist/logo/svg/clock.svg') }}" alt="">
                                    </span>
                                    <p class="text">13 Video Lectures, 6 Training Methodics, 4 Tasks</p>
                                </div>
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">Skills You Get: CSS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="program_list-item d-lg-flex align-items-start">
                    <div class="module d-flex col-lg-5 col-xl-4">
                        <i class="icon-circle icon"></i>
                        <div class="module_main">
                            <h4 class="module_main-header">2nd Unit</h4>
                            <span class="module_main-text text text--sm">110 hours</span>
                        </div>
                    </div>
                    <div class="main">
                        <div class="item">
                            <h4 class="main_header">
                                Course: Week Three: Pseudo-classes, Pseudo-elements, Transitions, and Positioning
                            </h4>
                            <p class="main_text">
                                Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut
                                aliquam erat.
                                Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                                ornare
                                sagittis. Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus
                            </p>
                            <div class="main_about">
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">13 Video Lectures, 6 Training Methodics, 4 Tasks</p>
                                </div>
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">Skills You Get: Advanced CSS</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h4 class="main_header">Course: Web Design Principles, Grids and Composition</h4>
                            <p class="main_text">
                                Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut
                                aliquam erat.
                                Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                                ornare
                                sagittis. Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus
                            </p>
                            <div class="main_about">
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">8 Video Lectures, 6 Training Methodics, 4 Tasks</p>
                                </div>
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">Skills You Get: Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="program_list-item d-lg-flex align-items-start">
                    <div class="module d-flex col-lg-5 col-xl-4">
                        <i class="icon-circle icon"></i>
                        <div class="module_main">
                            <h4 class="module_main-header">3rd Unit</h4>
                            <span class="module_main-text text text--sm">130 hours</span>
                        </div>
                    </div>
                    <div class="main">
                        <div class="item">
                            <h4 class="main_header">Course: What is HTML5. Adaptive layout</h4>
                            <p class="main_text">
                                Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut
                                aliquam erat.
                                Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                                ornare
                                sagittis. Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus
                            </p>
                            <div class="main_about">
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">24 Video Lectures, 6 Training Methodics, 4 Tasks</p>
                                </div>
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">Skills You Get: Advanced HTML5</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h4 class="main_header">Course: Website Development and Final Task - Real Site Landing</h4>
                            <p class="main_text">
                                Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut
                                aliquam erat.
                                Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non
                                ornare
                                sagittis. Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus
                            </p>
                            <div class="main_about">
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">13 Video Lectures, 6 Training Methodics, 4 Tasks</p>
                                </div>
                                <div class="main_about-item d-flex align-items-start">
                                    <span class="icon">

                                    </span>
                                    <p class="text">
                                        Skills You Get: Website Development, Web Accessibility, WordPress, WooCommerce
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="program_list-item d-lg-flex align-items-start">
                    <div class="module d-flex col-lg-5 col-xl-4">
                        <h3 class="module_header">You'll get:</h3>
                    </div>
                    <div class="main">
                        <h4 class="main_header">After the final task and according to the results</h4>
                        <p class="main_text">
                            Advanced Development Skills, University Certified Certificate, Ready website, Job offers
                            from our
                            partners
                        </p>
                        <div class="main_media d-md-flex justify-content-between">
                            <div class="main_media-item">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg"
                                        alt="media" />
                                </picture>
                            </div>
                            <div class="main_media-item">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg"
                                        alt="media" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- course program section end -->
    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="reviews_header">What early learners say about this course</h2>

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
    <section class="team" id="teachers">
        <div class="container">
            <h2 class="team_header">Course teachers</h2>
            <ul class="team_list d-flex flex-wrap">
                <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="1"
                    data-media="img/placeholder">
                    <div class="media">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">D.C.S. Grover Wehner</h5>
                        <span class="profession">Developer and Lead Instructor</span>
                    </div>
                </li>
                <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="2"
                    data-media="img/placeholder">
                    <div class="media">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">Oleta Carroll</h5>
                        <span class="profession">Web-developer, UX Architect</span>
                    </div>
                </li>
                <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="3"
                    data-media="img/placeholder">
                    <div class="media">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">Dejuan Maggio</h5>
                        <span class="profession">Web-developer, UX Architect</span>
                    </div>
                </li>
                <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="4"
                    data-media="img/placeholder">
                    <div class="media">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                            <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">Steve Weissnat</h5>
                        <span class="profession">Product&Project Management</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<!-- course content end -->
@endsection