<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | Edison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js"
        async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="css/preload.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.css" />
    <!-- <link rel="stylesheet" href="css/course.css" /> -->
    <link rel="stylesheet" href="css/landingpage.css" />
</head>

<body style="background-color: #e9e7ea;">
    <div class="container d-flex align-items-center" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-8 px-4 py-4" style="background-color: #FFFFFF;">
                <section class="registration" id="price">
                    <div class="underlay"></div>
                    <div class="registration_content container d-flex flex-column align-items-center">
                        <h2 class="registration_header">Login</h2>
                        <h5 class="registration_header">Baswara Learning Academy</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <lottie-player src="lottie/login.json" background="transparent" speed="1"
                                    style="width: 100%; height: 100%" loop autoplay></lottie-player>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex align-items-center">
                                <div class="col">
                                    <form class="registration_form" action="/login" method="post" data-type="login">
                                        <div class="row">

                                            @csrf
                                            <input class="field required my-2" type="text" placeholder="Email"
                                                name="email" />
                                            <input class="field required my-2" type="password" placeholder="Password"
                                                name="password" />
                                        </div>
                                        <div class="row mt-3 hero_content-action flex-wrap justify-content-center">
                                            <button class="btn btn--gradient" type="submit">
                                                <span class="text">Masuk</span>
                                            </button>
                                            <!-- <a class="btn btn--highlight" href="#" data-bs-toggle="modal" data-bs-target="#registration" data-bs-dismiss="modal">
                                            <span class="text">Daftar</span>
                                        </a> -->
                                        </div>
                                    </form>
                                    <span class="small fw-bold mt-2 pt-1 mb-0 d-flex justify-content-center">Don't have an account? <a href="/signup"
                                            class="link-warning ms-1"> Register</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="js/common.js"></script>
    <script src="js/reviews.min.js"></script>
    <script src="js/courses.min.js"></script>
</body>

</html>