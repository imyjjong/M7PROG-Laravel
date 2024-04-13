<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::paginate(5);
        return view('dashboard', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.adminmovies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'intro' => 'required',
            'year' => 'required|digits:4',
            'image' => 'required',
            'description' => 'required',
            'watched' => '',
            'like' => '',
        ]);

        $data['watched'] = 'fas fa-clock';
        if(isset($data['watched'])){
            $data['watched'] = 'fas fa-eye';
        }
        $data['like'] = 'far fa-heart';
        if(isset($data['like'])){
            $data['like'] = 'fas fa-heart';
        }

        $movie = new Movie($data);
        $movie->save();
        
        return redirect()->route('adminmovies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
