<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'name',
        'nim',
        'study_program',
        'loan_document_path',
        'booking_date',
        'start_time',
        'end_time',
        'room_name',
        'image_url',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Mengubah waktu dan tanggal menjadi objek Carbon
        'booking_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    /**
     * Accessor untuk memformat waktu mulai (HH:mm).
     * @return string
     */
    public function getFormattedStartTimeAttribute()
    {
        // Pastikan $this->start_time adalah objek Carbon
        if ($this->start_time instanceof \Carbon\Carbon) {
            return $this->start_time->format('H:i');
        }
        return $this->start_time; // Mengembalikan nilai asli jika bukan objek Carbon
    }

    /**
     * Accessor untuk memformat waktu selesai (HH:mm).
     * @return string
     */
    public function getFormattedEndTimeAttribute()
    {
        if ($this->end_time instanceof \Carbon\Carbon) {
            return $this->end_time->format('H:i');
        }
        return $this->end_time;
    }

    /**
     * Accessor untuk memformat tanggal booking (misal: 15 Juli 2024).
     * @return string
     */
    public function getFormattedBookingDateAttribute()
    {
        if ($this->booking_date instanceof \Carbon\Carbon) {
            return $this->booking_date->translatedFormat('d F Y');
        }
        return $this->booking_date;
    }
}