<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBMovies;

class MovieController extends Controller
{
    public function Movies() {
        // Recuperare i books dal database
        // passarli alla view e stamparli
        $movies = DBMovies::all();

      
       
        
        $data = [
            'movies' => $movies
        ];
        
        dd($data);
        return view('home', $data);
    }
}
