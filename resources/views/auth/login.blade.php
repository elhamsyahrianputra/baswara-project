<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Baswara | Login</title>
    <link rel="stylesheet" href="mazer/css/main/app.css">
    <link rel="stylesheet" href="mazer/css/pages/auth.css">
    <link rel="stylesheet" href="dist/css/style.css">

    <link rel="stylesheet" href="mazer/extensions/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="shortcut icon" href="mazer/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="mazer/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ asset('dist/img/logo/full_logo.png') }}" alt="Baswara Logo" style="height: 100px"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn--gradient btn-block btn-lg shadow-lg mt-5">
                            <span class="text">Log in</span>
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="/registration"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="#">Forgot password?</a>.</p>
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