<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\AccesorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------    -------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/equipos', EquipoController::class);

Route::resource('/accesorios', AccesorioController::class);



Route::get('/principal', function () {
    return view('vistaprueba');
});

// Route::get('/detalleequipos', function () {
//     return view('detalleequipos');
// });

<<<<<<< HEAD
// Auth::routes(
=======
Route::get('/datosequipo', function () {
    return view('datosequipo');
});

Auth::routes();
>>>>>>> origin/Alex

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
