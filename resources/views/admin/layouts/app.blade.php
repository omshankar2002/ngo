<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2025 22:35:34 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('admin.layouts.style')

    @include('admin.layouts.scripts')

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @if(!Request::is('admin/login') && !Request::is('admin/forget-password') && !Request::is('admin/reset-password/*/*'))
        @include('admin.layouts.nav')
        @include('admin.layouts.sidebar')
        @endif

        @yield('main_content')

    </div>
    <!-- END wrapper -->



    @include('admin.layouts.scripts-footer')

</body>


<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2025 22:36:06 GMT -->

</html>