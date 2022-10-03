@extends('layout.app')

@section('title', 'Lista dei fumetti')

@section('content')
<div class="p-3">
    <a href="{{route('comics.create')}}" class="btn btn-secondary m-1">Aggiungi fumetto</a>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
                <td><a class="btn btn-secondary" href="{{route('comics.show', ['comic' =>$comic->id])}}">Show</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
