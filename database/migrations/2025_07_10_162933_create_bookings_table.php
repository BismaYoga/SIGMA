<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_bookings_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi (membuat tabel).
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // id: Primary key auto-increment

            // --- Data dari Formulir Peminjaman ---
            $table->string('subject')->nullable();       // Perihal Peminjaman
            $table->string('name');                      // Nama Peminjam
            $table->string('nim');                       // NIM Peminjam
            $table->string('study_program')->nullable(); // Program Studi Peminjam
            $table->string('loan_document_path')->nullable(); // Surat Peminjaman (Path file)

            // --- Waktu dan Tanggal Booking ---
            $table->date('booking_date')->nullable();   // Tanggal booking
            $table->time('start_time');                 // Waktu Peminjaman
            $table->time('end_time');                   // Waktu Pengembalian

            // --- Data untuk Tampilan Card ---
            $table->string('room_name')->nullable();     // Ruang Kuliah 1.1
            $table->string('image_url')->nullable();     // URL Gambar Latar Belakang
            
            // --- Status Booking ---
            $table->string('status')->default('pending'); // Status (default 'pending' / 'Menunggu Konfirmasi')

            // --- Relasi (Opsional, jika Anda menggunakan pengguna terautentikasi) ---
            // Jika Anda ingin booking terhubung dengan pengguna yang login:
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Mengembalikan migrasi (menghapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};