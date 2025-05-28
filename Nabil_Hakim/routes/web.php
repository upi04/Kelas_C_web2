<?php

use Illuminate\Support\Facades\Route;
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
