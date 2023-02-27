{{-- {{ dd($user) }} --}}
@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('/mazer/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/mazer/css/pages/simple-datatables.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Hello {{ auth()->user()->name }}!</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        My Profile
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="container col-lg-4 col-md-8 col-12 d-flex justify-content-center">
                                    @if (auth()->user()->avatar_url != 'default-avatar.jpg')
                                        <img class="img-fluid rounded-circle" src="/storage/{{ auth()->user()->avatar_url }}"
                                            style="max-height: 300px; min-height:300px; aspect-ratio:1/1; object-fit:cover;" alt="">
                                    @else
                                        <img class="img-fluid rounded-circle" src="dist/img/avatar_default.jpg"
                                            style="max-height: 300px; min-height:300px; object-fit:cover;" alt="">
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="col-12 fs-4 lead">
                                <div class="container col-9">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-10">
                                            <h4> Nama </h4>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-10">
                                            <h4>About Me </h4>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>{{ auth()->user()->about_me}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-10">
                                            <h4>Email </h4>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-10">
                                            <h4>Gender </h4>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>{{ auth()->user()->gender == 1 ? 'Laki-Laki' : 'Perempuan' }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-10">
                                            <h4>Tanggal Lahir </h4>
                                        </div>
                                        <div class="col-1">:</div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>{{ auth()->user()->birthdate}}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-2">
                                    <div class="col d-flex justify-content-end">
                                        <a class="btn btn-outline-warning"
                                            href="/profile/{{auth()->user()->id}}/edit">
                                            <i class="bi bi-pencil-square"></i>
                                            <span>Edit</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="chart-profile-visit"></div> --}}
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection

@section('script')
    <!-- DataTables -->
    <script src="{{ asset('/mazer/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('/mazer/js/pages/simple-datatables.js') }}"></script>

    <!-- SweetALert2 -->
    <script src="{{ asset('/mazer/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/mazer/js/pages/sweetalert2.js') }}"></script>

    <!-- Init SweetAlert Confirm Dialogue -->
@endsection
