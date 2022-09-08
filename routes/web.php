<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

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


Route::get('/equipos', [EquipoController::class, 'index']);





Route::get('/a', function () {   
    return view('livewire.detalle');
})->name('aa');

// Route::get('/principal', function () {
//     return view('principal');
// });

// Route::get('/detalleequipos', function () {
//     return view('detalleequipos');
// });

// Auth::routes(

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
