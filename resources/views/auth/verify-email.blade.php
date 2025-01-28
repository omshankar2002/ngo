@extends('front.layouts.app')

@section('main_content')
<!--==============================
                    Breadcumb
        ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="theme">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Verify Email</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Verify Email</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
                   Login Form
        ============================== -->


        <section class="space">
    <div class="container">
        <div class="row gy-40 gx-40 justify-content-center"> <!-- Centering the row -->

            <div class="col-md-6 col-lg-4"> <!-- Adjust the column size as needed -->
                <div class="add-team-form">
                    <p>
                        Thanks for signing up! Before getting started, could you verify your email address by clicking on 
                        the link we just emailed to you? If you didn’t receive the email, we will gladly send you another.
                    </p>

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb_30 text-success">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                     @endif

                    <!-- Create a div to hold both buttons in the same row -->
                    <div class="d-flex gap-3">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Resend Verification Email</button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                Log Out
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


@endsection