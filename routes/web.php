<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NacionalController;
use App\Http\Controllers\InternacionalController;
use App\Http\Controllers\EducativoController;

Route::get('/', HomeController::class );
Route::prefix('nacional')->group(function () {
    Route::get('/', [NacionalController::class, 'index'])->name('nacional.index');
    Route::get('/{id}', [NacionalController::class, 'show'])->name('nacional.show');
    Route::get('/create', [NacionalController::class, 'create'])->name('nacional.create');
});
Route::prefix('internacional')->group(function () {
    Route::get('/', [InternacionalController::class, 'index'])->name('internacional.index');
    Route::get('/{id}', [InternacionalController::class, 'show'])->name('internacional.show');
    Route::get('/create', [InternacionalController::class, 'create'])->name('internacional.create');
});
Route::prefix('educativo')->group(function () {
    Route::get('/', [EducativoController::class, 'index'])->name('educativo.index');
    Route::get('/{id}', [EducativoController::class, 'show'])->name('educativo.show');
    Route::get('/create', [EducativoController::class, 'create'])->name('educativo.create');
});


