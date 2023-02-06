@extends('layout')

@section('link')
<link href="{{ asset('css/Admin.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="Add">
        <h1 class="Addhere">Add</h1>
        <form method="post" action="/Admin" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="space">
                
                <p>Title</p>
                <input class="font" type="text" name="title" placeholder="title">
                @if($errors->has('title'))
                <p>{{ $errors->first('title') }}</p>
                @endif
                
                <p class="font">éditor</p>
                <input class="font" type="text" name="éditor" placeholder="éditor">
                @if($errors->has('éditor'))
                <p>{{ $errors->first('éditor') }}</p>
                @endif

            </div>

            <p class="font">Price</p>
            <input class="font" type="text" name="price" placeholder="price">
            @if($errors->has('price'))
            <p>{{ $errors->first('price') }}</p>
            @endif

            <p class="font">Description</p>
            <input class="font" type="text" name="description" placeholder="description">
            @if($errors->has('description'))
            <p>{{ $errors->first('description') }}</p>
            @endif

            <p class="font">the picture</p>
            <input class="font" type="file" name="picture">
            <input class="font" type="submit" name="" value="Add">
        </form>

        <a href="Delete">Delete</a>

    </div>
</body>
@endsection
