<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

// --- RUTAS ABIERTAS (Sin middleware) ---

Route::get('/verificar-edad', function () { 
    return view('verificar-edad'); 
})->name('verificar.edad');

Route::post('/guardar-edad', function (Request $request) {
    session(['mayor_de_edad' => true]);
    return redirect()->route('inicio'); 
})->name('guardar.edad');


// --- RUTAS PROTEGIDAS (Con tu Middleware) ---

Route::middleware([\App\Http\Middleware\MayorDeEdad::class])->group(function () {

    Route::get('/', [ProductoController::class, 'inicio'])->name('inicio');
    Route::get('/mapa', [MapaController::class, 'index'])->name('mapa');
    Route::get('/historia/{slug}', [MapaController::class, 'show'])->name('historia');
    Route::get('/catalogo', [ProductoController::class, 'index'])->name('catalogo');

    // Rutas de Invitados
    Route::middleware('guest')->group(function () {
        Route::get('/registro', [AuthController::class, 'create'])->name('registro');
        Route::post('/registro', [AuthController::class, 'store'])->name('registro.post');
        Route::get('/login', function () { return view('login'); })->name('login');
        Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
    });

    // Rutas de Usuarios Autenticados
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
        Route::post('/carrito/add/{id}', [CarritoController::class, 'add'])->name('carrito.add');
        Route::post('/carrito/remove/{id}', [CarritoController::class, 'remove'])->name('carrito.remove');
        Route::post('/carrito/update/{id}', [CarritoController::class, 'update'])->name('carrito.update');
        
        Route::post('/pedido/store', [PedidoController::class, 'store'])->name('pedido.store');
    });
});