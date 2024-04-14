<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class MoviesController extends Controller
{
    public function movies(){
        $movies = Movie::whereIn('title', ['Girl, Interrupted', 'Pulp Fiction', 'Mr. & Mrs. Smith'])->get();
        $watchlists = Movie::where('watched', 'fas fa-clock')->get();
        $watchedMovies = Movie::where('watched', 'fas fa-eye')->get();
        return view('movies.movies', 
        [
            'movies' => $movies,
            'watchlists' => $watchlists,
            'watchedMovies' => $watchedMovies
        ]
    );
    
        // $movie = new Movie();
        // $movie->title = "Mr. & Mrs. Smith";
        // $movie->intro = "Angelina Jolie, Brad Pitt";
        // $movie->image = "https://m.media-amazon.com/images/M/MV5BMTUxMzcxNzQzOF5BMl5BanBnXkFtZTcwMzQxNjUyMw@@._V1_.jpg";
        // $movie->year = 2005;
        // $movie->description = "awesome movie, love it";
        // $movie->watched = true;
        // $movie->like = true;
        // $movie->save();
    }
}
