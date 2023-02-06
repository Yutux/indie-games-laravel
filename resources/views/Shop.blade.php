@extends('layout')
@section('link')
<link href="{{ asset('css/shopcss.css') }}" rel="stylesheet">
@endsection
@section('content')

<body>
    <div class="container">
        @foreach($Article as $article)
        <div class="jeux">
            <div class="lol">
                <img src="imgupload/{{$article->picture}}" alt="img" height="250px" width="180px">
                <div class="ok">
                {{$article->id}}
                    <div style="color: black;">
                        <p>Title: {{ $article->title }}</p>
                        <p>Type: {{ $article->éditor }}</p>
                    </div>
                    <a href="/product/{{$article->title}}"><input type="submit" name="" value="See more"></a></br>
                    <a href="{{route('AddToCartArticle', ['id'=>$article->id])}}"><input type="submit" name="" value="Add in your storage"></a></br>
                    <input type="submit" name="" value="Buy It"></br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
@endsection
