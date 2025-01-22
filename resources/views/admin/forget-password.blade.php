<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    
<h2>Forget password</h2>
@if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif
@if(Session::has('error'))
    <li>{{ Session::get('error')}}</li>
@endif
@if(Session::has('success'))
    <li>{{ Session::get('success')}}</li>
@endif
<form action="{{ route('admin_forget_password_submit') }}" method="post">
    @csrf
    <input type="text" name="email" placeholder="enter your email"><br>
    <button type="submit">Submit</button>

</form>
<a href="{{ route('admin_login') }}">Back to login</a>
</body>
</html>