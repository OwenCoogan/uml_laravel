<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\VehiculeController;

use App\Models\Contrat;

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

Route::get('/contrats', function () {
    $contrats=Contrat::paginate(30);
    return view('contrats', ['contrats' => $contrats]);
});

Route::get('/contrat/{id}', [ContratController::class, 'show']);

Route::get('/vehicule/{id}', [VehiculeController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
