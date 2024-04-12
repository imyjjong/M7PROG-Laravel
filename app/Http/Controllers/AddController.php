<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(){
        return "view('dashboard')";
    }
}
