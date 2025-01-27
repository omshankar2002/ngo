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
                            <h3>Edit Heros</h3>
                        </div>
                        <div class="bg-picture card-body">
                            <div class="d-flex align-items-top">
                                <div class="flex-grow-1 overflow-hidden">
                                <form action="{{ route('admin_slider_edit_submit', $slider->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <!-- Heading Section -->
                                <div class="mb-3">
                                    <label for="inputHeading" class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="heading" value="{{$slider->heading}}" id="inputHeading" placeholder="Enter Heading">
                                </div>

                             <!-- Text Section -->
                                <div class="mb-3">
                                    <label for="inputText" class="form-label">Text *</label>
                                    <textarea name="text" class="form-control" id="inputText" rows="10" cols="30" placeholder="Enter Text">{{ $slider->text }}</textarea>

                                </div>

                                <!-- Button Text Section -->
                                <div class="mb-3">
                                    <label for="inputButtonText" class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text" value="{{$slider->button_text}}" id="inputButtonText" placeholder="Enter Button Text">
                                </div>

                                <!-- Button Link Section -->
                                <div class="mb-3">
                                    <label for="inputButtonLink" class="form-label">Button Link</label>
                                    <input type="url" class="form-control" name="button_link" value="{{$slider->button_link}}" id="inputButtonLink" placeholder="Enter Button Link">
                                </div>

                                <!-- Photo Section -->
                                <div class="mb-3">
                                    <label for="inputPhoto" class="form-label">Existing Photo</label>
                                   <div>
                                   <img src="{{ asset('uploads/'.$slider->photo) }}" alt="" class="w-200" style="max-width: 100px; height: auto;">
                                   </div>
                                </div>

                                <div class="mb-3">
                                    <label for="inputPhoto" class="form-label">change Photo</label>
                                    <input type="file" class="form-control" name="photo" id="inputPhoto">
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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


