<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ArticuloController;
use Illuminate\Support\Facades\Auth;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
    return view('welcome');
});

Route::resource('articulos', ArticuloController::class);

Route::get('/home', [ArticuloController::class, 'index'])->name('articulos');

Route::get('articulos/{id}', [ArticuloController::class, 'show'])->name('detalleArticulo');

Route::delete('articulos/{id}', [ArticuloController::class, 'destroy'])->name('borrarArticulo');

Route::get('articulos/{id}/create', [ArticuloController::class, 'create'])->name('crearArticulo');

Route::post('articuloCreate/', [ArticuloController::class, 'store'])->name('nuevoArticulo');

Auth::routes();

