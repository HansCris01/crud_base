<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
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

Route::get('/', [PersonaController::class,'index']);



Route::resource('/persona',PersonaController::class);

Route::get('persona/agregar',[PersonaController::class,'create']);
Route::post('persona/store', [PersonaController::class, 'store']);
Route::get('persona/edit', [PersonaController::class, 'edit']);
Route::get('persona/destroy', [PersonaController::class, 'destroy']);