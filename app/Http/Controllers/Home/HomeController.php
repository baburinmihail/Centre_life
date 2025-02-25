<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class HomeController extends Controller
{
    public function home(){
        return view('main.home.home');
    }

    public function about(){

        $documents_all= Document::all();
        
        return view('main.about.about' , [
            'documents_all' => $documents_all,
        ]);
    }
}
