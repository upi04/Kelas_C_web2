<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Cpert4;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/contoh', [ContohController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/skill', [SkillController::class, 'index']);
Route::get('/message', [MessageController::class, 'index']);
Route::post('/message', [MessageController::class, 'store']);
Route::get('/message/delete/{id}', [MessageController::class, 'destroy']);
Route::get('/pertemuan4', [Cpert4::class, 'index']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);

// Laporan 5
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
