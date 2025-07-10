<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController; 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/peminjaman/InformasiRuangan', function () {
    return view('peminjaman-InformasiRuangan');
});

Route::get('/bookingansaya', function () {
    return view('bookingansaya');
})->middleware(['auth', 'verified'])->name('bookingansaya');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/snk', function () {
    return view('snk'); // memanggil snk.blade.php
})->name('snk');

Route::get('/tentangsigma', function () {
    return view('tentangsigma'); 
})->name('tentangsigma');

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi'); 
})->name('kebijakanprivasi');