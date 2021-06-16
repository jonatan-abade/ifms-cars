<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [PagesController::class, 'index']);

Route::get('carros', [CarroController::class, 'index']);
Route::get('carro/create', [CarroController::class, 'create']);
Route::post('carro', [CarroController::class, 'store']);
Route::get('carro/{id}', [CarroController::class, 'edit']);
Route::put('carro', [CarroController::class, 'update']);
Route::delete('carro/{id}', [CarroController::class, 'destroy']);
Route::get('carro/show/{id}', [CarroController::class, 'show']);

Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categoria/create', [CategoriaController::class, 'create']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('categoria/{id}', [CategoriaController::class, 'edit']);
Route::put('categoria', [CategoriaController::class, 'update']);
Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);
