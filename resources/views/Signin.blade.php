@extends('layout')

@section('link')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="register">
        <h1 class="registerhere">Sign in</h1>
        <form action='/Signin' method='post'>
            {{ csrf_field() }}
            
            <p class="font" style="text-align:center;margin-top:30px;">Enter your name</p>
    
            <input class="font" type="text" name="name" placeholder="First name" style="width:40%;margin-left:19%">
            @if($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
            @endif

            <input class="font" type="text" name="lastname" placeholder="Last name" style="width:40%;">
            @if($errors->has('lastname'))
            <p>{{ $errors->first('lastname') }}</p>
            @endif

            <p class="font">Pseudo</p>
            <input class="font" type="text" name="pseudo" placeholder="enter your Pseudo">
            @if($errors->has('pseudo'))
            <p>{{ $errors->first('pseudo') }}</p>
            @endif

            <p class="font">Email</p>
            <input class="font" type="text" name="email" placeholder="enter your email">
            @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif

            <p class="font">Password</p>
            <input class="font" type="password" name="password" placeholder="enter your password">
            @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
            @endif

            <!-- <p class="font">confirm password</p>
            <input class="font" type="password" name="password_confirmation" placeholder="confirm">
            @if($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
            @endif -->

            <input class="font" type="submit" value="sign in">
        </form>
    </div>
</body>
@endsection
