<?php


use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::get('/create', [MoviesController::class, 'create']);
Route::post('/createmovie', [MoviesController::class, 'store']);
Route::post('/createcomment', [CommentsController::class, 'store']);
Route::get('/genres/{id}', [GenresController::class, 'show']);
Route::get('/genres/{genre}', [GenresController::class, 'index']);