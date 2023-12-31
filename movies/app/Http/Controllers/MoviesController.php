<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Comment;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        $latestMovies = Movie::orderBy('created_at', 'desc')->take(5)->get();
        return view('movies.index', compact('movies','latestMovies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovieRequest $request)
    {
        $data = Movie::create($request->all());
        return redirect('/movies/')->with('status', 'Movie added successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        $comment = Comment::find($id);
        return view('movies.show', compact('movie', 'comment'));

    }

    public function create(){
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
