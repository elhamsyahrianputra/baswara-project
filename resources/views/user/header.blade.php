<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet preload" as="style" href="{{ asset('dist/css/preload.min.css') }}" />
    <link rel="stylesheet preload" as="style" href="{{ asset('dist/css/libs.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/landingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <script src="https://kit.fontawesome.com/a7839c53d5.js" crossorigin="anonymous"></script>
</head>

<body>
    @guest
        <div class="promobar d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <ul class="promobar_socials d-flex align-items-center">
                    <li class="promobar_socials-item">
                        <a class="link" href="https://www.instagram.com/baswara.uns/" target="_blank"
                            rel="noopener noreferrer">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li class="promobar_socials-item">
                        <a class="link" href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li class="promobar_socials-item">
                        <a class="link" href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">
                            <i class="icon-linkedin-brands"></i>
                        </a>
                    </li>
                </ul>
                <div class="promobar_main d-flex align-items-center">
                    <p class="promobar_main-text">Mari Belajar Bersama Kami! <span class="hide">Daftarkan Dirimu Sekarang
                            Juga!</span></p>
                    <a class="btn btn--yellow" href="/signup">
                        <span>Daftar</span>
                    </a>
                </div>
            </div>
        </div>
    @endguest
    <header class="header" data-page="">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo header_logo">
                <a class="d-flex flex-column justify-content-center" href="/">
                    <div class="logo_picture">
                        <img src="{{ asset('dist/img/logo/full_transparent.png') }}" alt="Baswara" />
                    </div>
                    <div class="text">
                        <span class="brand">Rumah Pembelajaran BIPA</span>
                    </div>
                </a>
            </div>
            <button class="header_trigger" type="button" data-bs-toggle="collapse" data-bs-target="#headerMenu"
                aria-controls="headerMenu">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <nav class="header_nav collapse" id="headerMenu">
                <ul class="header_nav-list">
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/">Beranda</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/courses">Rumah Pembelajaran</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/posts">Info Seputar BIPA</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/contacts">Narahubung</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/team">Pengelola</a>
                    </li>
                    @auth
                        <div class="header_nav-list ms-5">
                            <li class="header_nav-list_item">
                                <a class="nav-item" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="header_nav-list_item dropdown_navbar">
                                <a class="nav-item dropdown_navbar-toggle d-inline-flex align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#coursesMenu" data-trigger="dropdown_navbar"
                                    aria-expanded="false" aria-controls="coursesMenu" data-page="courses">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('storage/' . auth()->user()->avatar_url) }}">
                                    </span>
                                    <i class="icon-angle-down icon"></i>
                                </a>
                                <div class="dropdown_navbar-menu collapse" id="coursesMenu">
                                    <ul class="dropdown_navbar-list">
                                        <li class="list-item">
                                            <a class="dropdown_navbar-item nav-item" data-page="course"
                                                href="/myProfile">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="profile-dropdown_navbar-item">Profil Saya</span>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown_navbar-item nav-item" data-page="course" href="#">
                                                <i class="fa-solid fa-gear"></i><span
                                                    class="profile-dropdown_navbar-item">Pengaturan</span>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button type="submit">
                                                    <i class="fa-solid fa-right-from-bracket text-red"></i>
                                                    <span class="profile-dropdown_navbar-item text-red">Log Out</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>
    <!-- homepage content start -->
