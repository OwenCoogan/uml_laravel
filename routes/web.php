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

// Read All
Route::get('/contrats', function () {
    $contrats=Contrat::paginate(30);
    $vehicules=Vehicule::All();
    $employes=Employe::All();
    $clients=Client::All();
    return view('contrats', ['contrats' => $contrats, 'vehicules' => $vehicules, 'employes' => $employes, 'clients' => $clients]);
})->middleware(['auth'])->name('contrats');

// Read One
Route::get('/contrat/{id}', [ContratController::class, 'show'])->middleware(['auth'])->name('contrat');

// Create
Route::post('/storeContrat', [ContratController::class, 'store'])->middleware(['auth'])->name('storeContrat');

// Update
Route::get('/editContrat/{id}', [ContratController::class, 'edit'])->middleware(['auth'])->name('editContrat');
Route::post('/updateContrat/{id}', [ContratController::class, 'update'])->middleware(['auth'])->name('updateContrat');

// Delete
Route::get('/deleteContrat/{id}', [ContratController::class, 'destroy'])->middleware(['auth'])->name('deleteContrat');

/***************************
// Routes > Employes
***************************/

// Read All
Route::get('/employes', function () {
    $employes=Employe::paginate(30);
    return view('employes', ['employes' => $employes]);
})->middleware(['auth'])->name('employes');

// Read One
Route::get('/employe/{id}', [EmployeController::class, 'show'])->middleware(['auth'])->name('employe');


/***************************
// Routes > Vehicules
***************************/

// Read All
Route::get('/vehicules', function () {
    $vehicules=Vehicule::paginate(30);
    return view('vehicules', ['vehicules' => $vehicules]);
})->middleware(['auth'])->name('vehicules');

// Read One
Route::get('/vehicule/{id}', [VehiculeController::class, 'show'])->middleware(['auth'])->name('vehicule');


/***************************
// Routes > Clients
***************************/

// Read All
Route::get('/clients', function () {
    $clients=Client::paginate(30);
    return view('clients', ['clients' => $clients]);
})->middleware(['auth'])->name('clients');

// Read One
Route::get('/client/{id}', [ClientController::class, 'show'])->middleware(['auth'])->name('client');

// Create
Route::post('/storeClient', [ClientController::class, 'store'])->middleware(['auth'])->name('storeClient');

// Update
Route::get('/editClient/{id}', [ClientController::class, 'edit'])->middleware(['auth'])->name('editClient');
Route::post('/updateClient/{id}', [ClientController::class, 'update'])->middleware(['auth'])->name('updateClient');

// Delete
Route::get('/deleteClient/{id}', [ClientController::class, 'destroy'])->middleware(['auth'])->name('deleteClient');;


/***************************
// Routes > Historiques
***************************/

Route::get('/historique/{id}', [HistoriqueController::class, 'show'])->middleware(['auth'])->name('historique');

require __DIR__.'/auth.php';
