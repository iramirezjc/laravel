<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\MobiliariosController;

Route::get('/', function () {
    return view('Welcome');
});

Route::resource('equipos', EquiposController::class);
Route::resource('mobiliarios', MobiliariosController::class);
Route::resource('materiales', MaterialesController::class);
