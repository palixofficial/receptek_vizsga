<?php

use App\Http\Controllers\ReceptekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/receptek", [ReceptekController::class, 'index']);
Route::post("/receptek/", [ReceptekController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
