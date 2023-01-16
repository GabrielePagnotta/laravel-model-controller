<?php

namespace App\Http\Controllers;

use App\Models\movies;

class PageController extends Controller
{
    public function index(){
        $all_movies= movies::all();

        
        return view("welcome", compact("all_movies"));
    }
}
