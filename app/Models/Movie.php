<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'intro', 'image', 'year', 'description', 'watched', 'like'];
    use HasFactory;
}
