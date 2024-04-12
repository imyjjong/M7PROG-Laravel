<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class MoviesController extends Controller
{
    public function movies(){
        $movies = Movie::whereIn('title', ['Girl, Interrupted', 'Pulp Fiction', 'Mr. & Mrs. Smith'])->get();
        $watchlists = Movie::whereNotIn('id', [1, 2, 3])->get();
        return view('movies.movies', 
        [
            'movies' => $movies,
            'watchlists' => $watchlists
        ]
    );
    }
}
