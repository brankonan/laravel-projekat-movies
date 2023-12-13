<div class="sidebar">
    <h3>Posljednjih 5 filmova</h3>
    <ul>
        @foreach($latestMovies as $movie)
            <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
</div>