<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class MoviesController extends Controller
{
    public function movies(){
        $movies = Movie::all();

        return view('movies.movies', 
        [
            'movies' => $movies
        ]
    );
    }
}
