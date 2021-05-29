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

Route::get('/contrats', function () {
    $contrats=Contrat::paginate(30);
    return view('contrats', ['contrats' => $contrats]);
})->middleware(['auth'])->name('contrats');

Route::get('/clients', function () {
    $clients=Client::paginate(30);
    return view('clients', ['clients' => $clients]);
});

Route::get('/employes', function () {
    $employes=Employe::paginate(30);
    return view('employes', ['employes' => $employes]);
});

Route::get('/client/{id}', [ClientController::class, 'show']);

Route::get('/employe/{id}', [EmployeController::class, 'show']);

Route::get('/contrat/{id}', [ContratController::class, 'show'])->middleware(['auth'])->name('contrat');

Route::get('/contrat/{id}/edit', [ContratController::class, 'edit'])->middleware(['auth'])->name('contrat');

Route::get('/vehicule/{id}', [VehiculeController::class, 'show'])->middleware(['auth'])->name('vehicule');

Route::get('/historique/{id}', [HistoriqueController::class, 'show']);

require __DIR__.'/auth.php';
