<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

route::get('/Biodata.about', [BiodataController::class, 'HomeController']);

Route::get('/contact', function() {
    return view('Biodata.contact');
});
Route::get('/home', function() {
    return view('Biodata.home');
});
Route::get('/', function() {
    return view('welcome');
});
