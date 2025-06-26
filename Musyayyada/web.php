<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;

// Halaman utama (opsional)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk daftar mahasiswa
Route::get('/student', [StudentController::class, 'index']);

// Route untuk daftar buku
Route::get('/books', [BookController::class, 'index']);

//pertemuan 5
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
