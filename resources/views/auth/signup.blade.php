<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dist/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('dist/css/style.css') }}">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <title>{{ $title }}</title>

</head>

<body id="page-top">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="/signup">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="InputEmail" placeholder="Email Address" name="email"
                                        value="{{ old('email') }}" autocomplete="off" autofocus>
                                    @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user @error('name') is-invalid @enderror"
                                        id="Fullname" placeholder="Fullname" name="name" value="{{ old('name') }}"
                                        autocomplete="off">
                                    @error('name')
                                    <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="InputPassword" placeholder="Password" name="password" autocomplete="off">
                                    @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Sign Up
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Sign Up with Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <span class="small">Have an account? </span>
                                <a href="/login" class="small">Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('dist/js/sb-admin-2.min.js') }}></script>

    <!-- Page level plugins -->
    <script src={{ asset('vendor/chart.js/Chart.min.js') }}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('dist/js/demo/chart-area-demo.js') }}></script>
    <script src={{ asset('dist/js/demo/chart-pie-demo.js') }}></script>

</body>

</html>