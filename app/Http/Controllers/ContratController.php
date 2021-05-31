<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

use App\Models\Vehicule;
use App\Models\Employe;
use App\Models\Client;
use App\Models\ContratToVehicule;

class ContratController extends Controller
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
            'id_vehicule' => 'required',
            'id_employe' => 'required',
            'id_client' => 'required',
        ]);

        $contrat = new Contrat;
        // $contrat->id_vehicule = $request->id_vehicule;
        $contrat->id_employe = $request->id_employe;
        $contrat->id_client = $request->id_client;
        $contrat->km_avant = $request->km_avant;
        $contrat->km_apres = $request->km_apres;
        $contrat->date_debut = $request->date_debut;
        $contrat->date_fin = $request->date_fin;
        $contrat->save();

        $contratToVehicule = new ContratToVehicule;
        $contratToVehicule->id_contrat = $contrat->id_contrat;
        $contratToVehicule->id_vehicule = $request->id_vehicule;
        $contratToVehicule->save();

        return redirect()->route('contrats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($primaryKey)
    {
        $contrat =  Contrat::find($primaryKey);
        return view('contrat', ['contrat' => $contrat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrat = Contrat::find($id);
        $vehicules=Vehicule::All();
        $employes=Employe::All();
        $clients=Client::All();
        return view('editContrat', ['contrat' => $contrat, 'vehicules' => $vehicules, 'employes' => $employes, 'clients' => $clients]);
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
            'id_vehicule' => 'required',
            'id_employe' => 'required',
            'id_client' => 'required',
        ]);

        $contrat = Contrat::find($id);
        $contrat->id_vehicule = $request->id_vehicule;
        $contrat->id_employe = $request->id_employe;
        $contrat->id_client = $request->id_client;
        $contrat->km_avant = $request->km_avant;
        $contrat->km_apres = $request->km_apres;
        $contrat->date_debut = $request->date_debut;
        $contrat->date_fin = $request->date_fin;
        $contrat->save();

        return redirect()->route('contrats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contrat = Contrat::find($id);
        $contrat->delete();

        return redirect()->route('contrats');
    }
}
