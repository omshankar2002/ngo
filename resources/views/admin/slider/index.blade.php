@extends ('admin.layouts.app')

@section('main_content')
<div class="content-page"> 
    <div class="content"> 
        <!-- Start Content--> 
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">    
                            <div class="m-2 custom-class d-flex justify-content-between align-items-center">
                                <h3>Heros</h3>
                                <a href="{{ route('admin_slider_create') }}" class="btn btn-info waves-effect waves-light float-right">Add New</a>
                            </div>

                            <div class="bg-picture card-body">
                                <div class="d-flex align-items-top">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0" id="btn-editable">
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
                                                            <td>
                                                                <!-- Displaying the photo -->
                                                                <img src="{{ asset('uploads/' . $slider->photo) }}" alt="Slider Image" width="100" height="100">
                                                            </td>
                                                            <td>{{ $slider->heading }}</td>
                                                            <td>
                                                                <!-- Edit button -->
                                                                <a href="{{ route('admin_slider_edit',$slider->id) }}" class="btn waves-effect waves-light" style="background-color: #35B8E0; color: white;">Edit</a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div> <!-- end card-body -->
                                    <div class="clearfix"></div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
