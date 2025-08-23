<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;


Route::get('/', [DashboardController:: class, 'home']);
Route::get('/register', [FormController::class, 'register']);

Route::post("/welcome", [FormController::class, "kirim"]);

Route::get('/master', function () {
    return view('layout.master');
});

// Create Genre
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);

// READ
Route::get('genre', [GenreController::class, 'index']);
Route::get('genre/{id}', [GenreController::class, 'show']);

// UPDATE
Route::get('genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('genre/{id}', [GenreController::class, 'update']);

// DELETE
Route::delete('genre/{id}', [GenreController::class, 'destroy']);