<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('main.home.home');
    }

    public function about(){
        return view('main.about.about');
    }
}
