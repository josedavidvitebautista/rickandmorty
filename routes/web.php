<?php

use Illuminate\Support\Facades\Route;

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
Route::get('inicio', [\App\Http\Controllers\ApiController::class, 'inicio'])->name('inicio');
Route::get('personaje/{id}', [\App\Http\Controllers\ApiController::class, 'detallepersonaje'])->name('detalle.personaje');

Route::get('/lool', function () {return view('generic');});
