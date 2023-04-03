@extends('layouts.main')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="mazer/css/main/app.css">
@endsection
@section('content')
    <main>
        <!-- hero section start -->
        <section class="hero-course">
            <div class="underlay">
                {{-- <div class="underlay_bg rellax"></div> --}}
                <img src="{{ asset('storage/'.$course->cover_url) }}" alt="" style="filter: brightness(20%)">
            </div>
            <div class="container d-flex flex-column align-items-center">
                <span class="hero_icon d-flex align-items-center justify-content-center">
                </span>
                <h2 class="hero_header">{{ $course->name }}</h2>
                <p class="hero_text">
                    Kursus online ini membantu peserta mempelajari dasar-dasar Bahasa Indonesia dengan mudah dan interaktif. Belajar tata bahasa, kosakata, dan pelafalan yang tepat. Cocok untuk siswa, profesional, dan siapa saja yang ingin mempelajari bahasa baru.</p>
                <a class="hero_btn btn btn--gradient" href="@guest /signup @endguest @auth /checkout/{{ $course->id }} @endauth">
                    <span class="text">
                        @guest Daftar Sekarang @endguest
                        @auth Beli kursus ini @endauth
                    </span>
                </a>
                <ul class="hero_nav d-flex flex-wrap justify-content-center">
                    <li class="hero_nav-item">
                        <a class="link text" href="#skills">Keterampilan yang Didapatkan</a>
                    </li>
                    <li class="hero_nav-item">
                        <a class="link text" href="#program">Program Kursus</a>
                    </li>
                    <li class="hero_nav-item">
                        <a class="link text" href="#teachers">Guru</a>
                    </li>
                    <li class="hero_nav-item">
                        <a class="link text" href="#price">Harga</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- hero section end -->

        <!-- skills section start -->
        <section class="skills" id="skills">
            <div class="container">
                <div class="skills_header">
                    <h2 class="skills_header-title">Kemampuan yang akan kamu dapatkan</h2>
                    <p class="skills_header-text">
                        Dengan mengambil materi ini, maka kamu akan dapat menguasai beberapa hal diantaranya adalah
                    </p>
                </div>
                <ul class="skills_list d-sm-flex flex-wrap justify-content-center">
                    @foreach ($course->chapters as $chapter)
                        <li
                            class="skills_list-item col-sm-6 col-xl-3 d-flex flex-column align-items-center justify-content-center">
                            <span class="skills_list-item_title h5 d-flex flex-column align-items-center">
                                <i class="icon-sitemap-solid icon"></i>
                                {{ $chapter->name }}
                            </span>
                            <p class="skills_list-item_text">
                                Aenean venenatis scelerisque enim, in blandit ex pulvinar a. Mauris commodo lacus vel urna
                                posuere tempor.
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- skills section end -->

        <!-- course program section start -->
        <section class="program" id="program">
            <div class="container">
                <div class="program_header d-lg-flex align-items-start">
                    <div class="block col-lg-5 col-xl-4">
                        <h3 class="program_header-title">Program Kursus:</h3>
                        <span class="program_header-text text text--sm">Seluruh kursus - 3 Unit ( 320 Jam)</span>
                    </div>
                    <p class="program_header-description">
                        {{ $course->description }}
                    </p>
                </div>
                <ul class="program_list">

                    @foreach ($course->chapters as $chapter) 
                    <li class="program_list-item d-lg-flex align-items-start">
                        <div class="module d-flex col-lg-5 col-xl-4">
                            <i class="icon-circle icon"></i>
                            <div class="module_main">
                                <h4 class="module_main-header">Bab {{ $loop->iteration }}</h4>
                                <span class="module_main-text text text--sm">1 Jam</span>
                            </div>
                        </div>
                        <div class="main">
                            <div class="item">
                                <h4 class="main_header">{{ $chapter->name }}</h4>
                                <p class="main_text">
                                    {{ $chapter->description }}
                                </p>
                                <div class="main_about">
                                    <div class="main_about-item d-flex align-items-start">
                                        <span class="icon">
                                            <img src="{{ asset('dist/icon/svg/clock.svg') }}" alt="">
                                        </span>
                                        <p class="text">{{ $chapter->theories->count() }} Video Pembelajaran</p>
                                    </div>
                                    {{-- <div class="main_about-item d-flex align-items-start">
                                        <span class="icon">
                                            <img src="{{ asset('dist/icon/svg/chart.svg') }}" alt="">
                                        </span>
                                        <p class="text ">Keahlian yang Kamu Dapatkan: CSS</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </section>
        <!-- course program section end -->
        
        <section class="team" id="teachers">
            <div class="container">
                <h2 class="team_header">Belajar dengan Ahli</h2>
                <ul class="team_list d-flex flex-wrap">
                    <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="1"
                        data-media="/dist/img/placeholder">
                        <div class="media">
                            <picture>
                                <source data-srcset="/dist/img/foto-dosen/1.png" srcset="/dist/img/foto-dosen/1.png" />
                                <img class="lazy" src="/dist/img/foto-dosen/1.png" alt="media" style="height: 239.5px" />
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="name">Dr. Kundharu Saddhono, M. Hum.</h5>
                            <span class="profession">Universitas Sebelas Maret</span>
                        </div>
                    </li>
                    <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="2"
                        data-media="/dist/img/placeholder">
                        <div class="media">
                            <picture>
                                <source data-srcset="/dist/img/foto-dosen/2.jpeg" srcset="/dist/img/foto-dosen/2.jpeg" />
                                <img class="lazy" data-src="/dist/img/foto-dosen/2.jpeg" src="/dist/img/foto-dosen/2.jpeg" alt="media" style="height: 239.5px" />
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="name">Dr. Memet Sudaryanto, S.Pd., M.Pd.</h5>
                            <span class="profession">Universitas Jendral Soedirman</span>
                        </div>
                    </li>
                    <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="3"
                        data-media="/dist/img/placeholder">
                        <div class="media">
                            <picture>
                                <source data-srcset="/dist/img/foto-dosen/3.jpg" srcset="/dist/img/foto-dosen/3.jpg" />
                                <img class="lazy" data-src="/dist/img/foto-dosen/3.jpg" src="/dist/img/foto-dosen/3.jpg" alt="media" style="height: 239.5px" />
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="name">Dr. Wati Istanti, M.Pd.</h5>
                            <span class="profession">Universitas Negeri Semearang</span>
                        </div>
                    </li>
                    <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up" data-order="4"
                        data-media="/dist/img/placeholder">
                        <div class="media">
                            <picture>
                                <source data-srcset="/dist/img/foto-dosen/4.jpg" srcset="/dist/img/foto-dosen/4.jpg" />
                                <img class="lazy" data-src="/dist/img/foto-dosen/4.jpg" src="/dist/img/foto-dosen/4.jpg" alt="media" style="height: 239.5px"/>
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="name">Prof. Djoko Saryono, M.Pd.</h5>
                            <span class="profession">Universitas Negeri Malang</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="price" id="price">
            <div class="container">
                <div class="col-lg-4 mx-auto mb-3">
                    <div class="card shadow" style="background-color:#f6f8fd;border-radius:16px;">
                        <div class="card-body">
                            <div class="container">
                                <div class="col-3 mb-3">
                                    <img class="img-fluid" src="/dist/img/price-tag.png" alt="">
                                </div>
                                <div class="col-10 mb-3">
                                    <h5 class="display">Selamanya</h5>
                                    <h4 class="display">Rp {{ number_format($course->price, 0, ",", ".") }}</h4>
                                </div>
                                <div class="col-12 mb-3">
                                    <p class="text-justify lead fs-6">
                                        Miliki kelas premium secara permanen dan belajar bahasa Indonesia bersama kami!
                                    </p>
                                </div>
                                <hr class="mb-3">
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-2">
                                        <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg" alt="">
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="text-justify lead fs-6">
                                            Akses kelas selamanya
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-2">
                                        <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg" alt="">
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="text-justify lead fs-6">
                                            Gratis pembaruan materi
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-2">
                                        <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg" alt="">
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="text-justify lead fs-6">
                                            Alat pendukung belajar
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-2">
                                        <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg" alt="">
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="text-justify lead fs-6">
                                            Pendidik berkompeten
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-2">
                                        <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg" alt="">
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                        <p class="text-justify lead fs-6">
                                            Grup diskusi
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="" class="btn btn-warning bg-gradient border rounded-pill d-flex text-white">Beli Kelas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- course content end -->
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection
