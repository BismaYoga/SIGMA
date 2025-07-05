<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/bookingansaya', function () {
    return view('bookingansaya');
});