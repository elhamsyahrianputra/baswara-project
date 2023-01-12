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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="/login">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="InputUsername"
                                                placeholder="Enter Email Address..." name="email"
                                                value="{{ old('username') }}" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="InputPassword" placeholder="Enter Password..." name="password"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="remember_me">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block my-2">
                                            Login
                                        </button>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <hr>
                                        <a href="/" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <span class="small">Don't have an account?</span> <a class="small"
                                            href="/signup">Create an
                                            Account!</a>
                                        <span class="d-block text-danger mt-3 font-weight-bold">
                                            @error('error')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
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