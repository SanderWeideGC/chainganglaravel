<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITTY</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="img/favicon.ico">
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
                <img src="img/logo.png" alt="">

            </a>
        </div>

            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="./about-us">About us</a></li>
                            <li><a href="./schedule">Schedule</a></li>
                            <li><a href="./recipes">Recipes</a></li>
                            <li><a href="./forum">Forum</a></li>
                            <li><a href="./blog">Blog</a></li>
                            <li><a href="./gallery">Gallery</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<!-- body -->
<?php echo $__env->yieldContent("body"); ?>

<!-- Cta Section Begin -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-text">
                    <h3>Get Started Today</h3>
                    <p>New student special! 10% off for our new member!</p>
                </div>
                <a href="contact" class="primary-btn cta-btn">book now</a>
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
                        <a href="#"><img src="img/logo.png" alt=""></a>
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
<?php echo $__env->yieldContent("script"); ?>
</body>

</html><?php /**PATH C:\laragon\www\Chaingang\resources\views/layout.blade.php ENDPATH**/ ?>