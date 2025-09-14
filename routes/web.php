<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cse', function () {
    return view('cse');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});