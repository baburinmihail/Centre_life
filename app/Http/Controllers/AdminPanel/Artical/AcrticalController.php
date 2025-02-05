<?php

namespace App\Http\Controllers\AdminPanel\Artical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminPanel\Acrtical\AcrticalStoreRequest;
use App\Http\Requests\AdminPanel\Acrtical\AcrticalUpdateRequest;
use App\Services\AdminPanel\Acrtical\AcrticalService;
use App\Models\Acrtical;

class AcrticalController extends Controller
{


    public function index()
    {
        $acrticals_all= Acrtical::all();

        return view('main.admin_panel.articals.index' , [
           'acrticals_all' => $acrticals_all
        ]);
    }



    public function create()
    {
        return view('main.admin_panel.articals.create');
    }



    public function store(AcrticalStoreRequest $request, AcrticalService $servise)
    {
        $servise->store($request);
        return redirect()->route('artikals.index')->withSuccess('Статья создана!');;
    }





    public function show(int $id)
    {
        
        $acrtical = Acrtical::find($id);
        $path_images = json_decode($acrtical->images, true);

        return view('main.admin_panel.articals.show'  , [
            'acrtical' => $acrtical,
            'path_images' => $path_images
         ]);
    }





    public function edit(int $id)
    {
        
        $acrtical = Acrtical::find($id);
        return view('main.admin_panel.articals.edit', [
            'acrtical' => $acrtical
         ]);;
    }




    public function update(AcrticalUpdateRequest $request, int $id , AcrticalService $servise)
    {
        $acrtical = Acrtical::find($id);
        $servise->update($request , $acrtical);
        return redirect()->route('artikals.show', $acrtical['id'])->withSuccess('Статья изменена!');
    }




    public function destroy(int $id)
    {
        $acrtical = Acrtical::find($id);
        $acrtical -> delete();
        return redirect()->back()->withSuccess('Статья удалена!');
    }
}
