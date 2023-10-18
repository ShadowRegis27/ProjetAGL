<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\prioriteincidentController;
use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\pIncident;
use App\Http\Controllers\Api\RoleUtilisateurController;
use App\Http\Controllers\Api\StatutIncidentController;
use App\Http\Controllers\Api\UtilisateurController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
Route::apiResource('/prioriteincident', prioriteincidentController::class);
Route::apiResource('/incident', IncidentController::class);
Route::apiResource('/prioriteincident', PrioriteIncidentController::class);
Route::apiResource('/roleutilisateur', RoleUtilisateurController::class);
Route::apiResource('/statutincident', StatutIncidentController::class);
Route::apiResource('/utilisateur', UtilisateurController::class);
|
*/
//Route prioriteincident
Route::get('/prioriteincident/index',[prioriteincidentController::class,"index"]);
Route::get('/prioriteincident/show/{id}',[prioriteincidentController::class,"show"]);
Route::post('/prioriteincident/store', [prioriteincidentController::class,"store"]);
Route::put('/prioriteincident/update/{id}',[prioriteincidentController::class,"update"]);
Route::delete('/prioriteincident/delete/{id}',[prioriteincidentController::class,"destroy"]);
//Route Priorite Incident
 Route::get('/prioriteincident/index',[pIncident::class,"index"]);
Route::get('/prioriteincident/show/{id}',[pIncident::class,"show"]);
Route::post('/prioriteincident/store', [pIncident::class,"store"]);
Route::put('/prioriteincident/update/{id}',[pIncident::class,"update"]);
Route::delete('/prioriteincident/delete/{id}',[pIncident::class,"destroy"]);
