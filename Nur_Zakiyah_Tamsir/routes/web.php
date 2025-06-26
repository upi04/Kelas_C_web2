<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/skills', function () {
//     return view('skills');
// });
// Route::get('/contact', function () {
//    return view('contact');
// });
// Route::get('/home', function () {
//    return view('home');
// });
// Route::get('/project', function () {
//     return view('project');
// });


// Route::get('/produk', [contohcontroller ::class,'index']);
    
Route::get('/biodata', [HomeController::class, 'biodata']);
Route::get('/books', [bookController::class, 'index']);
