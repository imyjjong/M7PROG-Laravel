<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/movies', [ \App\Http\Controllers\MoviesController::class, 'movies'])->name('movies.movies');
Route::get('/info', [\App\Http\Controllers\InfoController::class, 'information'])->name('info.information');

require __DIR__.'/auth.php';
