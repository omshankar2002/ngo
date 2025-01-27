@extends('front.layouts.app')

@section('main_content')
    <!--==============================
            Hero Area
            ==============================-->
    <div class="th-hero-wrapper hero-3" id="hero">
        <div class="shape-mockup hero-shape-3-1 d-lg-block d-none" data-top="20%" data-left="50%">
            <div class="color-masking shake">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/hero/hero-bg-shape2-3.png') }}"></div>
                <img src="{{ asset('assets-front/img/hero/hero-bg-shape2-3.png') }}" alt="shape">
            </div>
        </div>
        <div class="shape-mockup hero-shape-3-2 jump" data-top="25%" data-left="5%">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/hero/hero-bg-shape2-1.png') }}">
                </div>
                <img src="{{ asset('assets-front/img/hero/hero-bg-shape2-1.png') }}" alt="shape">
            </div>
        </div>
        <div class="shape-mockup hero-shape-3-3 jump" data-bottom="0" data-left="-2%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/shape/hand-shape3.png') }}"></div>
                <img src="{{ asset('assets-front/img/shape/hand-shape3.png') }}" alt="shape">
            </div>
        </div>
        @foreach($slider as $slide) 
        <div class="hero-bg-3-1" data-bg-src="{{ asset('uploads/'.$slide->photo) }}"
            data-mask-src="{{ asset('assets-front/img/hero/hero-bg-shape3-1.png') }}"></div>
        <div class="container">
            <div class="row gx-40 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-style3">
                        <span class="sub-title after-none">{{ $slide->heading }}</span>
                        <h1 class="hero-title">
                            <span class="title1">Donate For A</span>
                            <span class="title2">Better <span class="text-theme2 d-inline-block">World</span></span>
                        </h1>
                        <p class="hero-text">{!! $slide->text !!}</p>
                        <div class="btn-wrap">
                            <a href="{{ $slide->button_link }}" class="th-btn">{{ $slide->button_text }}<i
                                    class="fa-solid fa-arrow-up-right ms-2"></i></a>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style3 popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!--======== / Hero Section ========-->

    <!--==============================
        Feature Area
        ==============================-->
    <section class="feature-area-1 position-relative space-bottom">
        <div class="feature-bg-wrap" data-bg-src="{{ asset('assets-front/img/bg/gray-bg2.png') }}"
            data-mask-src="{{ asset('assets-front/img/bg/feature-bg-mask-1.png') }}">
            <div class="feature-bg-shape1-1"></div>
        </div>
        <div class="container">
            <div class="row gy-30 gx-30 justify-content-end">
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('assets-front/img/shape/feature-card-bg-shape1-1.png') }}"
                                alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets-front/img/icon/feature-icon1-1.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Fundraising Trust</h3>
                        <p class="box-text">Stay updated with the latest news, events, and impact stories from our
                            organization. Subscribe to our newsletter.</p>
                        <a class="link-btn style2" href="#">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('assets-front/img/shape/feature-card-bg-shape1-1.png') }}"
                                alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets-front/img/icon/feature-icon1-2.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Charity Donate</h3>
                        <p class="box-text">Stay updated with the latest news, events, and impact stories from our
                            organization. Subscribe to our newsletter.</p>
                        <a class="link-btn style2" href="#">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="{{ asset('assets-front/img/shape/feature-card-bg-shape1-1.png') }}"
                                alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets-front/img/icon/feature-icon1-1.svg') }}" alt="icon">
                        </div>
                        <h3 class="box-title">Treatment Help</h3>
                        <p class="box-text">Stay updated with the latest news, events, and impact stories from our
                            organization. Subscribe to our newsletter.</p>
                        <a class="link-btn style2" href="#">View Details <i
                                class="fa-solid fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        About Area
        ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup about-bg-shape2-1 jump-reverse d-lg-inline-block d-none" data-top="10%" data-right="5%">
            <img src="{{ asset('assets-front/img/shape/heart-shape1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup about-bg-shape3-1 jump" data-bottom="20%" data-right="5%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/shape/about_shape3_1.png') }}">
                </div>
                <img src="{{ asset('assets-front/img/shape/about_shape3_1.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row gy-60 align-items-center">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{ asset('assets-front/img/normal/about_3_1.png') }}" alt="About">
                        </div>
                        <div class="img2 jump">
                            <img src="{{ asset('assets-front/img/normal/about_3_2.png') }}" alt="img">
                        </div>
                        <div class="about-shape3-1 jump-reverse">
                            <div class="color-masking2">
                                <div class="masking-src"
                                    data-mask-src="{{ asset('assets-front/img/shape/about_shape1_1.png') }}"></div>
                                <img src="{{ asset('assets-front/img/shape/about_shape1_1.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="year-counter movingX">
                            <div class="year-counter_number"><span class="counter-number">266300</span>+ Children in
                                Africa Need School</div>
                            <a class="link-btn style2" href="#">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-40">
                        <span class="sub-title after-none before-none"><i class="text-theme far fa-heart"></i> About
                            Us</span>
                        <h2 class="sec-title">Give Time, Change Lives Volunteer Opportunities</h2>
                        <p>Our secure online donation platform allows you to make contribution quickly and safely. Choose
                            from various payment methods and set up one-time or recurring donations with ease. Your support
                            helps us continue our mission.</p>
                    </div>
                    <div class="about-wrap3">
                        <p class="mb-30">Discover the inspiring stories of individuals and communities transformed by our
                            programs. Our success stories highlight the real-life impact of your donations and the
                            resilience of those we help. These narratives showcase the power of compassion & generosity.</p>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="{{ asset('assets-front/img/icon/about-icon3-1.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">32 Years of Experiences</h4>
                                <p class="box-text">Join our monthly giving program to provide consistent support to our
                                    initiatives. Regular contributions,</p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="#" class="th-btn style3 style-radius">About More <i
                                    class="fa-solid fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
        Service Area
        ==============================-->
    <section class="overflow-hidden space" id="service-sec"
        data-bg-src="{{ asset('assets-front/img/bg/gray-bg2.png') }}">
        <div class="shape-mockup service-bg-shape2-1 d-xxl-inline-block d-none" data-bottom="0" data-left="0">
            <img src="{{ asset('assets-front/img/shape/service_bg_shape3_1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row gx-80">
                <div class="col-xl-6">
                    <div class="service-wrap2">
                        <div class="title-area">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our
                                Services</span>
                            <h2 class="sec-title">We’re Helping People i
                                Need Around the World</h2>
                            <p class="sec-text">Discover the inspiring stories of individuals and communities transformed
                                by our programs. Our success stories highlight the real-life impact of your donations and
                                the resilience of those we help. These narratives showcase the power of compassion and
                                generosity.</p>
                        </div>
                        <div class="service-bg-shape2-2">
                            <img src="{{ asset('assets-front/img/service/service-thumb3-1.png') }}" alt="img">
                            <div class="service-bg-shape2-3">
                                <div class="color-masking2">
                                    <div class="masking-src"
                                        data-mask-src="{{ asset('assets-front/img/shape/service_bg_shape3_2.png') }}">
                                    </div>
                                    <img src="{{ asset('assets-front/img/shape/service_bg_shape3_2.png') }}"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row gy-30">
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="{{ asset('assets-front/img/icon/service-icon/service-card-icon1-1.svg') }}"
                                        alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Healthy Foods</a></h3>
                                    <p class="box-text">Share stories and experiences from current volunteers to inspire
                                        others to join. Allow user to sign up for volunteer opportunities.</p>
                                    <a href="#" class="icon-btn"><i
                                            class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="{{ asset('assets-front/img/icon/service-icon/service-card-icon1-2.svg') }}"
                                        alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Education Support</a></h3>
                                    <p class="box-text">Share stories and experiences from current volunteers to inspire
                                        others to join. Allow user to sign up for volunteer opportunities.</p>
                                    <a href="#" class="icon-btn"><i
                                            class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="{{ asset('assets-front/img/icon/service-icon/service-card-icon1-3.svg') }}"
                                        alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="''about'">Medical Help</a></h3>
                                    <p class="box-text">Share stories and experiences from current volunteers to inspire
                                        others to join. Allow user to sign up for volunteer opportunities.</p>
                                    <a href="#" class="icon-btn"><i
                                            class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
        Cta Area
        ==============================-->
    <section class="" id="contact-sec">
        <div class="cta-wrap3 style2 bg-theme-dark">
            <div class="row gx-0">
                <div class="col-xl-7">
                    <div class="cta-content-wrap">
                        <div class="title-area text-xl-start text-center mb-40">
                            <span
                                class="sub-title after-none before-none justify-content-xl-start justify-content-center">Call
                                To Action</span>
                            <h2 class="sec-title text-white">Give Your Big Hand Forever</h2>
                        </div>
                        <form action="https://html.themeholy.com/donat/demo/mail.php" method="POST"
                            class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-6 style-dark">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your name">
                                </div>
                                <div class="form-group col-md-6 style-dark">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email Address...">
                                </div>
                                <div class="form-group col-xxl-4 col-md-6 style-dark">
                                    <input type="number" class="form-control" name="number" id="number"
                                        placeholder="Phone Number...">
                                </div>
                                <div class="form-group col-xxl-4 col-md-6 style-dark">
                                    <input type="number" class="form-control" name="zip" id="zip"
                                        placeholder="Zip Code...">
                                </div>
                                <div class="form-group col-xxl-4 col-xl-12">
                                <button class="th-btn style3 w-100">Get Involved Today</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Donation Area
        ==============================-->
    <section class="space overflow-hidden" id="donation-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title before-none after-none"><i class="far fa-heart text-theme"></i> Lets Start
                            Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="{{ asset('assets-front/img/donation/donation2-1.png') }}" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets-front/img/donation/donation-card-shape2-1.png') }}">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Your Little Help Can Heal Their Helps</a>
                            </h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">45,000</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">60,000</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="{{ asset('assets-front/img/donation/donation2-2.png') }}" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets-front/img/donation/donation-card-shape2-1.png') }}">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Help Children poor Insurance & Medical</a>
                            </h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">45,000</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">60,000</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="{{ asset('assets-front/img/donation/donation2-3.png') }}" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets-front/img/donation/donation-card-shape2-1.png') }}">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Help us touch their lives of these
                                    youths</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">45,000</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">60,000</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="{{ asset('assets-front/img/donation/donation2-4.png') }}" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="{{ asset('assets-front/img/donation/donation-card-shape2-1.png') }}">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Raise Fund for Clean & Healthy Water</a>
                            </h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">45,000</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">60,000</span></span>
                                </div>
                            </div>
                            <a href="blog-details.html" class="th-btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==============================
        Why Choose Us Area
        ==============================-->
    <div class="why-sec-1 overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="row gx-80">
                <div class="col-xl-6">
                    <div class="why-img-box1">
                        <div class="img1">
                            <img src="{{ asset('assets-front/img/normal/why-thumb1-1.png') }}" alt="img">
                        </div>
                        <div class="why-img-shape">
                            <img src="{{ asset('assets-front/img/shape/why_shape1_1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-wrap-1">
                        <div class="title-area mb-25">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Why
                                Choose Us</span>
                            <h2 class="sec-title">Together, We Can Make A Difference</h2>
                            <p>Our secure online donation platform allows you to make contribution quickly and safely.
                                Choose from various payment methods and set up one-time or recurring donations with ease.
                                Your support helps us continue our mission.</p>
                        </div>
                        <div class="progress-bar-wrap">
                            <h3 class="progress-bar_title">Donations</h3>
                            <div class="progress">
                                <div class="progress-bar bg-theme" style="width: 55%;">
                                </div>
                                <div class="progress-value text-theme"><span class="counter-number">55</span>%</div>
                            </div>
                        </div>
                        <div class="progress-bar-wrap mt-20">
                            <h3 class="progress-bar_title">Charity</h3>
                            <div class="progress">
                                <div class="progress-bar bg-theme2" style="width: 85%;">
                                </div>
                                <div class="progress-value text-theme2"><span class="counter-number">85</span>%</div>
                            </div>
                        </div>
                        <div class="mt-40">
                            <div class="row gy-40">
                                <div class="col-sm-6">
                                    <div class="why-feature-grid">
                                        <div class="box-icon bg-theme">
                                            <img src="{{ asset('assets-front/img/icon/why-icon1-1.svg') }}"
                                                alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="box-title">Global Community</h4>
                                            <p class="box-text">Volunteers are the heart of our organization. Join our team
                                                to make a hands.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="why-feature-grid">
                                        <div class="box-icon bg-theme2">
                                            <img src="{{ asset('assets-front/img/icon/why-icon1-2.svg') }}"
                                                alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="box-title">Crowdfunding</h4>
                                            <p class="box-text">Join our monthly giving program to provide consistent
                                                support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-35">
                            <a href="#" class="th-btn">Learn More <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
        Team Area
        ==============================-->
    <section class="space" id="team-sec" data-bg-src="{{ asset('assets-front/img/bg/gray-bg2.png') }}">
        <div class="shape-mockup team-bg-shape3-1 d-xxl-block d-none" data-top="0%" data-left="0%" data-bottom="0"><img
                src="{{ asset('assets-front/img/shape/team_bg_shape3_1.png') }}" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-2 d-xxl-block d-none" data-top="0%" data-right="0%" data-bottom="0">
            <img src="{{ asset('assets-front/img/shape/team_bg_shape3_2.png') }}" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-3 spin d-xxl-block d-none" data-top="15%" data-left="20%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/shape/team_bg_shape3_3.png') }}">
                </div>
                <img src="{{ asset('assets-front/img/shape/team_bg_shape3_3.png') }}" alt="img">
            </div>
        </div>
        <div class="shape-mockup team-bg-shape3-4 jump d-xxl-block d-none" data-top="18%" data-right="10%">
            <img src="{{ asset('assets-front/img/shape/team_bg_shape3_4.png') }}" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-5 spin d-xxl-block d-none" data-bottom="18%" data-left="10%">
            <img src="{{ asset('assets-front/img/shape/team_bg_shape3_5.png') }}" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-6 spin d-xxl-block d-none" data-bottom="10%" data-right="10%">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="{{ asset('assets-front/img/shape/team_bg_shape3_6.png') }}">
                </div>
                <img src="{{ asset('assets-front/img/shape/team_bg_shape3_6.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our
                    Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_1.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Michel Connor</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_2.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Jessica Lauren</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_3.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Daniel Thomas</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_4.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Michel Vetory</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_5.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Emma Mary</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_6.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Alexander Joseph</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_7.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Olivia Patricia</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img src="{{ asset('assets-front/img/team/team_3_8.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title">Ethan David</h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Faq Area
        ==============================-->
    <div class="space overflow-hidden faq-area-2" data-bg-src="{{ asset('assets-front/img/bg/gray-bg2.png') }}">
        <div class="shape-mockup faq-shape2-1 jump-reverse" data-top="20%" data-left="0">
            <img src="{{ asset('assets-front/img/shape/hand-bg-shape2-1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row gy-60 gx-60">
                <div class="col-xl-7">
                    <div class="faq-wrap2">
                        <div class="title-area">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>
                                Frequently Asked Questions</span>
                            <h2 class="sec-title">Have Any Questions For Us?</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What
                                        motivates you to donate to our charity?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available. From
                                            event planning and fundraising to fieldwork and administrative support, there
                                            are many ways to lend your talents. Find the perfect fit for your skills and
                                            interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How
                                        did you hear about our organization?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available. From
                                            event planning and fundraising to fieldwork and administrative support, there
                                            are many ways to lend your talents. Find the perfect fit for your skills and
                                            interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How
                                        frequently do you prefer to volunteer?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available. From
                                            event planning and fundraising to fieldwork and administrative support, there
                                            are many ways to lend your talents. Find the perfect fit for your skills and
                                            interests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="faq-img-box2">
                        <div class="img1">
                            <img src="{{ asset('assets-front/img/normal/faq_2_1.png') }}" alt="img">
                        </div>
                        <div class="faq-img-shape">
                            <img src="{{ asset('assets-front/img/shape/faq-shape2-1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
        Brand Area
        ==============================-->
    <div class="bg-theme-dark overflow-hidden brand-area-1"
        data-mask-src="{{ asset('assets-front/img/shape/brand-bg-shape1.png') }}">
        <div class="container">
            <div class="brand-wrap1 text-center">
                <h3 class="brand-wrap-title text-white">Trusted by over <span class="text-theme2"><span
                            class="counter-number">100</span></span> companies worldwide</h3>
                <div class="swiper th-slider" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5", "spaceBetween": "90"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-1.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-2.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-3.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-4.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-5.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-1.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-2.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-3.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-4.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="blog.html" class="brand-box">
                                <img src="{{ asset('assets-front/img/brand/brand2-5.svg') }}" alt="Brand Logo">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Testimonial Area
        ==============================-->
    <section class="overflow-hidden space overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>Testimonials</span>
                <h2 class="sec-title">What Our Customers Say?</h2>
            </div>
            <div class="testi-slider3 slider-area">
                <div class="swiper th-slider" id="testiSlide3"
                    data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_1.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Brandon Dixon</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_2.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Brooklyn Simmons</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_2.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Michel Connor</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_1.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Ethan David</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_1.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Daniel Thomas</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape"
                                    data-mask-src="{{ asset('assets-front/img/shape/testi-card-bg-shape3-1.png') }}">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('assets-front/img/testimonial/testi_3_2.png') }}"
                                            alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Michel Vetory</h3>
                                        <span class="testi-card_desig">CEO, Founder</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlide3" class="slider-arrow style-border slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide3" class="slider-arrow style-border slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!--==============================
        Blog Area
        ==============================-->
    <section class="blog-area-3 overflow-hidden space-bottom" id="blog-sec"
        data-bg-src="{{ asset('assets-front/img/bg/gray-bg2.png') }}">
        <div class="shape-mockup blog-bg-shape3-1" data-top="0" data-left="0" data-right="0">
            <img src="{{ asset('assets-front/img/shape/testi_bg_shape3_1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="title-area text-lg-start text-center">
                        <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> News &
                            Articles</span>
                        <h2 class="sec-title">Our Latest News & Articles</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="#" class="th-btn style3">View All Post <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets-front/img/blog/blog_1_1.jpg') }}"
                                            alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fas fa-calendar-days"></i>April 12 2024</a>
                                        <a href="#"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="#" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets-front/img/blog/blog_1_2.jpg') }}"
                                            alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fas fa-calendar-days"></i>June 17 2024</a>
                                        <a href="#"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="#" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets-front/img/blog/blog_1_1.jpg') }}"
                                            alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fas fa-calendar-days"></i>March 24 2024</a>
                                        <a href="#"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="#" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets-front/img/blog/blog_1_2.jpg') }}"
                                            alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fas fa-calendar-days"></i>July 05 2024</a>
                                        <a href="#"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="#" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
