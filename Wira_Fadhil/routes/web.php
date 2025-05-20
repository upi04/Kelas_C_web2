<?php

use Illuminate\Support\Facades\Route;

Route::get('/biodata', function() {
    return view('welcome');
});

Route::get('/contact', function() {
    return view('Biodata.contact');
});
Route::get('/home', function() {
    return view('Biodata.home');
});
Route::get('/skills', function() {
    return view('Biodata.about');
});
Route::get('/about', function() {
    return view('Biodata.about');
});
