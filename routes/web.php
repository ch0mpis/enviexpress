<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifa\TarifaController;
use App\Http\Controllers\Guia\GuiaController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


    Route::resource('guias', GuiaController::class)
        ->names('guias')
        ->parameters(['guias' => 'guia']);

    Route::resource('tarifas', TarifaController::class)
        ->names('tarifas')
        ->parameters(['tarifas' => 'tarifa']);

