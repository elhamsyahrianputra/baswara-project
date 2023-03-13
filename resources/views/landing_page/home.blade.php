@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="/dist/css/owl.carousel.css">
    <link rel="stylesheet" href="/dist/css/owl.theme.default.css">
    <style>

        .owl-carousel {
            /* background-color: green; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .owl-carousel .item {
            padding: 10px;
            display: flex;
            /* background-color: red; */
            justify-content: center;
        }

        .owl-carousel .item img {
            display: block;
            height: 100%;
            min-height: 100px;
            max-height: 101px;
            object-fit: contain;
        }
    </style>
@endsection

@section('content')
    <main>
        <!-- hero section start -->
        <div class="underlay"></div>
        <section class="hero">
            <div class="container d-lg-flex align-items-center">
                <div class="hero_content">
                    <h1 class="hero_content-header" data-aos="fade-up">Baswara Rumah Pembelajara BIPA</h1>
                    <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                        <p class="text" data-aos="fade-left">Belajar bersama kami di mana pun dan kapan pun!</p>
                    </div>
                    <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
                        Baswara sebagai pusat pembelajaran BIPA bekerja sama dengan pengajar BIPA terpercaya untuk menyediakan media pembeajaran yang dapat diakses di mana pun dan kapan pun. Ayo bergabung bersama kami!
                    </p>
                    <div class="hero_content-action d-flex flex-wrap">
                        <a class="btn btn--gradient" href="/signup" data-aos="fade-left">
                            <span class="text">Daftar Sekarang!</span>
                        </a>
                    </div>
                </div>
                <div class="hero_media col-lg-6">
                    <lottie-player src="dist/lottie/index.json" background="transparent" speed="1"
                        style="width: 80%; height: 100%" loop autoplay></lottie-player>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        <!-- features section start -->
        <div class="features">
            <div class="container">
                <ul class="features_list d-md-flex flex-wrap">
                    <li class="features_list-item col-md-4" data-order="1" data-aos="fade-up">
                        <div class="card card-benefit">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-user-graduate-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">Sertifikat</h5>
                                    <p class="card_main-text">
                                        Selesaikan seluruh kegiatan dan dapatkan sertifikat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="features_list-item col-md-4" data-order="2" data-aos="fade-up">
                        <div class="card card-benefit">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-clock-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">Tidak Terikat Waktu</h5>
                                    <p class="card_main-text">
                                        Kamu dapat melaksanakan kursusmu kapan pun! Kerjakan saat kamu senggang.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                        <div class="card card-benefit">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-headset-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">Pembelajaran Daring</h5>
                                    <p class="card_main-text">
                                        Belajar di mana pun kamu mau? Bisa sambil santai? Tidak masalah! Baswara solusinya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- features section end -->
        <!-- promo section start -->
        <section class="promo">
            <div class="container d-flex flex-column-reverse flex-lg-row justify-content-lg-end">
                <div class="promo_media">
                    <lottie-player src="dist/lottie/hero.json" background="transparent" speed="1"
                        style="width: 120%; height: 100%" loop autoplay></lottie-player>
                </div>
                <div class="promo_content">
                    <h2 class="promo_content-header" data-aos="fade-left">Tingkatkan Terus Kemampuanmu!</h2>
                    <p class="promo_content-text" data-aos="fade-up" data-aos-delay="50">
                        Jangan cepat puas dengan kemampuanmu! Terus tingkatkan keahlianmu. Bergabung bersama kami untuk
                        meningkatkan pemahamanmu. Bergabung bersama kami sekarang juga!
                    </p>
                </div>
            </div>
        </section>
        <!-- promo section end -->
        <!-- about section start -->
        <section class="about">
            <div class="container">
                <div class="about_deco">
                    <lottie-player src="dist/lottie/wave.json" background="transparent" speed="1"
                        style="width: 100%; height: 100%" loop autoplay></lottie-player>
                </div>
                <div class="about_main">
                    <div class="content">
                        <h2 class="about_main-header" data-aos="fade-in">Bagaimana Baswara Rumah Pembelajaran BIPA Membantumu?</h2>
                        <ul class="about_main-list">
                            <li class="about_main-list_item" data-aos="fade-up">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">Mentor terpercaya</h5>
                                    <p class="text">Peserta akan mendapatkan bimbingan dari mentor kami yang terpercaya.
                                    </p>
                                </div>
                            </li>
                            <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">Daftarkan dirimu, kemudian dapatkan akses materi dan video
                                        pembelajaran.</h5>
                                    <p class="text">Dengan mendaftarkan dirimu, maka kamu mendapatkan akses materi dan
                                        video
                                        pembelajaran serta terdapat latihan kompetensi untuk menguji pemahamanmu.</p>
                                </div>
                            </li>
                            <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">
                                        Setelah menyelesaikan seluruh kegiatan pelatihan, peserta akan mendapatkan
                                        sertifikat.
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="about_review" data-aos="zoom-in">
                    <div class="about_review-wrapper">
                        <div class="media">
                            <picture>
                                <source data-srcset="dist/img/placeholder.jpg" srcset="dist/img/placeholder.jpg" />
                                <img class="lazy" data-src="dist/img/placeholder.jpg" src="dist/img/placeholder.jpg"
                                    alt="media" />
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="main_name">Muhammad Hardiansyah</h5>
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
                            <q class="main_review quote">
                                “Dengan mendaftar Baswara Rumah Pembelajaran BIPA, saya menguasai keahlian baru. Bimbingan dari
                                mentor sangat membantu
                                saya dalam memahami materi.”
                            </q>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        {{-- Collaboration section start --}}
        <section class="recently partners">
            <div class="container">
                <div class="recently_header">
                    <h2 class="recently_header-title" data-aos="fade-up">Kolaborasi</h2>
                    <p class="recently_header-text" data-aos="fade-down">
                        Kami bekerja sama dengan beberapa Universitas dan Organisasi Nasional maupun International
                    </p>
                </div>

                <div class="owl-carousel">

                    @foreach ($collaborations as $collaboration)
                        <div class="item">
                            <a href="https://{{ $collaboration->url_to }}">
                                <img src="{{ asset('storage/'.$collaboration->image_url) }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Collaboration section end --}}

        <!-- recently courses section start -->
        <section class="recently">
            <div class="container">
                <div class="recently_header">
                    <h2 class="recently_header-title" data-aos="fade-up">Kursus Terbaru</h2>
                    <p class="recently_header-text" data-aos="fade-down">
                        Beberapa kursus terbaru di Baswara Rumah Pembelajaran BIPA
                    </p>
                </div>

                <ul class="list_courses d-md-flex flex-wrap justify-content-center">
                    @foreach ($courses as $course)
                    <li class="list_courses-card course-card col-12 col-md-6 col-xl-4">
                        <div class="course-card_wrapper">
                            <div class="image"
                                style="background-image: url({{ asset('storage/'.$course->cover_url) }});">
                            </div>
                            <div class="top d-flex align-items-start">
                                <div class="wrapper d-flex flex-column">
                                    <h6 class="top_title">{{ $course->name }}</h6>
                                    <ul class="rating d-flex align-items-center">
                                        <span class="rating_value me-2">4.7</span>
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
                                    <div class="row">
                                        <div class="col top_author">
                                            by {{ $course->author->name }}
                                        </div>
                                        <div class="col-3">
                                            <span class="top_details">Rp{{ number_format($course->price, 0, ",", ".") }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="/course/{{ $course->id }}">
                                    Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a class="recently_btn btn btn--gradient" href="/courses">
                    <span class="text">Lihat Semua Pembelajaran</span>
                </a>
            </div>
        </section>

        
        <!-- recently courses section end -->
        <!-- banner section start -->
        {{-- <div class="banner">
        <div class="underlay"></div>
        <div class="container d-lg-flex align-items-center">
            <div class="banner_content">
                <h4 class="banner_content-title" data-aos="fade-up">
                    Dapatkan akses tanpa batas dengan <b>subscribe</b>!
                </h4>
                <div class="wrapper" data-aos="fade-up" data-aos-delay="50">
                    <a class="banner_content-btn btn btn--yellow" href="pricing.php">Pricing plans</a>
                </div>
            </div>
            <div class="banner_media">
                <picture>
                    <source data-srcset="img/full_logo2.png" srcset="img/full_logo2.png" />
                    <img class="lazy" data-src="img/full_logo2.png" src="img/full_logo2.png" alt="media" />
                </picture>
            </div>
        </div>
    </div> --}}
        <!-- banner section end -->
    </main>

@section('script')
<script src="{{ asset('dist/js/courses.min.js') }}"></script>
<script src="{{ asset('dist/js/reviews.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout:3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endsection
@endsection
