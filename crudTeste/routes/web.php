<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\EmailController;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('produto_view');
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('cadastrar_produto');
Route::get('/vendas/novo', [VendasController::class, 'create'])->name('vendas_view');
Route::post('/vendas/novo', [VendasController::class, 'store'])->name('cadastrar_vendas');
Route::get('/vendedor/novo', [VendedoresController::class, 'create'])->name('vendedor_view');
Route::post('/vendedor/novo', [VendedoresController::class, 'store'])->name('cadastrar_vendedor');
Route::get('/vendas', [VendasController::class, 'listar'])->name('listar_vendas');
Route::get('/email', [EmailController::class, 'index'])->name('email');
Route::get('/email/enviar', [EmailController::class, 'enviar'])->name('enviar_email');


