@extends('layouts.dashboard.main')

@section('content')
<div class="container-sm-2 p-5 m-3">
    <h1 class="display-4">Selamat datang <?php echo "user"; ?></h1>
    <p class="lead">Mari Belajar bersama kami! Kapanpun dan dimanapun!</p>
    <hr class="my-4">
    <div class="container-sm-2 rounded bg-light p-3">
        <h2 class="lead my-2">Daftar Langganan</h4>
            <div class="container-sm-2 rounded p-3" style="border: solid 1px lightgray;">
                <div class="row">
                    <div class="col-md-1 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-pen-to-square fa-2x"></i>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <p class="lead-2">Anda belum memiliki paket langganan apapun. Silahkan pilih paket berlangganan untuk memulai langkah pertama untuk membuat sesuatu yang luar biasa</p>
                    </div>
                    <div class="col-md-2 offset-md-1 d-flex align-items-center justify-content-center">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </div>
                </div>
            </div>

    </div>
</div>
</div>

<!-- Dashboard -->
<div class="container">
<div class="row">
    <div class="col-md-12 my-3">
        <div class="card" id="card">
            <div class="card-header d-flex align-items-center">
                <i class="fa-solid fa-pen-to-square fa-1x mx-1"></i>
                <p class="lead-2 my-auto">Aktivitas Belajar</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 my-2">
                    <div class="card-body rounded" style="border: solid 1px lightgrey;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="col-md-11 pe-2">
                                <h2 class="lead">Mengenal Huruf Alfabet</h2>
                                <p class="card-text lead-2">Alfabet adalah sebuah sistem tulisan yang berdasarkan lambang fonem vokal dan konsonan. Kata alfabet diambil dari bahasa Yunani, dari dua huruf pertama tulisan mereka yaitu alfa dan beta. Alfabet berbeda dengan abjad, yang biasanya tidak memiliki lambang vokal, dan berbeda dengan abugida dan aksara silabis, yang setiap hurufnya melambangkan fonem namun dalam bentuk suku kata.</p>
                                <p class="card-text lead-2">By <strong>Baswara Learning Academy</strong></p>
                            </div>
                            <div class="col-md-1 ms-auto d-grid gap-2">
                                <a href="/learning" class="btn btn-success"><i class="fa-solid fa-arrow-right fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 my-2">
                    <div class="card-body rounded" style="border: solid 1px lightgrey;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="col-md-11 pe-2">
                                <h2 class="lead">Mata Pelajaran</h2>
                                <p class="card-text lead-2">(Deskripsi) Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ratione praesentium porro voluptates, veritatis doloribus? Doloribus illo soluta beatae ut?</p>
                                <p class="card-text lead-2">By Author</p>
                            </div>
                            <div class="col-md-1 ms-auto d-grid gap-2">
                                <a href="/learning" class="btn btn-success"><i class="fa-solid fa-arrow-right fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>    
@endsection