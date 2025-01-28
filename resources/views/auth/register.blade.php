@extends('front.layouts.app')

@section('main_content')
 <!--==============================
                    Breadcumb
        ============================== -->
        <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Register</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
                   Login Form
        ============================== -->


    <section class="space">
        <div class="container">
            <div class="row gy-40 gx-80">
                <div class="col-xl-6">
                    <h2 class="title mt-n2 mb-25">Let’s join our community
                        to become a volunteer</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="{{ asset('frontend/assets/img/team/add_team_1_1.png') }}" alt="team">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="{{ asset('frontend/assets/img/team/add_team_1_2.png') }}" alt="team">
                            </div>
                        </div>
                    </div>
                    <h3 class="h5 mt-n2">Volunteer Requirements</h3>
                    <p class="mb-30">Discover the inspiring stories of individuals and communities transformed by our
                        programs. Our success stories highlight the real-life impact of your donations and the resilience of
                        those we help. These narratives showcase the power of compassion and generosity.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="fas fa-check-circle"></i>Making this first true generator simply text</li>
                            <li><i class="fas fa-check-circle"></i>Many desktop publish packages nothing</li>
                            <li><i class="fas fa-check-circle"></i>If you are going to passage</li>
                            <li><i class="fas fa-check-circle"></i>It has roots in a piece</li>
                            <li><i class="fas fa-check-circle"></i>Sed ut perspiciatis unde iste natus</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add-team-form">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <h2 class="title mt-n2 mb-25">Create Your Account</h2>
                            <div class="row">
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="name" id="fullname"
                                        placeholder="Full Name" autocomplete="off">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address" autocomplete="off">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="password" class="form-control" name="password_confirmation" id="password"
                                        placeholder="Confirm Password">
                                </div>

                                <div class="form-btn col-12">
                                    <button class="th-btn style3">Sign Up</button>
                                </div>

                                <div class="form-group col-12 text-center mt-3">
                                    <p class="mb-0">
                                        Already have an account? <a href="{{ route('login') }}"
                                            class="text-decoration-none">Login</a>
                                    </p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
