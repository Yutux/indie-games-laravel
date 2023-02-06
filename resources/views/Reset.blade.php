@extends('layout')

@section('link')
<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
    <div class="reset">
        <h1 class="resethere">reset</h1>
        <form>
            <div class="space">
                <input type="text" name="" placeholder="enter your Email"></br>
                <input type="submit" name="" value="sent"></br>
            </div>
        </form>
    </div>
</body>
@endsection
