@extends('layouts.default')
@section('content')
    <div class="container mt-4">
        <h1>Filmovi žanra: {{ $movies[0]->genre_id}}</h1>
        <ul>
            @foreach($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection