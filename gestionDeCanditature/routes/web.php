<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;

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

Route::get('/', [FormationController::class, 'acceuil']);
Route::resource('candidats',CandidatController::class);
Route::resource('formations',FormationController::class);
Route::resource('referentiels',ReferentielController::class);
Route::get('chart', [ChartJSController::class, 'index']);
//     :: get ( 'graphique' , [ ChartJSController ::class , 'index' ]);  
