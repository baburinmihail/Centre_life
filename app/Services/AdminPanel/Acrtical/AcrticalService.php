<?php

namespace App\Services\AdminPanel\Acrtical;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Acrtical;



class AcrticalService{

    public function store($request)
    {

        //$arrayFile = $request->allFiles();
        $list_url = [];


        
        foreach ($request->file('imagesPath') ?? [] as $file) {
            $path = $file->store('imagesStore');
            $list_url[] = "/storage/$path";
        }

        $pathMainFoto = $request->file('mainFoto')->store('imagesStore');
        $mainFoto = "/storage/$pathMainFoto";
        //dd($mainFoto);
        
        Acrtical::create([
            'name_acrtical' => $request->input('name_acrtical'),
            'description' => $request->input('description'),
            'mainFoto' => $mainFoto,
            'images' => json_encode($list_url),
        ]);


    }

    public function update($request , $acrtical)
    {
        //dd($request);
        $acrtical -> name_acrtical = $request -> input('name_acrtical');
        $acrtical -> description = $request -> input('description');
        $acrtical -> save();

    }

}