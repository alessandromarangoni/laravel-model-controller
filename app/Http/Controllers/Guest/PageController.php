<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Symfony\Component\Console\Input\Input;

class PageController extends Controller
{

    public function index(){
        
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }

    public function indexFilter($id){
        $moviesArray=Movie::where("id", "=", $id)
        ->get();
        return view('other', compact('moviesArray'));
    }
}
