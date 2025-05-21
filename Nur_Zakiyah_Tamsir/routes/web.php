<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
 });

 Route::get('/contact', function () {
    return view('contact');
 });

 Route::get('/home', function () {
   return view('home');
});

Route::get('/project', function () {
    return view('project');
});



