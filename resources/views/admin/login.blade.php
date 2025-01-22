<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    
<h2>Login form </h2>
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
<form action="{{ route('admin_login_submit') }}" method="post">
    @csrf
    <input type="text" name="email" placeholder="enter your email"><br>
    <input type="password" name="password" placeholder="enter your password" ><br>
    <button type="submit">Login</button>
    <a href="{{ route('admin_forget_password') }}">Forget Password</a>
</form>
</body>
</html>