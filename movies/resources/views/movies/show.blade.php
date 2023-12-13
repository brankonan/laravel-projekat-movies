@extends('layout.default')
@extends('layout.default')
@section('content')
<div class="container mt-4">
    <h1>{{ $movie->title }}</h1>

    <p><strong>Žanr:<a href="/genres/{{ $movie->genre->name }}"> {{ $movie->genre->name }}</a></strong></p>
    <p><strong>Režiser:</strong> {{ $movie->director }}</p>
    <p><strong>Godina:</strong> {{ $movie->year }}</p>
    <p><strong>Zaplet:</strong> {{ $movie->storyline }}</p>

    @include('components.createcomment')
    @include('components.comments')

</div>
@endsection