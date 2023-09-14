<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Primercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola',[Primercontroller::class,'index'] ) ;
Route::view('Inicio','Inicio');
Route::view('RedesSociales','RedesSociales');
Route::view('sede','sede');
Route::view('Menuprincipal','Menuprincipal');
// esto es parte del taller    
Route::get('/PimerController/{texto}', [PrimerController::class, 'index']);
Route::get('/ProductController@index');
use App\Http\Controllers\ContactoController;
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');
