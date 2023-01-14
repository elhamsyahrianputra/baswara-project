<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Home | Edison</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
        <script src="https://www.youtube.com/player_api"></script>
        <link rel="stylesheet preload" as="style" href="css/preload.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.css" />
        <!-- <link rel="stylesheet" href="css/course.css" /> -->
        <link rel="stylesheet" href="css/landingpage.css"/>
    </head>
    <body style="background-color: #e9e7ea;">
        <div class="container d-flex align-items-center" style="height: 100vh;" >
            <div class="row justify-content-center">
            <div class="col-md-8 px-4 py-4" style="background-color: #FFFFFF;">
                <section class="registration" id="price">
                    <div class="underlay"></div>
                    <div class="registration_content container d-flex flex-column align-items-center">
                        <h2 class="registration_header">Registration</h2>
                        <p class="registration_text text-center">
                            The intensive course is now open, which starts on January 8. You will receive detailed information on admission by
                            mail immediately after registration
                        </p>
                        <p class="registration_price h5">Price: $320 all course/ $ 30 per month</p>
                        <p class="registration_text">our consultant will contact you to clarify further details</p>
                        <form class="registration_form flex-column align-items-center" action="/signup" method="post" data-type="registration">
                            @csrf
                            <input class="field required" type="text" data-type="email" placeholder="Email" name="email"/>
                            <input class="field required" type="text" placeholder="Name" name="name"/>
                            <input class="field required" type="password" placeholder="Password" name="password"/>
                            <button class="btn btn--gradient d-block mx-auto" type="submit">
                                <span class="text">Registration</span>
                            </button>
                        </form>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="/login"
                            class="link-warning">Login</a></p>
                    </div>
                </section>
            </div>
            </div>
        </div>
    </body>
</html>