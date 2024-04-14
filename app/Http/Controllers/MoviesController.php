<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class MoviesController extends Controller
{
    public function movies(){
        $movies = Movie::whereIn('like', ['fas fa-heart'])->take(3)->get();
        $watchlists = Movie::where('watched', 'fas fa-clock')->get();
        $watchedMovies = Movie::where('watched', 'fas fa-eye')->get();
        return view('movies.movies', 
        [
            'movies' => $movies,
            'watchlists' => $watchlists,
            'watchedMovies' => $watchedMovies
        ]
    );
    }
}
