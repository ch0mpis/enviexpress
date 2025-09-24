<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifa\TarifaController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])
->resource('Tarifa',TarifaController::class)
->names('Tarifa')
->parameters(['Tarifa' => 'tarifa']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});