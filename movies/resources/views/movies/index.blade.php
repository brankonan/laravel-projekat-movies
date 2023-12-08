@extends('layout.default')


@section('content')
    

<h1>Lista Svih filmova</h1>

<ul>
    @foreach($movies as $movie)
        <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a> - {{ $movie->storyline }}</li>
    @endforeach

</ul>
@endsection