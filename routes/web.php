<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

// Rute halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menampilkan data Genre
Route::get('/genres', [GenreController::class, 'index']);

// Rute untuk menampilkan data Author
Route::get('/authors', [AuthorController::class, 'index']);
