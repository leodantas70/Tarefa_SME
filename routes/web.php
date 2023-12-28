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
Route::get('/chamado',[UserController::class,'chamado']);
Route::post('/chamado',[UserController::class, 'Enviar_Chamado']);
Route::get('/pesquisa',[UserController::class,'show']);
Route::get('/pesquisa_chamado',[UserController::class,'show_protocolo']);
//Route::post('/mostrarordemm',[UserController::class, 'show_protocolo']);
//Route::get('/mostrarordemm',[UserController::class, 'Adicionar_Mensagem']);
Route::post('/mostrarordem',[UserController::class, 'Adicionar_Mensagem']);
Route::get('/login',[UserController::class,'login']);
//Route::resource('/index', UserController::class);