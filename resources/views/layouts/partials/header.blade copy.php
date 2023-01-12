<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js"
        async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top-position">
    <div class="promobar d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <ul class="promobar_socials d-flex align-items-center">
                <li class="promobar_socials-item">
                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                        <i class="icon-facebook"></i>
                    </a>
                </li>
                <li class="promobar_socials-item">
                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
                <li class="promobar_socials-item">
                    <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                        <i class="icon-instagram"></i>
                    </a>
                </li>
            </ul>
            <div class="promobar_main d-flex align-items-center">
                <p class="promobar_main-text">Mari Belajar Bersama Kami! <span class="hide">Daftarkan Dirimu Sekarang
                        Juga!</span></p>
                <a class="btn btn--yellow" href="/signup">
                    <span>Sign Up</span>
                </a>
            </div>
        </div>
    </div>
    <header class="header" data-page="">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo header_logo">
                <a class="d-inline-flex align-items-center" href="index.php">
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
                        <a class="nav-item" href="/courses" data-page="courses">All Courses</a>
                    </li>
                    <div class="dropdown-menu collapse" id="coursesMenu">
                        <ul class="dropdown-list">
                            <li class="list-item" data-main="true">
                                <a class="dropdown-item nav-item" data-page="courses" href="" data-main="true">
                                    All Courses
                                </a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item" href="/contacts" data-page="about">Contact Us</a>
                    </li>
                    <ul class="promobar_socials d-flex align-items-center justify-content-center">
                        <li class="promobar_socials-item">
                            <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li class="promobar_socials-item">
                            <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li class="promobar_socials-item">
                            <a class="link" href="#" target="_blank" rel="noopener noreferrer">
                                <i class="icon-instagram"></i>
                            </a>
                        </li>
                    </ul>
            </nav>
        </div>
    </header>