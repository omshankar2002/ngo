<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('user.layouts.style')

    @include('user.layouts.scripts')

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

      
        @include('user.layouts.nav')
        @include('user.layouts.sidebar')
      

    </div>
    <!-- END wrapper -->

    @yield('main_content')

   
    @include('user.layouts.scripts-footer')

</body>

</html>