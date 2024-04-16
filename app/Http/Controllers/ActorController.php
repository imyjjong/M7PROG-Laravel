<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorController extends Controller
{
    public function actors(Request $request)
    {
        $actors = $request->input('castName');
        $response = Http::get('https://api.themoviedb.org/3/search/person?query='.$actors.'&api_key=13631cc9bf997aabaa47ab22c3ee1f67');
        $imageURL = $response->json()['results'][0]['profile_path'];
        $url = 'https://image.tmdb.org/t/p/original'.$imageURL;
        $movies = Movie::where('mainCast', 'like', '%' . $actors . '%')->get();
        return view('actors.actors', [
            'actors' => $actors,
            'url' => $url,
            'movies' => $movies
        ]);
    }
}
