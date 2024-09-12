<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', [CarController::class, 'welcome']);
Route::get('/modellen', [CarController::class, 'modellen']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::post('/cars', [CarController::class, 'store']);

Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');

Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');