<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function ondex(){
        $movies = Movie::all();
        return view('DBelement.movieList', compact("movies"));
    }
}
