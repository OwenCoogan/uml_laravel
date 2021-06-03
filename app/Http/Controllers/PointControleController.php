<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointControle;

class PointControleController extends Controller
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
            'id_employe' => 'required',
            'controle_type' => 'required',
            'controle_description' => 'required'
        ]);

        $pointControle = new PointControle;
        $pointControle->id_vehicule = $request->id_vehicule;
        $pointControle->id_employe = $request->id_employe;
        $pointControle->controle_type = $request->controle_type;
        $pointControle->controle_description = $request->controle_description;
        $pointControle->save();

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
        $pointControle =  PointsControle::find($primaryKey);
        return view('pointControle', ['pointControle' => $pointControle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
