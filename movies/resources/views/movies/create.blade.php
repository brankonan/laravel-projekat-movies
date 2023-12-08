@extends('layout.default')

@section('content')

<div class="container mt-4">
        <h1>Kreiranje novog filma</h1>
        <form action="{{ url('createmovie') }}" method="POST">
            @csrf
            <label for="title">Naziv filma:</label>
            <input type="text" id="title" name="title">
            <div></div>
            <label for="genre">Zanr:</label>
            <input type="text" id="genre" name="genre">
            <div></div>
            <label for="director">Director:</label>
            <input type="text" id="director" name="director">
            <div></div>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year">
            <div></div>
            <label for="storyline">Storyline:</label>
            <input type="text" id="storyline" name="storyline">
            <div></div>
            <button type="submit">Dodaj film</button>
        </form>
    </div>

@endsection