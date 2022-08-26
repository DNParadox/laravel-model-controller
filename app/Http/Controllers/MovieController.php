<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function movies() {
        // Recuperare i movies dal database
        // passarli alla view e stamparli
        $movies = Movie::all();
      

      
       
        
        $data = [
            'movies' => $movies
        ];

        // $data = [
        //     'home_title' => 'Questi film'
        // ];
        
     
        return view('home', $data);
    }
}
