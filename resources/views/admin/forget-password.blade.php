@extends ('admin.layouts.app')

@section('main_content')
<div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">
                        <a href="index.html">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0 mb-3">Forget Password</h4>
                                <p class="text-muted mb-0 font-13">Enter your email address and we'll send you an email
                                    with instructions to reset your password. </p>
                            </div>

                            <form action="{{ route('admin_forget_password_submit') }}" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress" autocomplete="off"
                                        placeholder="Enter your email">
                                </div>

                                <div class="mb-3 text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> Forget Password </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Back to <a href="{{ route('admin_login') }}" class="text-dark ms-1"><b>Log
                                        in</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection