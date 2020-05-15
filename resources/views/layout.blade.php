<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITTY</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="icon" href="/img/favicon.ico">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="logo">
            <a href="./">
                <img src="/img/logo.png" alt="">

            </a>
        </div>

            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/schedule">Schedule</a></li>
                            <li><a href="/recipes">Recipes</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/gallery">Gallery</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <div class="float-right">
                         
                        <!-- Authentication Links -->
                        @guest
                                <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                    <a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                    @if(Auth::user()->usertype == 'admin')
                                        <a class="btn btn-success" href="/dashboard">Dashboard</a>
                                    @endif
                                    <a class="btn btn-warning" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
    </div>
</header>
<!-- Header End -->

<!-- body -->
@yield("body")

<!-- Cta Section Begin -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <h2>Calculate your BMI</h2>
                    <p class="long-details">
                        Our BMI calculator makes it a piece of cake for
                        you to find your number. However, please
                        remember that BMI is a rough estimation. The
                        result can be somewhat misleading for
                        individuals who are well muscled (such as body
                        builders), or for those who have lost a
                        significant amount of muscle (such as the
                        elderly).
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4></h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <input
                                    id="heightBMI"
                                    type="number"
                                    placeholder="Height in meters"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input
                                    id="weightBMI"
                                    type="number"
                                    placeholder="Weight in Kg"
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p style="color: white">
                                    Normal (18,5 - 24,9)
                                </p>
                                <p style="color: white">
                                    Your BMI:
                                    <span id="resultBMI"></span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a
                                    href="#"
                                    class="primary-btn about-btn"
                                    id="calculateBMI"
                                    >Calculate</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End -->


<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-logo-item">
                    <div class="f-logo">
                        <a href="#"><img src="/img/logo.png" alt=""></a>
                    </div>
                    <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                        in television advertising continues.</p>
                    <div class="social-links">
                        <h6>Follow us</h6>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="footer-widget">
                    <h5>Get Info</h5>
                    <ul class="footer-info">
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>Phone:</span>
                            (12) 345 6789
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span>Email:</span>
                            info@fitty.com
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address</span>
                            J.F Kennedylaan 49, Doetinchem
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ct-inside">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="" target="_blank">Lucas, Zelim, Sander en Basir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/BMI-calculator.js"></script>

@yield("script")
</body>

</html>