<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EquipementController;
use App\Http\Controllers\Api\IncidentController;
use App\Http\Controllers\Api\PrioriteIncidentController;
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
Route::apiResource('/equipement', EquipementController::class);
Route::apiResource('/incident', IncidentController::class);
Route::apiResource('/prioriteincident', PrioriteIncidentController::class);
Route::apiResource('/roleutilisateur', RoleUtilisateurController::class);
Route::apiResource('/statutincident', StatutIncidentController::class);
Route::apiResource('/utilisateur', UtilisateurController::class);
|
*/

Route::get('/equipement/index',[EquipementController::class,"index"]);
Route::get('/equipement/show/{id}',[EquipementController::class,"show"]);
Route::post('/equipement/store', [EquipementController::class,"store"]);
Route::put('/equipement/update/{id}',[EquipementConroller::class,"update"]);
Route::delete('/equipement/delete/{id}',[EquipementController::class,"destroy"]);
