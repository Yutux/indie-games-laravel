@extends('layout')
@section('link')
<link href="{{ asset('css/Account.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="ok">
    <div class="block">
    
        <h1 class="block-Account"><i>My Account</i> </h1>
        <h3 class="font"><i>Name:</i> {{ Auth::user()->name }}</h3>
        <h3 class="font"><i>Lastname:</i> {{ Auth::user()->lastname }}</h3>
        <h3 class="font"><i>Email:</i> {{ Auth::user()->email }}</h3>            
        <!-- update l'utilisateur -->
        
    </div>
<body>
@endsection