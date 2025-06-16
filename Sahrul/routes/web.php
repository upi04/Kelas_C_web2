<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

<<<<<<< HEAD:Wira_Fadhil/project-laravel/routes/web.php
route::get('/Biodata.about', [BiodataController::class, 'HomeController']);

Route::get('/contact', function() {
    return view('Biodata.contact');
});
Route::get('/home', function() {
    return view('Biodata.home');
});
Route::get('/', function() {
=======
Route::get('/', function () {
>>>>>>> e0029a73f1685d3f9f7aca48d14b39acfb0f0863:Sahrul/routes/web.php
    return view('welcome');
});
