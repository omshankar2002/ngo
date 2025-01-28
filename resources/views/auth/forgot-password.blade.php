@extends('front.layouts.app')

@section('main_content')
    <!--==============================
                Breadcumb
            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Forgot Password</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Forgot Password</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="add-team-form">
                        <h2 class="title">Forgot your password?</h2>
                        <p>Enter your email address and we will send you a link to reset your password</p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group style-border col-12">
                                <label for="email">Email <code>*</code></label>
                                <input id="email" type="email" class="form-control" placeholder="Email Address"
                                    name="email" autocomplete="off">
                            </div>

                            <div class="form-btn col-12 mt-3">
                                <button type="submit" class="th-btn style3">Send Reset Link</button>
                            </div>
                        </form>

                        <div class="account__switch text-center mt-3">
                            <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
