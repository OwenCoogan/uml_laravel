<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\VehiculeController;

use App\Models\Contrat;
use App\Models\Vehicule;
use App\Models\Employe;
use App\Models\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/***************************
// Routes > Contrats
***************************/

Route::get('/contrats', function () {
    $contrats=Contrat::paginate(30);
    $vehicules=Vehicule::All();
    $employes=Employe::All();
    $clients=Client::All();
    return view('contrats', ['contrats' => $contrats, 'vehicules' => $vehicules, 'employes' => $employes, 'clients' => $clients]);
})->middleware(['auth'])->name('contrats');

Route::get('/contrat/{id}', [ContratController::class, 'show'])->middleware(['auth'])->name('contrat');

Route::post('/storeContrat', [ContratController::class, 'store'])->middleware(['auth'])->name('storeContrat');


/***************************
// Routes > Vehicules
***************************/

Route::get('/vehicules', function () {
    $vehicules=Vehicule::paginate(30);
    return view('vehicules', ['vehicules' => $vehicules]);
})->middleware(['auth'])->name('vehicules');

Route::get('/vehicule/{id}', [VehiculeController::class, 'show'])->middleware(['auth'])->name('vehicule');


/***************************
// Routes > Clients
***************************/

Route::get('/clients', function () {
    $clients=Client::paginate(30);
    return view('clients', ['clients' => $clients]);
})->middleware(['auth'])->name('clients');


/***************************
// Routes > Historiques
***************************/

Route::get('/historique/{id}', [HistoriqueController::class, 'show'])->middleware(['auth'])->name('historique');

require __DIR__.'/auth.php';
