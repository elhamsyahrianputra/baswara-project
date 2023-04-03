@extends('layouts.main')

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
                    data-order="{{ asset('storage/' . $team->image_url) }}" data-media="{{ asset('storage/' . $team->image_url) }}">
                    <div class="media">
                        <picture>
                            <source data-srcset="{{ asset('storage/' . $team->image_url) }}" srcset="{{ asset('storage/' . $team->image_url) }}" />
                            <img class="lazy" data-src="{{ asset('storage/' . $team->image_url) }}" src="{{ asset('storage/' . $team->image_url) }}"
                                alt="media" />
                        </picture>
                    </div>
                    <div class="main">
                        <h5 class="name">{{ $team->name }}</h5>
                        <span class="division">{{ $team->division }}</span>
                        <p class="description d-none">{{ $team->biography }}</p>

                        {{-- Social Media --}}
                        <span class="instagram d-none">{{ $team->instagram_url }}</span>
                        <span class="linkedin d-none">{{ $team->linkedin_url }}</span>
                        <span class="email d-none">{{ $team->email_url }}</span>
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
                    <span class="label h5">Pengajar Ahli</span>
                </div>
                <div class="counter_content-item d-flex flex-column col-md-4">
                    <span class="countNum number" data-prefix="+" data-value="17" data-suffix="juta">0</span>
                    <span class="label h5">Siswa di Seluruh Dunia</span>
                </div>
                <div class="counter_content-item d-flex flex-column col-md-4">
                    <span class="countNum number" data-prefix="+" data-value="845">0</span>
                    <span class="label h5">Kursus dan Webinar</span>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- team content end -->
@endsection

@section('script')
    <script src="dist/js/team.min.js"></script>
@endsection