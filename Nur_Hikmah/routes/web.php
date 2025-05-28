<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;

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
Route::get( '/produk',action:[contohcontroller::class, 'index']);
Route::get('/home', [HomeController::class,'index']);
