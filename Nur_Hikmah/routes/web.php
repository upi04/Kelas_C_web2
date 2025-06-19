<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/skill', function () {
    return view('skill');
});
Route::get('/about_hikmah', function () {
    return view('about');
});
Route::get( '/produk', [contohcontroller::class, 'index']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/skill', [SkillController::class, 'index']);
Route::get('/message', [MessageController::class, 'index']);
Route::post('/message', [MessageController::class, 'store']);
Route::get('/message/delete/{id}', [MessageController::class, 'destroy']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
