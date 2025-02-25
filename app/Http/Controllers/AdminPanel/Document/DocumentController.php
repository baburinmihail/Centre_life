<?php

namespace App\Http\Controllers\AdminPanel\Document;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Http\Requests\AdminPanel\Document\StoreDocumentRequest;
use App\Http\Requests\AdminPanel\Document\UpdateDocumentRequest;
use App\Services\AdminPanel\Document\AllDocumentService;

class DocumentController extends Controller
{

    public function index()
    {

        $documents_all= Document::all();

        return view('main.admin_panel.documents.index' , [
            'documents_all' => $documents_all
        ]);
    }




    public function create()
    {
        return view('main.admin_panel.documents.create');
    }





    public function store(StoreDocumentRequest $request , AllDocumentService $documentServise)
    {
        $documentServise->store($request);
        return redirect()->route('documents.index')->withSuccess('документ загружен!');
    }





    public function destroy(Document $document)
    {
        $document -> delete();
        return redirect()->back()->withSuccess('Статья удалена!');
    }
}
