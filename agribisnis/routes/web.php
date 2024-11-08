<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog',[BlogController::class, 'index']);

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/yoga', function () {
    return view('landingpage.index');
});