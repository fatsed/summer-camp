<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>summer camp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="icon" href="./assets/img/icon/icons8-camping-tent-100.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">--}}
    <!-- Template Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">
</head>
<style>
    /*.wow{*/
    /*    margin:0 10px;*/
    /*}*/
</style>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1 style="font-size: 20px; width: 151px;">summer camp<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Camp benefits</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#tour">Tourguide</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            @auth
            <a class="btn-book-a-table">{{auth()->user()->name}}{{auth()->user()->family}}</a>
            <img class="rounded-circle" src="{{auth()->user()->picture}}" alt="" style="width:83px;height:65px;">
            <form action='{{route("logout")}}' method="post">
                @csrf
                <button class="btn-book-a-table" style="border: 0px">
                    logout
                </button>
            </form>
            @endauth

            @guest
            <a class="btn-book-a-table" href="{{route('login')}}">Login</a>
            <a class="btn-book-a-table" href="{{route('register')}}">Register</a>
            @endguest
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between gy-5 anima">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">our summer camp<br>starts in</h2>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Book a camp</a>
                        <a href="https://www.youtube.com/watch?v=IQzfprW0Yl0"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch
                                Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- ======= About Section ======= -->
    <main id="main">
        <section class="why">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-11 "><img class="why-img img" src="./assets/img/ff.png" alt=""></div>
                    <div class="col-lg-6 col-md-11 text ">
                        <p class="title-why">Summer camp is about accomplishment and growth. It is the counselors' job
                            to help these things happen not to just keep the kids busy.</p>
                        <h3 class="pp">
                            #summercampcounselors
                        </h3>
                        <button class="btn-orang">Register</button>
                        <button class="btn-white">Join</button>
                    </div>
                </div>
            </div>
        </section>
      @include('layouts.pages.aboutus')
        <!-- End About Section -->
        <!-- activites -->
        @include('layouts.pages.activite')

        <!--  -->
        <!-- why -->
        <section class="why">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-12 listss">
                        <div class="tit-why">
                            <p class="title-why">Why choose our camp</p>
                            <p class="title-why">Our professionals will help your children to</p>
                        </div>
                        <ul class="list-why">
                            <li class="list-item">
                                <div>
                                    <img src="./assets/img/icon/icons8-tall-person-60.png" alt="" srcset="">
                                    <span>Build healthy lifestyle habits in childhood</span>
                                </div>
                            </li>
                            <li class="list-item">
                                <div>
                                    <img src="./assets/img/icon/icons8-person-pointing-48.png" alt="" srcset="">
                                    <span>Develop self esteem and a positive attitude</span>
                                </div>
                            </li>
                            <li class="list-item">
                                <div>
                                    <img src="./assets/img/icon/icons8-human-50 (1).png" alt="" srcset="">
                                    <span>Improve mental stimulation & physical activity</span>
                                </div>
                            </li>
                            <li class="list-item">
                                <div>
                                    <img src="./assets/img/icon/icons8-businesswoman-48 (1).png" alt="" srcset="">
                                    <span>Build a new type of friendship & relationship</span>
                                </div>
                            </li>
                            <li class="list-item">
                                <div>
                                    <img src="./assets/img/icon/icons8-tall-person-60.png" alt="" srcset="">
                                    <span>Experience lots of fun and entertainment</span>
                                </div>
                            </li>
                        </ul>
                        <div>
                            <P></P>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-12 ">
                        <img class="why-img img" src="./assets/img/4.png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end-why -->
        <!--  -->
        <!-- ======= Why Us Section ======= -->
        @include('layouts.pages.article')
        @include('layouts.pages.news')
        <!-- ======= Stats Counter Section ======= -->
        <!-- End Stats Counter Section -->
        <!-- ======= Menu Section ======= -->
        @include('layouts.pages.travel')
        <!-- End Menu Section -->
        <!-- ======= Events Section ======= -->

        @include('layouts.pages.event')
        <!-- End Events Section -->
        <!-- ======= tourguid Section ======= -->
        @include('layouts.pages.tourguide')
        <!-- End tourguid Section -->
        <!-- ======= Book A camp Section ======= -->
{{--        <section id="book-a-table" class="book-a-table">--}}
{{--            <div class="container" data-aos="fade-up">--}}
{{--                <div class="section-header">--}}
{{--                    <h2>Book A Camp</h2>--}}
{{--                    <p>Book <span>Your camp</span> With Us</p>--}}
{{--                </div>--}}
{{--                <div class="row g-0">--}}
{{--                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/slider\ \(4\).jpg);"--}}
{{--                        data-aos="zoom-out" data-aos-delay="200"></div>--}}
{{--                    <div class="col-lg-9 d-flex align-items-center reservation-form-bg xpo">--}}
{{--                        <form action="https://formspree.io/f/xbjekjyg" method="post" role="form" class=""--}}
{{--                            data-aos="fade-up" data-aos-delay="100">--}}
{{--                            <div class="row gy-4">--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <input type="text" name="name" class="form-control wow" id="name"--}}
{{--                                        placeholder="Your Name" data-rule="minlen:4"--}}
{{--                                        data-msg="Please enter at least 4 chars">--}}
{{--                                    <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <input type="email" class="form-control wow" name="email" id="email"--}}
{{--                                        placeholder="Your Email" data-rule="email"--}}
{{--                                        data-msg="Please enter a valid email">--}}
{{--                                    <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <input type="text" class="form-control wow" name="phone" id="phone"--}}
{{--                                        placeholder="Your Phone" data-rule="minlen:4"--}}
{{--                                        data-msg="Please enter at least 4 chars">--}}
{{--                                    <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mt-3">--}}
{{--                                    <input type="number" class="form-control wow" name="people" id="people"--}}
{{--                                        placeholder="# of people" data-rule="minlen:1"--}}
{{--                                        data-msg="Please enter at least 1 chars">--}}
{{--                                    <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mt-3">--}}
{{--                                <textarea class="form-control wow" name="message" rows="5" placeholder="Message"></textarea>--}}
{{--                                <div class="validate"></div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center btn-book-a-table"><button class="btn-orang" type="submit">Book</button></div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- End Reservation Form -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- End Book A camp Section -->
        <!-- ======= Gallery Section ======= -->
        @include('layouts.pages.gallery')
{{--        <!-- End Gallery Section -->--}}
        <!-- ======= Contact Section ======= -->
        @include('layouts.pages.contactUs')
{{--        <!-- End Contact Section -->--}}
    </main>
    <!-- End #main -->
    <!-- ======= Footer =======-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022 - US<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/jquery-3.6.1.min.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>