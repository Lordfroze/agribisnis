<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
