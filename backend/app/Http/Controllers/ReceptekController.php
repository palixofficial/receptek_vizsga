<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReceptekRequest;
use App\Http\Requests\UpdateReceptekRequest;

class ReceptekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Receptek::leftJoin('kategorias', 'recepteks.kat_id', '=', 'kategorias.id')
            ->select('recepteks.*', 'kategorias.nev as kategoria_nev')
            ->get();
        // return Receptek::with("kategorias")->(); EZ CSAK SHOW ESETÉN!
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReceptekRequest $request)
    {
        $recept = new Receptek();
        $recept->fill($request->all());
        $recept->save();
        return response()->json($recept, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Receptek $receptek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReceptekRequest $request, Receptek $receptek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Receptek::find($id)->delete();
        return response()->json(null, 200);
    }
}
