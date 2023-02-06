@extends('layout')

@section('link')
<link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection

@section('content')

<body class='ok'>
    @if(Session::has('cart'))
        <div class="block">
            <table>
                <tr>
                    <th>title</th>
                    <th>image</th>
                     <th>qty</th>
                    <th>price</th>
                </tr>
            @foreach($articles as $article)
                <tr>
                     <td>{{$article['item']['title']}}</td>
                     <td><img src="imgupload/{{$article['item']['picture']}}" alt="img" height="100px" width="100px"></td>
                    <td>{{$article['qty']}}</td>
                    <td>{{$article['price']}}<td>
                </tr>
            </table>
            @endforeach
            {{$totalPrice}}
        </div>
    @else
        <h3>nothing in the cart</h3>
    @endif
</body>
@endsection
