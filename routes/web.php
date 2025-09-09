<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Asignacione\AsignacioneController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])
->resource('Asignacione', AsignacioneController::class)
->names('Asignacione');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});