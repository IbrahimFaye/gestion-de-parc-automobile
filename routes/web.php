<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ajout_voiture', [App\Http\Controllers\GestionVoitureController::class, 'ajoutVoiture'])->name('ajout-voiture');
Route::get('/liste_voiture', [App\Http\Controllers\GestionVoitureController::class, 'listeVoiture'])->name('liste-voiture');
Route::post('/enreg_voiture', [App\Http\Controllers\GestionVoitureController::class, 'store'])->name('enreg.voiture');

Route::get('/ajout_chauffeur', [App\Http\Controllers\ChauffeurController::class, 'ajoutChauffeur'])->name('ajout-chauffeur');
Route::get('/liste_chauffeur', [App\Http\Controllers\ChauffeurController::class, 'listeChauffeur'])->name('liste-chauffeur');
Route::post('/chauffeur/store', 'App\Http\Controllers\ChauffeurController@store')->name('enreg.chauffeur');

Route::get('/enreg_contrat', [App\Http\Controllers\ContratController::class, 'ajoutContrat'])->name('enreg-contrat');
Route::get('/liste_contrat', [App\Http\Controllers\ContratController::class, 'listeContrat'])->name('liste-contrat');
Route::post('/contrat/store', 'App\Http\Controllers\ContratController@store')->name('enreg.contrat');

Route::get('/location/{voitures}', 'App\Http\Controllers\LocationController@ajout')->name('louage');
Route::post('/location/store', 'App\Http\Controllers\LocationController@store')->name('enreg.location');

Route::get('/notification/client', 'App\Http\Controllers\NotifController@aprecier')->name('apreciation');
Route::get('/notification/ges', 'App\Http\Controllers\NotifController@notifges')->name('notif.ges');

Route::put('/location/{location}', 'App\Http\Controllers\LocationController@enregChauffeur')->name('choi-chauffeur');

Route::post('/Apreciation/store', 'App\Http\Controllers\NotifController@store')->name('avis.client');
Route::get('/voir_les_avis', 'App\Http\Controllers\NotifController@voirAvis')->name('voir.avis');

Route::get('/paiement/{fraisTotal}', [App\Http\Controllers\PayementController::class, 'creat'])->name('paiement.create');
Route::get('/paiement/success', [App\Http\Controllers\PayementController::class, 'success'])->name('paiement.success');
Route::get('/paiement/cancel', [App\Http\Controllers\PayementController::class, 'cancel'])->name('paiement.cancel');
Route::post('/paiement/process', [App\Http\Controllers\PayementController::class, 'process'])->name('paiement.process');