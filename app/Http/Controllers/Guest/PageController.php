<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Movie;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class PageController extends Controller
{
    public function index(){
        
        $movies = Movie::all();

        return view('other', compact('movies'));
    }
}
