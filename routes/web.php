<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class, 'index'])->name('index');
Route::get('/ordem',[UserController::class,'ordem']);
Route::post('/ordem',[UserController::class, 'Enviar_Chamado'])->name('Enviar_Chamado');
Route::get('/mostrarordem',[UserController::class,'show']);
Route::post('/mostrarordem',[UserController::class, 'show_protocolo']);
Route::get('/mostrarordemm',[UserController::class, 'show_protocolo']);
Route::post('/mostrarordemm',[UserController::class, 'show_protocolo']);
//Route::resource('/index', UserController::class);