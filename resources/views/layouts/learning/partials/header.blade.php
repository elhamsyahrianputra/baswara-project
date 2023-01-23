<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | Edison</title>
    <script src="https://kit.fontawesome.com/a7839c53d5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js"
        async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="css/preload.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.css" />
    <link rel="stylesheet" href="css/landingpage.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
</head>

<body style="height: 1000px;">
    <header class="header" data-page="">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo header_logo">
                <a class="d-inline-flex align-items-center" href="/">
                    <span class="logo_picture">
                        <img src="img/logo.png" alt="Baswara" />
                    </span>
                    <span class="text">
                        <span class="brand">Baswara</span>
                        <span class="text_secondary">Learning Academy</span>
                    </span>
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
                        <a class="nav-item" href="/" data-page="home">Home</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/courses" data-page="home">All Courses</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/contacts" data-page="contacts">Contact Us</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/team" data-page="contacts">Our Team</a>
                    </li>
                    @auth
                    <div class="header_nav-list ms-5">
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="/dashboard" data-page="contacts">Dashboard</a>
                        </li>
                        <li class="header_nav-list_item dropdown">
                            <a class="nav-item dropdown-toggle d-inline-flex align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#coursesMenu" data-trigger="dropdown"
                                aria-expanded="false" aria-controls="coursesMenu" data-page="courses">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ asset('img/avatar_default.jpg') }}">
                                </span>
                                <i class="icon-angle-down icon"></i>
                            </a>
                            <div class="dropdown-menu collapse" id="coursesMenu">
                                <ul class="dropdown-list">
                                    <li class="list-item">
                                        <a class="dropdown-item nav-item" data-page="course" href="#">
                                            <i class="fa-solid fa-user"></i>
                                            <span class="profile-dropdown-item">Profil Saya</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a class="dropdown-item nav-item" data-page="course" href="#">
                                            <i class="fa-solid fa-gear"></i><span
                                                class="profile-dropdown-item">Pengaturan</span>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit">
                                                <i class="fa-solid fa-right-from-bracket text-red"></i>
                                                <span class="profile-dropdown-item text-red">Log Out</span>
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