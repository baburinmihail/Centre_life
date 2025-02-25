<?php

namespace App\Services\AdminPanel\Document;

use App\Models\Document;



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


}