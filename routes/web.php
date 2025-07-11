<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

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

Route::get('/peminjaman/FormulirPeminjaman', function () {
    return view('peminjaman-FormulirPeminjaman');
});

Route::get('/bookingansaya', [BookingController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('bookingansaya');

// Route FAQ Utama
Route::get('/faq', function () {
    return view('faq.index');
})->name('faq.index');

// Route Halaman per Kategori
Route::get('/faq/pemesanan', function () {
    return view('faq.pemesanan');
})->name('faq.pemesanan');

Route::get('/faq/status', function () {
    return view('faq.status');
})->name('faq.status');

Route::get('/faq/fasilitas', function () {
    return view('faq.fasilitas');
})->name('faq.fasilitas');

Route::get('/faq/pembayaran', function () {
    return view('faq.pembayaran');
})->name('faq.pembayaran');

Route::get('/faq/teknis', function () {
    return view('faq.teknis');
})->name('faq.teknis');

Route::get('/snk', function () {
    return view('snk'); // memanggil snk.blade.php
})->name('snk');

Route::get('/tentangsigma', function () {
    return view('tentangsigma'); 
})->name('tentangsigma');

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi'); 
})->name('kebijakanprivasi');