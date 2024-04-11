<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add() {
        $model = new Model();
        $model->field_one = 'this data';
        $model->save();
    }
}
