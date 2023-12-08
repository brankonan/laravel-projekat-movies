@extends('layout.default')


@section('content')
    

<h1>Lista Svih filmova</h1>

<ul>
    @foreach($movies as $movie)
        <li>{{ $movie->title }} - {{ $movie->storyline }}</li>
    @endforeach

</ul>
@endsection