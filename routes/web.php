<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoController;

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


Route::redirect('/', '/carrinho');

Route::get('/carrinho', [CarrinhoController::class, 'getProdutos']);
Route::get('/carrinho/adicionar', [CarrinhoController::class, 'formAdicionar']);
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar']);

