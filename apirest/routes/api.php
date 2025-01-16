<?php

use App\Http\Controllers\PlanosController;
use App\Http\Controllers\ProductController;

//Route::apiResource('PlanosController',PlanosController::class, 'index');
Route::get('/planos', [PlanosController::class, 'index']);
Route::post('/planos', [PlanosController::class, 'create']);
Route::put('/planos{id}', [PlanosController::Class, 'update']);
Route::post('/produtos', [ProductController::class,'store']);
Route::get('/produtos', [ProductController::class, 'index']);
