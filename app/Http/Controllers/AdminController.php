<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(5);
        return view('dashboard', [
            'movies' => $movies
        ]);
    }

    public function create()
    {
        $movie = new Movie();
        return view('dashboard.adminmovies.create', $movie);
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $movie = Movie::create($validatedData);

        $title = urlencode($movie->title);

        $response = Http::get('https://api.themoviedb.org/3/search/movie?query='.$title.'&api_key=13631cc9bf997aabaa47ab22c3ee1f67');
        $imageURL = $response->json()['results'][0]['poster_path'];

        $url = 'https://image.tmdb.org/t/p/original/'.$imageURL;

        $movie->update(['image' => $url]);

        return redirect()->route('adminmovies.index');
    }

    public function show(Movie $movie)
    {
        //
    }
    
     public function edit($id)
     {
         $movie = Movie::findOrFail($id);
         return view('dashboard.adminmovies.edit', ['movie' => $movie]);
     }
     

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $data = $this->validateData($request);
        $movie->update($data);
        $movie->save();
        
        return redirect()->route('adminmovies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('adminmovies.index');
    }

    protected function validateData(Request $request){
        $data = $request->validate([
            'title' => 'required|min:3',
            'intro' => 'required',
            'year' => 'required|digits:4',
            'image' => 'required',
            'description' => 'required',
            'watched' => '',
            'like' => '',
        ]);

        if($request->has('watched')){
            $data['watched'] = 'fas fa-eye';
        }
        else{
            $data['watched'] = 'fas fa-clock';
        }

        if($request->has('like')){
            $data['like'] = 'fas fa-heart';
        }
        else{
            $data['like'] = 'far fa-heart';
        }
        
        return $data;
    }

}
