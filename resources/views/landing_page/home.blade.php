@extends('layouts.main')

@section('content')
<main>
    <!-- hero section start -->
    <div class="underlay"></div>
    <section class="hero">
        <div class="container d-lg-flex align-items-center">
            <div class="hero_content">
                <h1 class="hero_content-header" data-aos="fade-up">Baswara Learning Academy</h1>
                <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                    <p class="text" data-aos="fade-left">Belajar bersama kami dimanapun dan kapanpun!</p>
                </div>
                <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
                    Baswara Learning Academy bekerja sama dengan mentor terpercaya untuk menyediakan media pembelajaran
                    yang dapat
                    diakses dimanapun dan kapanpun.
                </p>
                <div class="hero_content-action d-flex flex-wrap">
                    <a class="btn btn--gradient" href="/registration" data-aos="fade-left">
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
                    <div class="card">
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
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-clock-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Tidak Terikat Waktu</h5>
                                <p class="card_main-text">
                                    Kamu dapat melaksanakan kursusmu kapanpun! Kerjakan saat kamu senggang.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-headset-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Full Daring</h5>
                                <p class="card_main-text">
                                    Belajar dimanapun kamu mau! Sambil ngafe atau ngopi? Tidak masalah!
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
                <h2 class="promo_content-header" data-aos="fade-left">Upgrade Terus Kemampuanmu!</h2>
                <p class="promo_content-text" data-aos="fade-up" data-aos-delay="50">
                    Jangan cepat puas dengan kemampuanmu! Terus upgrade keahlianmu. Bergabung bersama kami untuk
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
                    <h2 class="about_main-header" data-aos="fade-in">Bagaimana Baswara Learning Academy Membantumu?</h2>
                    <ul class="about_main-list">
                        <li class="about_main-list_item" data-aos="fade-up">
                            <i class="icon-check icon"></i>
                            <div class="content">
                                <h5 class="title">Mentor terpercaya</h5>
                                <p class="text">Peserta akan mendapatkan bimbingan dari mentor kami yang terpercaya.</p>
                            </div>
                        </li>
                        <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                            <i class="icon-check icon"></i>
                            <div class="content">
                                <h5 class="title">Daftarkan dirimu, kemudian dapatkan akses materi dan video
                                    pembelajaran.</h5>
                                <p class="text">Dengan mendaftarkan dirimu, maka kamu mendapatkan akses materi dan video
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
                            <img class="lazy" data-src="dist/img/placeholder.jpg" src="dist/img/placeholder.jpg" alt="media" />
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
                            “Dengan mendaftar Baswara Learning Academy, saya menguasai keahlian baru. Bimbingan dari
                            mentor sangat membantu
                            saya dalam memahami materi.”
                        </q>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    <!-- popular courses section start -->
    <section class="popular">
        <div class="container">
            <div class="popular_header">
                <h2 class="popular_header-title" data-aos="fade-up">Kursus Populer</h2>
                <p class="popular_header-text" data-aos="fade-down">
                    Beberapa kursus di Baswara Learning Academy yang memiliki peminat terbanyak diantaranya yaitu:
                </p>
            </div>

            <ul class="list_courses d-md-flex flex-wrap">
                @for ($i = 0; $i < 3; $i++) 
                <li data-groups='["gamedev", "programming"]' class="list_courses-card course-card col-12 col-md-6 col-xl-4">
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
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="/course">
                                Ikuti Kursus Ini <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                    </li>
                    @endfor

            </ul>
            <a class="popular_btn btn btn--gradient" href="/courses">
                <span class="text">Learn more</span>
            </a>
        </div>
    </section>
    <!-- popular courses section end -->
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
@endsection