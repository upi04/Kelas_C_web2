<?php

use Illuminate\Support\Facades\Route;



Route::get('/file2', function () {
    return view('file2');
});

Route::get('/file3', function () {
    return view('file3');
});

Route::get('/file1', function () {
    return view('file1');
});

