<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('landingpage');
});

Route::get('/tes', function () {
    return 'hello world';
});