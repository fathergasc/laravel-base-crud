@extends('layout.app')

@section('title', 'Comics list')

@section('content')
<div class="p-3">
    <a href="{{route('comics.create')}}" class="btn btn-secondary m-1">Add comic</a>
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
                <td>
                    <a class="btn btn-secondary m-1" href="{{route('comics.show', ['comic' =>$comic->id])}}">Show</a>
                    <a class="btn btn-info m-1" href="{{route('comics.edit', ['comic' =>$comic->id])}}">Edit</a>
                    <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this entry?')">

                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
