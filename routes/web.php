<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\EmployeController;

use App\Models\Contrat;
use App\Models\Client;
use App\Models\Vehicule;
use App\Models\Historique;
use App\Models\Employe;

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
    return view('contrats', ['contrats' => $contrats]);
})->middleware(['auth'])->name('contrats');

Route::get('/contrat/{id}', [ContratController::class, 'show'])->middleware(['auth'])->name('contrat');

Route::get('/contrat/{id}/edit', [ContratController::class, 'edit'])->middleware(['auth'])->name('contrat');
Route::post('/storeContrat', [ContratController::class, 'store']);

/***************************
// Routes > Employes
***************************/

Route::get('/employes', function () {
    $employes=Employe::paginate(30);
    return view('employes', ['employes' => $employes]);
});

Route::get('/employe/{id}', [EmployeController::class, 'show']);


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

Route::get('/client/{id}', [ClientController::class, 'show']);

Route::get('/deleteClient/{id}', [ClientController::class, 'destroy']);

Route::get('/editClient/{id}', [ClientController::class, 'edit'])->name('editClient');

Route::post('/updateClient/{id}', [ClientController::class, 'update'])->name('updateClient');

Route::post('/storeClient', [ClientController::class, 'store']);

/***************************
// Routes > Historiques
***************************/

Route::get('/historique/{id}', [HistoriqueController::class, 'show'])->middleware(['auth'])->name('historique');

require __DIR__.'/auth.php';
