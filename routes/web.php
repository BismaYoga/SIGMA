<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController; 
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/peminjaman/FormulirPeminjaman', [BookingController::class, 'create'])->name('bookings.create');
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

Route::get('/bookingansaya', [BookingController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('bookingansaya');

Route::get('/faq', function () {
    return view('faq.index');
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

// Route::middleware(['auth', 'admin'])->group(function () {
    
//     // Rute-rute di sini hanya bisa diakses oleh admin yang sudah login
//     Route::get('/admin/dashboard', [BookingController::class, 'index']);
//     Route::get('/admin/edit', function () {
//         return view('admin.edit');
//     });
// });

Route::get('/admin/dashboard', [BookingController::class, 'admin'])
    ->middleware(['auth', 'admin']);

Route::get('/admin/edit', [BookingController::class, 'admin'])
    ->middleware(['auth', 'admin'])
    ->name('admin.edit');

Route::middleware(['auth', 'admin'])->group(function () {
    // ... rute lainnya ...

    // Rute untuk MENGEDIT data (GET)
    Route::get('/admin/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('admin.bookings.edit');

    // Rute untuk MEMPERBARUI data (PUT/PATCH)
    Route::put('/admin/bookings/{booking}', [BookingController::class, 'update'])->name('admin.bookings.update');
});

Route::get('/peminjaman/sukses', function () {
    return view('bookingSukses');
})->name('bookingSukses');