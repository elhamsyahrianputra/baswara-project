@extends('layouts.landing_page.main')

@section('content')

<!-- team content start -->
<div class="page_main">
    <div class="underlay"></div>
    <div class="container">
        <div class="content-wrapper">
            <h1 class="page_main-header">BASWARA Team</h1>
            <p class="page_main-text">
                BASWARA hadir untuk mendukung pembelajaran BIPA. BASWARA meruapakan website yang bertujuan 
                untuk memberikan ruang berinteraksi sesama pengjajar BIPA dan pemelajar asing dalam mempelajari 
                bahasa serta budaya indonesia.
            </p>
        </div>
    </div>
</div>
</header>
<main>
    <section class="team">
        <div class="container">
            <ul class="team_list d-flex flex-wrap justify-content-center">
                @foreach ($teams as $team)
                <li class="team_list-item col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up"
                    data-order="{{ $team->image_url }}" data-media="{{ $team->image_url }}">
                    <div class="media">
                        <picture>
                            <source data-srcset="{{ $team->image_url }}" srcset="{{ $team->image_url }}" />
                            <img class="lazy" data-src="{{ $team->image_url }}" src="{{ $team->image_url }}"
                                alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">{{ $team->name }}</h5>
                        <span class="division">{{ $team->division }}</span>
                        <p class="description d-none">{{ $team->description }}</p>

                        {{-- Social Media --}}
                        <span class="instagram d-none">{{ $team->instagram }}</span>
                        <span class="facebook d-none">{{ $team->facebook }}</span>
                        <span class="linkedin d-none">{{ $team->linkedin }}</span>
                    </div>
                </li>
                @endforeach



            </ul>
        </div>
    </section>
    <div class="counter">
        <div class="underlay"></div>
        <div class="container">
            <div class="counter_content d-md-flex">
                <div class="counter_content-item d-flex flex-column col-md-4">
                    <span class="countNum number" data-value="5000" data-separator=",">0</span>
                    <span class="label h5">Specializations</span>
                </div>
                <div class="counter_content-item d-flex flex-column col-md-4">
                    <span class="countNum number" data-prefix="+" data-value="17" data-suffix="millions">0</span>
                    <span class="label h5">Students Worldwide</span>
                </div>
                <div class="counter_content-item d-flex flex-column col-md-4">
                    <span class="countNum number" data-prefix="+" data-value="845">0</span>
                    <span class="label h5">Courses and Webinars</span>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- team content end -->
@endsection