<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicule;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($primaryKey)
    {
        $vehicule =  Vehicule::find($primaryKey);
        return view('vehicule', ['vehicule' => $vehicule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($primaryKey)
    {
        //
        $vehicule = Vehicule::find($primaryKey);
        return view('editVehicule', ['vehicule' => $vehicule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'image' => 'required',
            'id_controle' => 'required'
        ]);

        $vehicule = vehicule::find($id);
        $vehicule->nom = $request->nom;
        $vehicule->image = $request->image;
        $vehicule->id_controle = $request->id_controle;
        $vehicule->save();

        return redirect()->route('vehicules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vehicule = Vehicule::find($primaryKey);
        $vehicule->delete();

        return redirect()->route('vehicules');
    }
}
