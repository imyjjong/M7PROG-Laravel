<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/movies', [ \App\Http\Controllers\MoviesController::class, 'movies'])->name('movies.movies');
Route::get('/info', [\App\Http\Controllers\InfoController::class, 'information'])->name('info.information');
Route::get('/movie', [\App\Http\Controllers\MovieController::class, 'movie'])->name('movie.movie');

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/', function () {
        return view('/dashboard');
    })->name('dashboard.adminmovies');
    
    Route::resources([
        'adminmovies'  =>  \App\Http\Controllers\AdminController::class,
    ]);
});

require __DIR__.'/auth.php';
