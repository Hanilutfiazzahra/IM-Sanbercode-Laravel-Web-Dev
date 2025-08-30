<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\IsAdmin;


Route::get('/', [DashboardController:: class, 'home']);
Route::get('/register', [FormController::class, 'register']);

Route::get('/welcome', [DashboardController::class, "welcome"]);

Route::get('/master', function () {
    return view('layout.master');
});

Route::middleware(['auth', isAdmin::class])->group(function () {
        // Create Genre
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);

        // UPDATE
    Route::get('genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('genre/{id}', [GenreController::class, 'update']);

    // DELETE
    Route::delete('genre/{id}', [GenreController::class, 'destroy']);

      

});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/profile', [AuthController::class, 'getprofile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'createprofile'])->middleware('auth');
Route::put('/profile/{id}', [AuthController::class, 'updateprofile'])->middleware('auth');

Route::post('/comments/{book_id}', [CommentController::class, 'store'])->middleware('auth');

// READ
Route::get('genre', [GenreController::class, 'index']);
Route::get('genre/{id}', [GenreController::class, 'show']);

// CRUD BOOK
Route::resource('book', BookController::class);

// Auth
// Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);

// Login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

