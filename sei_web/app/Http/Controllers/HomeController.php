<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;

class HomeController extends Controller
{
    //

    public function index(){

        Mapper::map(-6.2252752136126945, 106.805141639437,['zoom' => 15]);
        return view('home');
    }
    
}
