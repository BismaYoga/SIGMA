<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
    public function admin()
    {
        // Mengambil semua data peminjaman dari database
        $bookings = Booking::all();

        // Mengirim data ke tampilan Blade
        return view('admin.dashboard', compact('bookings'));
    }
    public function create()
    {
        return view('bookings.create');
    }
    
    public function update(Request $request, Booking $booking)
    {
        // Validasi input status
        $validatedData = $request->validate([
            // Memastikan status yang dikirimkan adalah salah satu dari 'pending', 'confirmed', atau 'rejected'
            'status' => 'required|in:pending,confirmed,rejected',
        ]);

        try {
            // Perbarui status booking di database
            $booking->update([
                'status' => $validatedData['status'],
            ]);

            // Redirect kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Status booking berhasil diperbarui.');

        } catch (\Exception $e) {
            // Tangani error jika update gagal
            Log::error('Error updating booking status: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Gagal memperbarui status. Silakan coba lagi.');
        }
    }

    public function store(Request $request)
    {
        // 1. Validasi Data
        $validatedData = $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20', // Removed unique constraint to allow same NIM multiple bookings
            'study_program' => 'required|string|max:255',
            'loan_document' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Untuk upload dokumen
            'booking_date' => 'required|date|after_or_equal:today', // Tanggal booking harus hari ini atau setelahnya
            'start_time' => 'required|date_format:H:i', // Format waktu HH:mm
            'end_time' => 'required|date_format:H:i|after:start_time', // Format waktu HH:mm, harus setelah start_time
            'room_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Untuk upload gambar
            // 'status' tidak perlu divalidasi karena akan diisi default atau diatur secara internal
        ]);

        $loanDocumentPath = null;
        if ($request->hasFile('loan_document')) {
            $loanDocumentPath = $request->file('loan_document')->store('public/documents');
            $validatedData['loan_document_path'] = Storage::url($loanDocumentPath); // Simpan path yang bisa diakses publik
        }

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $imageUrl = $request->file('image')->store('public/images');
            $validatedData['image_url'] = Storage::url($imageUrl); // Simpan URL yang bisa diakses publik
        }

        // 2. Simpan Data ke Database
        // Karena 'status' memiliki nilai default di migrasi, kita tidak perlu menambahkannya di sini
        // kecuali jika ada input form untuk status yang ingin di-override.
        // Jika Anda ingin mengatur status secara manual, tambahkan:
        // $validatedData['status'] = 'pending'; // Atau dari input form jika ada

        Booking::create($validatedData);

        // 3. Redirect dengan pesan sukses
        return redirect()->route('bookings.create')
                         ->with('success', 'Booking berhasil dibuat!');
    }
}