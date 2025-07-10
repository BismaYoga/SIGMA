<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Menampilkan daftar peminjaman.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data peminjaman dari database
        $bookings = Booking::all();

        // Mengirim data ke tampilan Blade
        return view('bookingansaya', compact('bookings'));
    }
}