<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\NekretnineController;
use App\Http\Controllers\ObilazakController;
use App\Http\Controllers\TipNekretnineController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('obilazak', ObilazakController::class);
Route::resource('nekretnine', NekretnineController::class)->only(['index','show']);
Route::resource('tipnekretnine', TipNekretnineController::class)->only(['index','show']);
Route::resource('agent', AgentController::class)->only(['index','show']);
// Route::get('/tipnekretnine', [TipNekretnineController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/registerkorisnik', [AuthController::class, 'registerkorisnik']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/loginkorisnik', [AuthController::class, 'loginkorisnik']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/dodajnekretninu', [AuthController::class, 'dodajNekretninu']);
    Route::post('/dodajagenta', [AuthController::class, 'dodajAgenta']);
});
