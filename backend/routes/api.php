<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/receptek", [ReceptekController::class, 'index']);
Route::post("/receptek/", [ReceptekController::class, 'store']);
Route::delete("/receptek/{id}", [ReceptekController::class, 'destroy']);

Route::get("/kategoria/{id}", [KategoriaController::class, 'show']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
