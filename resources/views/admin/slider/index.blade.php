@extends ('admin.layouts.app')

@section('main_content')
<div class="content-page"> 
    
    <div class="content"> 
        <!-- Start Content--> 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <div class="card"> 
                        <div class="m-2 custom-class d-flex justify-content-between align-items-center">
                            <h3>Heros</h3>
                            <a href="{{ route('admin_slider_create') }}" class="btn btn-info waves-effect waves-light float-right">Add New</a>
                        </div>

                        <div class="bg-picture card-body"> 
                            <div class="d-flex align-items-top"> 
                                <div class="flex-grow-1 overflow-hidden"> 
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="key-table">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Photo</th>
                                                    <th>Heading</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sliders as $slider)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td></td>
                                                    <td></td> 
                                                    <td></td>
                                                </tr>
                                                @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
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
