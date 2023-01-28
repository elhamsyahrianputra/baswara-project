@extends('layouts.main')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('style')
@endsection

@section('content')
<div class="container-sm-2 p-5 m-3">
    <h1 class="display-4">Selamat datang Elham</h1>
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

            @foreach ( auth()->user()->courses  as $course)
            <div class="row justify-content-center">
                <div class="col-md-12 my-2">
                    <div class="card-body rounded" style="border: solid 1px lightgrey;">
                        <div class="d-flex flex-row align-items-center">
                            <div class="col-md-11 pe-2">
                                <h2 class="lead">{{ $course->name }}</h2>
                                <p class="card-text lead-2">{{ $course->description }}</p>
                                <p class="card-text lead-2">By <strong>{{ $course->author->name }}</strong></p>
                            </div>
                            <div class="col-md-1 ms-auto d-grid gap-2">
                                <a href="/learning" class="btn btn-success"><i class="fa-solid fa-arrow-right fa-2x"></i></a>
                            </div>
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
@endsection