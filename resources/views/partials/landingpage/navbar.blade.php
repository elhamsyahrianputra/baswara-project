@guest
<div class="promobar d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <ul class="promobar_socials d-flex align-items-center">
            <li class="promobar_socials-item">
                <a class="link" href="https://www.instagram.com/baswara.uns/" target="_blank" rel="noopener noreferrer">
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
            <a class="btn btn--yellow" href="/registration">
                <span>Registration</span>
            </a>
        </div>
    </div>
</div>
@endguest
<header class="header" data-page="">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div class="logo header_logo">
            <a class="d-inline-flex align-items-center" href="/">
                <span class="logo_picture">
                    <img src="dist/img/logo.png" alt="Baswara" />
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
                    <li class="header_nav-list_item dropdown_navbar">
                        <a class="nav-item dropdown_navbar-toggle d-inline-flex align-items-center"
                            data-bs-toggle="collapse" data-bs-target="#coursesMenu" data-trigger="dropdown_navbar"
                            aria-expanded="false" aria-controls="coursesMenu" data-page="courses">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ asset('dist/img/avatar_default.jpg') }}">
                            </span>
                            <i class="icon-angle-down icon"></i>
                        </a>
                        <div class="dropdown_navbar-menu collapse" id="coursesMenu">
                            <ul class="dropdown_navbar-list">
                                <li class="list-item">
                                    <a class="dropdown_navbar-item nav-item" data-page="course" href="#">
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