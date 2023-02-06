@extends('layout')

@section('link')
<link href="{{ asset('css/logincss.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="login">
        <a href="CV.html"><img src="css/img/tumblr_dance.gif" class="Avatar" alt="gif" height="150px"></a>
        <h1 class="loginhere">Log in</h1>
        
        <form action='/Login' method='post'>

            {{ csrf_field() }}
            <p class="font">Email</p>
            <input class="font" type="text" name="email" placeholder="enter Userman">
            @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
            @endif

            <p class="font">password</p>
            <input class="font" type="password" name="password" placeholder="enter password">
            @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
            @endif

            <input class="font" type="submit" name="" value="login">

            <a class="font" href="reset.html"> Password forgot?</a><br>
            <a class="font" href="#"> Don't remenber your account?</a>
            <a class="log1n" href="/Reset">register</a>
        </form>
    </div>
</body>
@endsection
