<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ReclamacionesController;

// use App\Mail\EnvioCorreoMailable;
// // use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('register',[PaisController::class,'index'])->name('register');
Route::get('persona',[PersonaController::class,'index']);
Route::get('reclamaciones',[ReclamacionesController::class,'index'])->name('reclamaciones');
Route::post('reclamaciones',[ReclamacionesController::class,'store'])->name('reclamaciones');


// Route::get('envio', function () {
//     $correo = new EnvioCorreoMailable;

//     Mail::to('adrianpalaciosmedrano@gmail.com')->send($correo);

//     return "Mensaje Enviado";
// });