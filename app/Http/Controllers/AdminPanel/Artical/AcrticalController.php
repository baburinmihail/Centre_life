<?php

namespace App\Http\Controllers\AdminPanel\Artical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminPanel\Acrtical\AcrticalStoreRequest;
use app\Models\Acrtical;

class AcrticalController extends Controller
{


    public function index()
    {
        return view('main.admin_panel.articals.index');
    }



    public function create()
    {
        return view('main.admin_panel.articals.create');
    }




    public function store(AcrticalStoreRequest $request)
    {
        dd($request->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        return view('main.admin_panel.articals.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
