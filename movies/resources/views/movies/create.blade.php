@extends('layout.default')

@section('content')
    <div class="container mt-4">
        <h1>Kreiranje novog filma</h1>
        <form action="{{ url('createmovie') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Naziv filma:</label>
                <input class="form-control" type="text" id="title" name="title">
            </div>
            <div>
                <label for="genre">Zanr:</label>
                <select class="form-control" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="director">Director:</label>
                <input class="form-control" type="text" id="director" name="director">
            </div>
            <div class="mb-3">
                <label for="year">Year:</label>
                <input class="form-control" type="text" id="year" name="year">
            </div>
            <div class="mb-3">
                <label for="storyline">Storyline:</label>
                <input class="form-control" type="text" id="storyline" name="storyline">
            </div>
            <button type="submit">Dodaj film</button>
        </form>
    </div>
    @include('components.errors')
@endsection
