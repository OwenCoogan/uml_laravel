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
        $validated = $request->validate([
            'nom' => 'required',
            'immatriculation' => 'required',
            'image' => 'active_url',
        ]);

        $vehicule = new Vehicule;
        $vehicule->nom = $request->nom;
        $vehicule->immatriculation = $request->immatriculation;
        $vehicule->image = $request->image;
        $vehicule->save();

        return redirect()->route('vehicules');
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
<<<<<<< HEAD
        //
        $vehicule = Vehicule::find($primaryKey);
=======
        $vehicule =  Vehicule::find($id);
>>>>>>> master
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
            'immatriculation' => 'required',
            'image' => 'active_url',
        ]);

        $vehicule = Vehicule::find($id);
        $vehicule->nom = $request->nom;
        $vehicule->immatriculation = $request->immatriculation;
        $vehicule->image = $request->image;
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
        $vehicule = Vehicule::find($id);
        $vehicule->delete();

        return redirect()->route('vehicules');
    }
}
