<?php

namespace App\Services\AdminPanel\Acrtical;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Acrtical;
use Illuminate\Support\Facades\Storage;



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

    public function delete($acrtical)
    {
        $toDelete = 9; // сколько знаков надо убрать

        $images_array = (json_decode($acrtical->images));

        for ($i = 0; $i < count($images_array); $i++) {
            $resultImage = substr( $images_array[$i], $toDelete); 
            Storage::delete($resultImage);
        }

        $inputMaiFoto = $acrtical->mainFoto;//обложка
        $resultMainFoto = substr( $inputMaiFoto, $toDelete); 
        Storage::delete($resultMainFoto);

        $acrtical -> delete();
    }

}