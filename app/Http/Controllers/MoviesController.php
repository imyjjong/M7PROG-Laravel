<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function movies(){
        return view('movies.movies');
    }
}
