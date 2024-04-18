<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function genres(Request $request)
    {
        $genres = $request->input('genre');
        $movies = Movie::where('genre', 'like', '%' . $genres . '%')->get();
        return view('genres.genres', [
            'genres' => $genres,
            'movies' => $movies
        ]);
    }
}