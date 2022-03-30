<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ApiController;

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

Route::get('/',[PerfilController::class,'hack'])->name('index');

Route::get('grupos',[GrupoController::class,'hack'])->name('grupos');

Route::get('/postales',[ApiController::class,'postales'])->name('postales');

Route::get('/postalesdos',[ApiController::class,'postalesdos'])->name('postalesdos');

Route::get('/postalestres',[ApiController::class,'postalestres'])->name('postalestres');

Route::get('/postalescuatro',[ApiController::class,'postalcuatro'])->name('postalcuatro');

Route::get('/postalescinco',[ApiController::class,'postalcinco'])->name('postalcinco');



