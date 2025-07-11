<?php

// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Impor kelas Auth

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan pengguna sudah login (Auth::check())
        // DAN pastikan role pengguna adalah 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Jika admin, lanjutkan ke halaman yang diminta
        }

        // Jika pengguna tidak memiliki role 'admin', tolak akses
        // Anda bisa mengarahkan mereka ke halaman beranda atau menampilkan error 403.
        abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
