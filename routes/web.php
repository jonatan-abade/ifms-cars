<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [PagesController::class, 'index']);
Route::get('sobre', [PagesController::class, 'sobre']);

Route::get('carros', [CarroController::class, 'index']);
Route::get('carro/create', [CarroController::class, 'create'])->middleware('auth');
Route::post('carro', [CarroController::class, 'store'])->middleware('auth');
Route::get('carro/{id}', [CarroController::class, 'edit'])->middleware('auth');
Route::put('carro', [CarroController::class, 'update'])->middleware('auth');
Route::delete('carro/{id}', [CarroController::class, 'destroy'])->middleware('auth');
Route::get('carro/show/{id}', [CarroController::class, 'show']);

Route::get('motos', [MotoController::class, 'index']);
Route::get('moto/create', [MotoController::class, 'create']);
Route::post('moto', [MotoController::class, 'store'])->middleware('auth');
Route::get('moto/{id}', [MotoController::class, 'edit'])->middleware('auth');
Route::put('moto', [MotoController::class, 'update'])->middleware('auth');
Route::delete('moto/{id}', [MotoController::class, 'destroy'])->middleware('auth');
Route::get('moto/show/{id}', [MotoController::class, 'show']);


Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categoria/create', [CategoriaController::class, 'create'])->middleware('auth');
Route::post('categoria', [CategoriaController::class, 'store'])->middleware('auth');
Route::get('categoria/{id}', [CategoriaController::class, 'edit'])->middleware('auth');
Route::put('categoria', [CategoriaController::class, 'update'])->middleware('auth');
Route::delete('categoria/{id}', [CategoriaController::class, 'destroy'])->middleware('auth');
