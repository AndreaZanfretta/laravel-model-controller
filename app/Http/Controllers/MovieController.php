<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        foreach($movies as $movie){
            $date[] = $movie->date;
        }
        return view('home', compact('movies'), compact('date'));
    }
}
