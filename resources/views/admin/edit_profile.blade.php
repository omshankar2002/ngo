@extends ('admin.layouts.app')

@section('main_content')
<div class="content-page"> 
    <div class="content"> 
        <!-- Start Content--> 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <div class="card"> 
                        <div class="bg-picture card-body"> 
                            <div class="d-flex align-items-top"> 
                               
                                <div class="flex-grow-1 overflow-hidden"> 
                                    <!-- Form Start -->
                                    <form action="{{ route('admin_edit_profile_submit') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::guard('admin')->user()->name }}" autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value ="{{ Auth::guard('admin')->user()->email }}" autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirm-password" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="confirm-password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                    <!-- Form End -->
                                    
                                </div> 
                                <div class="clearfix"></div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</div>


@endsection