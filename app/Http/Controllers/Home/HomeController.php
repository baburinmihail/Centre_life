<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Acrtical;

class HomeController extends Controller
{
    public function home(){
        
        $articals = Acrtical::all();

        return view('main.home.home' , [
            'articals' => $articals
        ]);
    }

    public function about(){

        $documents_all= Document::all();
        
        return view('main.about.about' , [
            'documents_all' => $documents_all,
        ]);
    }
}
