<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking; // Pastikan untuk mengimpor Model Booking Anda
use Carbon\Carbon; // Digunakan untuk membuat objek tanggal dan waktu

class BookingSeeder extends Seeder
{
    /**
     * Jalankan seed database.
     */
    public function run(): void
    {
        // Contoh data peminjaman 1: Menunggu Konfirmasi
        Booking::create([
            'subject' => 'Peminjaman Ruang Kuliah F',
            'name' => 'Jepan',
            'nim' => '2308561000',
            'study_program' => 'Informatika',
            'loan_document_path' => 'documents/seminar_budi.pdf', // Contoh path file
            'booking_date' => Carbon::parse('2025-07-11'), // Tanggal 20 Juli 2024
            'start_time' => Carbon::parse('09:00:00'),
            'end_time' => Carbon::parse('12:00:00'),
            'room_name' => 'Dekanat 2.2',
            'image_url' => 'https://placehold.co/600x400/E0E0E0/333333?text=Ruang+A.101',
            'status' => 'pending', // Status default
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Contoh data peminjaman 2: Dikonfirmasi
        Booking::create([
            'subject' => 'Kuliah Agama Kristen',
            'name' => 'Sherly',
            'nim' => '23085610062',
            'study_program' => 'Informatika',
            'loan_document_path' => null, // Tidak ada dokumen
            'booking_date' => Carbon::parse('2025-07-10'),
            'start_time' => Carbon::parse('13:30:00'),
            'end_time' => Carbon::parse('16:30:00'),
            'room_name' => 'Labkom 1',
            'image_url' => 'https://placehold.co/600x400/D0D0D0/222222?text=Lab+Fisika',
            'status' => 'confirmed',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Contoh data peminjaman 3: Ditolak
        Booking::create([
            'subject' => 'Peminjaman Labkom 2',
            'name' => 'Dipa',
            'nim' => '2308561001',
            'study_program' => 'Sastra Mesin',
            'loan_document_path' => 'documents/wisuda_dewi.pdf',
            'booking_date' => Carbon::parse('2025-07-25'),
            'start_time' => Carbon::parse('08:00:00'),
            'end_time' => Carbon::parse('17:00:00'),
            'room_name' => 'Ruang Dekan',
            'image_url' => 'https://placehold.co/600x400/C0C0C0/111111?text=Aula+Serbaguna',
            'status' => 'rejected',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Tambahkan lebih banyak data dummy di sini jika diperlukan
    }
}

