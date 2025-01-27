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
                            <a href="{{ route('admin_slider') }}" class="btn btn-info waves-effect waves-light float-right">View All</a>
                        </div>
                        <div class="bg-picture card-body">
                            <div class="d-flex align-items-top">
                                <div class="flex-grow-1 overflow-hidden">
                                <form action="{{ route('admin_slider_create_submit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <!-- Heading Section -->
                                <div class="mb-3">
                                    <label for="inputHeading" class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="heading" id="inputHeading" placeholder="Enter Heading">
                                </div>

                             <!-- Text Section -->
                                <div class="mb-3">
                                    <label for="inputText" class="form-label">Text *</label>
                                    <textarea name="text" class="form-control" name="text" id="inputText" rows="10" cols="30" placeholder="Enter Text"></textarea>
                                </div>

                                <!-- Button Text Section -->
                                <div class="mb-3">
                                    <label for="inputButtonText" class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text" id="inputButtonText" placeholder="Enter Button Text">
                                </div>

                                <!-- Button Link Section -->
                                <div class="mb-3">
                                    <label for="inputButtonLink" class="form-label">Button Link</label>
                                    <input type="url" class="form-control" name="button_link" id="inputButtonLink" placeholder="Enter Button Link">
                                </div>

                                <!-- Photo Section -->
                                <div class="mb-3">
                                    <label for="inputPhoto" class="form-label">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="inputPhoto">
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </form>

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


