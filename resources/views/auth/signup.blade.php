<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Daftar | Baswara</title>
    <link rel="stylesheet" href="{{ asset('mazer/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/css/pages/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/images/logo/favicon.svg" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('mazer/images/logo/favicon.png" type="image/png') }}">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ asset('dist/img/logo/full_logo.png') }}" alt="Baswara Logo" style="height: 100px"></a>
                    </div>
                    <h1 class="auth-title">Daftar</h1>
                    <p class="auth-subtitle mb-3">Dapatkan pembelajara BIPA terbaik bersama kami.</p>

                    <form action="/signup" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="name" class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="Nama" autofocus>
                            <div class="form-control-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Surel">
                            <div class="form-control-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4 @error('password') is-invalid @enderror">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Kata Sandi">
                            <div class="form-control-icon">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4 @error('birthdate') is-invalid @enderror">
                            <input type="date" name="birthdate" class="form-control form-control-xl">
                            <div class="form-control-icon">
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                        </div>
                        <button class="btn btn--gradient btn-block btn-lg shadow-lg mt-3">
                            <span class="text">Daftar</span>
                        </button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-6">
                        <p class='text-gray-600'>
                            Sudah memiliki akun?
                            <a href="/login"
                                class="font-bold">Masuk.</a>
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>
    </div>
</body>

</html>