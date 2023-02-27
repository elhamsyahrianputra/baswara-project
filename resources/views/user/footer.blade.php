<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2 class="registration_header">Login</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h5 class="registration_header">Baswara Learning Academy</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <lottie-player
                            src="lottie/login.json"
                            background="transparent"
                            speed="1"
                            style="width: 100%; height: 100%"
                            loop
                            autoplay
                        ></lottie-player>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center">
                        <div class="col">
                            <div class="row">
                                <form class="registration_form" action="#" method="post" data-type="login">
                                    <!-- <input class="field required" type="text" data-type="email" placeholder="Email" /> -->
                                    <input class="field required" type="text" placeholder="Username/Email" />
                                    <input class="field required" type="password" placeholder="Password" />
                                </form>
                            </div>
                            <div class="row mt-3 hero_content-action flex-wrap justify-content-center">
                                <!-- <div class="col-sm-6 d-flex justify-content-end"> -->
                                    <button class="btn btn--gradient" type="submit" onclick="">
                                        <span class="text">Masuk</span>
                                    </button>
                                <!-- </div> -->
                                <!-- <div class="col-sm-6 d-flex justify-content-start"> -->
                                <a class="btn btn--highlight" href="#" data-bs-toggle="modal" data-bs-target="#registration" data-bs-dismiss="modal">
                                    <span class="text">Daftar</span>
                                </a>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registrationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h2 class="registration_header">Registration</h2>
                    </div>
                </div>
                <div class="row">
                    <p class="registration_text d-flex justify-content-center text-center">
                        The intensive course is now open, which starts on January 8. 
                        You will receive detailed information on admission by mail immediately after registration
                    </p>
                </div>
                <div class="row">
                    <p class="registration_price h5 d-flex justify-content-center">Price: $320 all course/ $ 30 per month</p>
                </div>
                <div class="row">
                    <p class="registration_text d-flex justify-content-center">our consultant will contact you to clarify further details</p>
                </div>
                <div class="row">
                    <form class="registration_form d-flex flex-column align-items-center" action="#" method="post" data-type="registration">
                        <input class="field required" type="text" data-type="email" placeholder="Email" />
                        <input class="field required" type="text" placeholder="Name" />
                        <input class="field required" type="password" placeholder="Password" />
                        <div class="wrapper">
                            <div class="checkbox">
                                <input type="checkbox" name="dataProcessing" id="dataProcessing" checked>
                                <label for="dataProcessing">I agree to the terms of data processing. </label>
                            </div>
                        </div>
                        <button class="btn btn--gradient" type="submit">
                            <span class="text">Registration</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- homepage content end -->
<footer class="footer">
            <div class="container">
                <div class="footer_wrapper d-sm-flex flex-wrap flex-lg-nowrap justify-content-lg-between">
                    <div class="footer_block col-sm-6 col-lg-auto" data-order="1">
                        <div class="logo logo--footer">
                            <a class="d-inline-flex align-items-center" href="index.html">
                                <span class="logo_picture">
                                    <img src="/dist/img/logo.png" alt="Baswara" />
                                </span>
                                <span class="text">
                                    <span class="brand">Baswara</span>
                                    <span class="text_secondary">Learning Academy</span>
                                </span>
                            </a>
                        </div>
                        <p class="footer_block-text">
                            Belajar bersama kami dimanapun dan kapanpun.
                        </p>
                        <ul class="footer_block-socials d-flex align-items-center">
                            <li class="footer_block-socials_item">
                                <a class="link" href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li class="footer_block-socials_item">
                                <a class="link" href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li class="footer_block-socials_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="wrapper d-flex flex-column">
                            <a class="link link--contacts text text--sm d-inline-flex align-items-center" href="mailto:baswaraacademy@gmail.com">
                                <i class="icon-envelope icon"></i>
                                baswaraacademy@gmail.com
                            </a>
                            <a class="link link--contacts text text--sm d-inline-flex align-items-center" href="tel:+123456789">
                                <i class="icon-phone-solid icon"></i>
                                +1-202-555-0190
                            </a>
                        </div>
                    </div>
                    <div class="footer_block col-sm-6 col-lg-auto" data-order="2">
                        <h5 class="footer_block-header">Information:</h5>
                        <ul class="footer_block-nav">
                            <li class="footer_block-nav_item">
                                <a class="link" href="about.html">About This Project</a>
                            </li>
                            <li class="footer_block-nav_item">
                                <a class="link" href="contacts.html">Contact Us</a>
                            </li>
                            <li class="footer_block-nav_item">
                                <a class="link" href="courses.html">All Courses</a>
                            </li>
                            <!-- <li class="footer_block-nav_item">
                                <a class="link" href="journal.html">From the Blog</a>
                            </li>
                            <li class="footer_block-nav_item">
                                <a class="link" href="library.html">Media Library</a>
                            </li> -->
                            <li class="footer_block-nav_item">
                                <a class="link" href="faq.html">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer_block col-sm-6 col-lg-auto m-sm-0" data-order="3">
                        <h5 class="footer_block-header">Popular Courses:</h5>
                        <ul class="footer_block-list">
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">Data Science Fundamentals CS with Python and SQL</a>
                            </li>
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">AWS Certified Developer - Associate 2020</a>
                            </li>
                            <li class="footer_block-list_item d-flex align-items-baseline">
                                <span class="marker"></span>
                                <a class="link" href="course.html">How to Draw From Beginner to Master</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer_block col-sm-6 col-lg-auto" data-order="4">
                        <h5 class="footer_block-header">Instagram:</h5>
                        <ul class="footer_block-instagram d-grid">
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                            <li class="footer_block-instagram_item">
                                <a class="link" href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source data-srcset="/dist/img/placeholder.jpg" srcset="/dist/img/placeholder.jpg" />
                                        <img class="lazy" data-src="/dist/img/placeholder.jpg" src="/dist/img/placeholder.jpg" alt="media" />
                                    </picture>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_secondary">
                <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-sm-between">
                    <a class="footer_secondary-scroll" id="scrollToTop" href="#">
                        <i class="icon-angle-up icon"></i>
                    </a>
                    <p class="footer_secondary-copyright">Copyright @ <span id="currentYear"></span> Baswara Learning Academy</p>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="/dist/js/common.js"></script>
        <script src="/dist/js/reviews.min.js"></script>
        <script src="/dist/js/courses.min.js"></script>
    </body>
</html>

