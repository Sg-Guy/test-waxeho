<?php

use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\MembreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix("membres")->controller(MembreController::class)->group(function () {
    Route::get("/", "index");
    Route::post("/", "store");
    Route::get("/{membre}", "show");
    Route::delete("/{membre}", "destroy");
});

Route::prefix("livres")->controller(LivreController::class)->group(function () {
    Route::get("/", "index");
    Route::post("/", "store");
    Route::get("/{livre}", "show");
    Route::delete("/{livre}", "destroy");
});

Route::prefix("emprunts")->controller(EmpruntController::class)->group(function () {
    Route::get("/", "index");
    Route::post("/", "store");
    Route::get("/{livre}", "show");
    Route::delete("/{livre}", "destroy");
});
