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
|
*/

Route::get('/equipement/store', [EquipementController::class,"store"]);
route::get('/equipement',[EquipementController::class,"index"   ]);
/*
Route::apiResource('/equipement', EquipementController::class);
Route::apiResource('/incident', IncidentController::class);
Route::apiResource('/prioriteincident', PrioriteIncidentController::class);
Route::apiResource('/roleutilisateur', RoleUtilisateurController::class);
Route::apiResource('/statutincident', StatutIncidentController::class);
Route::apiResource('/utilisateur', UtilisateurController::class);
*/
