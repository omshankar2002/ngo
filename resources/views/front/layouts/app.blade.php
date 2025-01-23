<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>letscontribute</title>
    <meta name="author" content="Donat">
    <meta name="description" content="Donat - Charity & Donation HTML Template">
    <meta name="keywords" content="Donat - Charity & Donation HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets-front/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets-front/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets-front/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets-front/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets-front/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets-front/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets-front/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets-front/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets-front/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets-front/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets-front/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets-front/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets-front/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-front/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets-front/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;display=swap"
        rel="stylesheet">

    @include('front.layouts.styles')

</head>


<body>
    <!--==============================
     Preloader
  ==============================-->
    <!-- <div class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader">
                Donat
                <span class="loading-text">Donat</span>
            </span>
        </div>
    </div> -->
 

    <!--==============================
    Mobile Menu
    ============================== -->

    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Donat"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="#">About US</a></li>
                            <li><a href="#">Mission & Vision</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="#">Food For All</a></li>
                            <li><a href="#">Education For All</a></li>
                            <li><a href="#">Helping Underprivileged</a></li>
                            <li><a href="#">Respecting War Widows</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Volunteer</a>
                        <ul class="sub-menu">
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Become A Volunteer</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Team</a>
                        <ul class="sub-menu">
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Advisory Board</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Gallery</a>
                    </li>

                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Sign In</a>
                        <ul class="sub-menu">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <!--==============================
    Header Area
    ==============================-->
    <header class="th-header header-layout2">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container">
                <div class="menu-area">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/img/logo.svg" alt="Donat"></a>
                    </div>
                    <div class="menu-area-wrap">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Mission & Vision</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Food For All</a></li>
                                        <li><a href="#">Education For All</a></li>
                                        <li><a href="#">Helping
                                                Underprivileged</a></li>
                                        <li><a href="#">Respecting War Widows</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Volunteer</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Volunteers</a></li>
                                        <li><a href="#">Become A Volunteer</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Advisory Board</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Gallery</a>
                                </li>

                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Sign In</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="header-button">
                        <a href="#" class="th-btn style3 d-xl-block d-none"><i
                                class="fas fa-heart me-2"></i> Donate Now</a>
                        <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('main_content')
    </main>

    <!--==============================
 Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout2">
        <div class="shape-mockup footer-bg-shape2-1 jump" data-left="0" data-top="0">
            <div class="color-masking2">
                <div class="masking-src"
                    data-mask-src="{{ asset('assets-front/img/shape/footer-bg-shape2-1.png') }}"></div>
                <img src="{{ asset('assets-front/img/shape/footer-bg-shape2-1.png') }}" alt="img">
            </div>
        </div>
        <div class="shape-mockup footer-bg-shape2-2 jump-reverse" data-right="0" data-bottom="0">
            <div class="color-masking">
                <div class="masking-src"
                    data-mask-src="{{ asset('assets-front/img/shape/footer-bg-shape2-2.png') }}"></div>
                <img src="{{ asset('assets-front/img/shape/footer-bg-shape2-2.png') }}" alt="img">
            </div>
        </div>
        <div class="widget-area space-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="{{ asset('assets/img/logo-white.svg') }}"
                                            alt="Donat"></a>
                                </div>
                                <p class="about-text mb-3">LetsContribute is a non-profit organization dedicated to
                                    making a difference by empowering communities and driving positive change.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">News/Media</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Contact</h3>
                            <div class="menu-all-pages-container">
                                <div class="info-card style2">
                                    <div class="box-icon bg-theme">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Call us any time:</p>
                                        <h4 class="box-title"><a href="tel:8383888592">+91 838 388 8592</a></h4>
                                    </div>
                                </div>
                                <div class="info-card style2">
                                    <div class="box-icon bg-theme2">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Email us any time:</p>
                                        <h4 class="box-title"><a href="mailto:lestcontribute@gmail.com">letscontribute@gmail.com</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title">Newsletter</h3>
                            <p class="footer-text mb-4">Subscribe to Our Newsletter. Regular inspection
                                and feedback mechanisms</p>
                            <form class="newsletter-form">
                                <div class="form-group style-dark">
                                    <input class="form-control" type="email" placeholder="Enter your email"
                                        required="">
                                </div>
                                <button type="submit" class="th-btn style5"><i
                                        class="fas fa-paper-plane"></i></button>
                            </form>
                            <div class="th-social style6">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                                <a href="https://www.vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap bg-theme text-center">
            <div class="container">
                <p class="copyright-text">Copyright © 2024. All Rights Reserved. Developed By<a
                        href="https://www.wamexs.com/" target="_blank"> WEB & MARKETING EXPERTS LLC</a></p>
            </div>
        </div>
    </footer>


    <!--********************************
        Code End  Here
******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


@include('front.layouts.scripts_footer')
</body>

</html>
