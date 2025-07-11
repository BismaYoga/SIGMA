<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    // Menampilkan formulir input
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswas',
        ]);

        // Simpan data ke database
        Mahasiswa::create($validated);

        // Redirect pengguna kembali dengan pesan sukses
        return redirect()->route('mahasiswa.create')
                         ->with('success', 'Data Mahasiswa berhasil disimpan!');
    }
}
