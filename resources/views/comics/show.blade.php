@extends('layout.app')

@section('title', 'Fumetto specifico')

@section('content')
<div class="container">
    <h3 class="text-uppercase">{{$comic->title}}</h3>
    <h5 >{{$comic->price}}€</h5>
    <img class="py-3" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p class="fs-5">{{$comic->description}}</p>
    <h5>Series: {{$comic->series}}</h5>
    <h5 class="text-capitalize">{{$comic->type}}</h5>
    <h5>{{$comic->sale_date}}</h5>
    <a class="btn btn-primary" href="{{route('comics.index')}}">Back to list</a>
</div>

@endsection
