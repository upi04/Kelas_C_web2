<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodata;

route ::get('/biodata', [Biodata::class, 'HomeController']);

Route::get('/', function () {
    return view('welcome');
});


