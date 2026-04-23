<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\SelloDiscograficoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\ItemListaDeseosController;
use App\Http\Controllers\ItemCarritoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoComprasController;
use App\Http\Controllers\ListaDeseosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('artistas', ArtistaController::class);
Route::resource('sellos', SelloDiscograficoController::class);
Route::resource('generos', GeneroController::class);
Route::resource('tipos', TipoProductoController::class);
Route::resource('productos', ProductoController::class);

Route::resource('lista-deseos-items', ItemListaDeseosController::class);
Route::resource('lista-deseos', ListaDeseosController::class);
Route::resource('carrito-items', ItemCarritoController::class);
Route::resource('carrito-compras', CarritoComprasController::class);