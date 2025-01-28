@extends('front.layouts.app')

@section('main_content')
    <!--==============================
                Breadcumb
            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Reset Password</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Reset Password</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="add-team-form">
                        <h2 class="title">Reset your password?</h2>
                        <p>Enter your email address and we will send you a link to reset your password</p>
                        <div class="text-danger mb_30">
                        {{session('status')}}
                        </div>

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group style-border col-12">
                                <label for="email">Email <code>*</code></label>
                                <input id="email" type="email" class="form-control" placeholder="Email Address"
                                    name="email" autocomplete="off" value="{{ old('email') }}">
                            </div>

                            <div class="form-group style-border col-12">
                                <label for="password">Password <code>*</code></label>
                                <input id="password" type="password" class="form-control" placeholder="Password"
                                    name="password" autocomplete="off">
                            </div>

                            <div class="form-group style-border col-12">
                                <label for="password">Confirm Password <code>*</code></label>
                                <input id="password" type="password" class="form-control" placeholder="Confirm Password"
                                    name="password_confirmation" autocomplete="off">
                            </div>


                            <div class="form-btn col-12 mt-3">
                                <button type="submit" class="th-btn style3">Reset Password</button>
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
