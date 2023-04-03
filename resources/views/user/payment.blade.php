@extends('layouts.main')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="mazer/css/main/app.css">
@endsection
@section('content')
    <div class="container-fluid bg-light my-4">
        <div class="container col-xl-4 col-lg-6 col-md-8 col-10 mb-3 text-center">
            <h4 class="text-capitalize pb-2">Pembayaran kelas</h4>
            <p class="fs-5 lead">Dengan Baswara Rumah Pemblejaran BIPA, belajar Bahasa Indonesia menjadi lebih mudah dan
                menyenangkan!</p>
        </div>
        <div class="container col-xl-6 col-lg-8 col-md-10 col-12 mb-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center pb-2">Manfaat yang Kamu Dapatkan</h5>
                    <div
                        class="container col-10 d-flex justify-content-between gap-2 align-items-center  border border-info rounded mb-3">
                        <div class="d-flex col-12 gap-3 align-items-center py-3 px-2">
                            <div class="col-2">
                                <img class="d-block mx-auto col-8 img-fluid"
                                    src="https://buildwithangga.com/themes/front/images/ic_konsultasi.svg" alt="">
                            </div>
                            <div class="col-8 d-flex flex-column">
                                <div class="header-title mb-1"><strong class="fs-5">Grup Diskusi Belajar</strong></div>
                                <p>Bonus dari kami</p>
                            </div>
                            <div class="col-1">
                                <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="container col-10 d-flex justify-content-between gap-2 align-items-center  border border-info rounded mb-3">
                        <div class="d-flex col-12 gap-3 align-items-center py-3 px-2">
                            <div class="col-2">
                                <img class="d-block mx-auto col-8 img-fluid"
                                    src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg" alt="">
                            </div>
                            <div class="col-8 d-flex flex-column">
                                <div class="header-title mb-1"><strong class="fs-5">Sertifikat Kelulusan</strong></div>
                                <p>Bonus dari kami</p>
                            </div>
                            <div class="col-1">
                                <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="container col-10 d-flex justify-content-between gap-2 align-items-center  border border-info rounded mb-3">
                        <div class="d-flex col-12 gap-3 align-items-center py-3 px-2">
                            <div class="col-2">
                                <img class="d-block mx-auto col-8 img-fluid"
                                    src="https://buildwithangga.com/themes/front/images/ic_project.svg" alt="">
                            </div>
                            <div class="col-8 d-flex flex-column">
                                <div class="header-title mb-1"><strong class="fs-5">File Modul</strong></div>
                                <p>Bonus dari kami</p>
                            </div>
                            <div class="col-1">
                                <img class="img-fluid" src="https://buildwithangga.com/themes/front/images/ic_check.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-xl-6 col-lg-8 col-md-10 col-12 mb-3">
            <div class="card p-3">
                <h5 class="text-center pb-2">Pilih Metode Pembayaran</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Via Konfirmasi
                            Admin</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="container-xl ms-1 my-1">
                            <div class="row d-flex justify-content-between">
                                <div class="col-6">
                                    <p class="fs-5 lead justify-content-start"><strong>Harga Kelas</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-5 lead text-end"><small>Rp. 250.000</small></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between">
                                <div class="col-6">
                                    <p class="fs-5 lead justify-content-start"><strong>Kode unik</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-5 lead text-end"><small class="text-success">Rp. 151</small></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between">
                                <div class="col-6">
                                    <p class="fs-5 lead justify-content-start"><strong>Biaya Layanan </strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-5 lead text-end"><small class="text-success">Rp. 5.000</small></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-between">
                                <div class="col-6">
                                    <p class="fs-5 lead justify-content-start"><strong>Total Biaya</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="fs-5 lead text-end"><small class="text-success">Rp. 255.151</small></p>
                                </div>
                            </div>
                            <form action="/checkout/{{ $course->id }}/confirm">
                                <button class="btn btn--gradient d-block mx-auto btn-submit" id="btn_confirm" type="submit" data-link="{{ $data }}" onclick="bukaTabBaru()">
                                    <span class="text">Bayar Sekarang</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        function bukaTabBaru() {
            let link = document.getElementById('btn_confirm').dataset.link;
            window.open(link, "_blank");
        }
    </script>
@endsection


