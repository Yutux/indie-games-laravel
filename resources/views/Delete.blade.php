@extends('layout')

@section('link')
<link href="{{ asset('css/Admin.css') }}" rel="stylesheet">
@endsection

@section('content')
<table border="1">
    <tr>
        <td>Title</td>
        <td>éditor</td>
    </tr>
    @foreach($data as $items)
    <tr>
        <td>{{$items->title}}</td>
        <td>{{$items->éditor}}</td>
        <td><a href="/Delete/{{$items->id}}"> Delete </a></td>
    </tr>
    @endforeach
</table>
@endsection