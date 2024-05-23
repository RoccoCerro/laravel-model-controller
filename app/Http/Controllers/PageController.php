<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movie = Movie::all();

        $data = ['movie' => $movie];

        return view('welcome', $data);
    }

    public function movie(){
        return view('movie');
    }
}
