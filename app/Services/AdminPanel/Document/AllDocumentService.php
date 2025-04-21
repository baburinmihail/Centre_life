<?php

namespace App\Services\AdminPanel\Document;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;



class AllDocumentService{

    public function store($request)
    {
        //dd($request->input('name_document'));
        $path = $request->file('file_document')->store('documentStore');
        $file_document = "/storage/$path";
        

        $document = Document::create([
            'name_document' => $request->input('name_document'),
            'file_document' => $file_document,
        ]);
    }

    public function delete($document)
    {
        $toDelete = 9; // сколько знаков надо убрать


        $input_file_document = $document->file_document;
        $result = substr( $input_file_document, $toDelete); 
        Storage::delete($result);

        $document -> delete();
    }


}