@extends('layouts.learning')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="row bg-dark ms-2">
                <div class="col-md-10 d-block mx-auto">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <section class="main-video">
                                <video src="https://drive.google.com/uc?export=preview&id=1yrVLz1j4sPFqN37CbSKlL6WaV38vEGC2" class="img-fluid" id="video" controls></video>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <section class="main-video">
                                <video src="https://drive.google.com/uc?export=preview&id=1yrVLz1j4sPFqN37CbSKlL6WaV38vEGC2" class="img-fluid" id="video1" controls></video>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                            <section class="main-video">
                                <video src="https://drive.google.com/uc?export=preview&id=1yrVLz1j4sPFqN37CbSKlL6WaV38vEGC2" class="img-fluid" id="video2" controls></video>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <section class="main-video">
                                <video src="https://drive.google.com/uc?export=preview&id=1yrVLz1j4sPFqN37CbSKlL6WaV38vEGC" class="img-fluid" id="video3" controls></video>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <section class="main-video">
                                <video src="https://drive.google.com/uc?export=preview&id=1yrVLz1j4sPFqN37CbSKlL6WaV38vEGC2" class="img-fluid" id="video4" controls></video>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-3">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Deskripsi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Pengumuman</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Unduh Materi</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active text-center" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        Alfabet adalah sebuah sistem tulisan yang berdasarkan lambang fonem vokal dan konsonan. Kata alfabet diambil dari bahasa Yunani, dari dua huruf pertama tulisan mereka yaitu alfa dan beta. Alfabet berbeda dengan abjad, yang biasanya tidak memiliki lambang vokal, dan berbeda dengan abugida dan aksara silabis, yang setiap hurufnya melambangkan fonem namun dalam bentuk suku kata.
                    </div>
                    <div class="tab-pane fade text-center" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h5>Belum ada postingan pengumuman</h5>
                        <span>Instruktur belum menambahkan pengumuman apa pun ke kursus ini. Pengumuman berfungsi untuk memberi tahu Anda tentang pembaruan atau penambahan pada kursus.</span>
                    </div>
                    <div class="tab-pane fade text-center" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <h5>Unduh materi PDF dengan klik tombol dibawah ini!</h5>
                        <a class="btn btn-primary m-3" href="https://drive.google.com/uc?export=download&id=1xfzO78IVm0j6MRrcCFUlv59rU2iubyfp">
                            <i class="fa-solid fa-file-arrow-down fa-2x mx-2"></i>
                            <span>Materi 1</span>
                        </a>
                        <a class="btn btn-primary m-3" href="https://drive.google.com/uc?export=download&id=1xfzO78IVm0j6MRrcCFUlv59rU2iubyfp">
                            <i class="fa-solid fa-file-arrow-down fa-2x mx-2"></i>
                            <span>Materi 2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 border position-fixed top-0 end-0 overflow-scroll" style="height:100%;">
            <h4 class="title mt-5 pt-5">{{ $course->name }}</h4>
            <p>4 modul &nbsp; . &nbsp; 5m 24s</p>
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link bg-light" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="Pause()" disabled>
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa-solid fa-bars-progress fa-1x"></i>
                        </div>
                        <div class="col-sm-7">
                            <span>MODUL 1</span>
                        </div>
                        <div class="col-sm-2 offset-sm-1">
                            <span></span>
                        </div>
                    </div>
                </button>

                @foreach ($course->chapters as $chapter)            
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-heading{{ $loop->iteration }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="panelsStayOpen-collapse{{ $loop->iteration }}">
                                {{ $chapter->name }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse{{ $loop->iteration }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading{{ $loop->iteration }}">
                            <div class="accordion-body">
                                @foreach ($chapter->theories as $theory)
                                <button class="nav-link ps-4" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="Pause()">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa-solid fa-circle-play fa-1x"></i>
                                        </div>
                                        <div class="col-sm-7">
                                            <span>{{ $theory->name }}</span>
                                        </div>
                                        <div class="col-sm-2 offset-sm-1">
                                            <span>1:21</span>
                                        </div>
                                    </div>
                                </button>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    var v = document.getElementById("video");
    var v1 = document.getElementById("video1");
    var v2 = document.getElementById("video2");
    var v3 = document.getElementById("video3");
    var v4 = document.getElementById("video4");

    function Pause() {
        v.pause();
        v1.pause();
        v2.pause();
        v3.pause();
        v4.pause();

    }
</script>

@endsection