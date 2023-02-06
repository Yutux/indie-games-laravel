@extends('layout')
@section('link')
<link href="{{ asset('css/produitcss.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="ok">
    <!-- afficher un article dans une page précise-->
    <div class="block">
        <img src="{{asset ('imgupload')}}/{{$prod->picture}}" alt="regiser" height="100%" width="100%"> 
        <a href="{{route('AddToCartArticle', ['id'=>$article->id])}}">buy it </a>
    </div>
    
    <div class="block2">
        <h1><i>{{ $prod->title }}</i></h1>
    </div>
    <div class="block3">
        <h1><i>{{ $prod->contenu }}</i></h1>
    </div>
</body>
@endsection