<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/contact', function () {
    return view('contact');
});


