<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;



Route::get('/', function () {
    return view('welcome');
});


//agregamos esto, para que se creen todas las rutas de get, put, edit, etc
Route::resource("project", ProyectoController::class);