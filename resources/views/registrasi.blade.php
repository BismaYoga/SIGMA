<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href=""/>
  <link rel="icon" href="{{ asset('storage/image/ICON_SIGMA_PUTIH1.svg') }}">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham+Black:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans+Display:wght@400;700&display=swap" />
  <title>Registrasi | SIGMA</title>
</head>
<body>

    <div class="registrasi">
    
        <!-- Header -->
        <header class="header-static">
            <div class="header-container">
                
                <a href="{{ url('/') }}" class="header-logo">
                    <img class="logo-sigma-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_2_Vector_Header.svg') }}">
                </a>

                <nav class="header-nav">
                    <ul class="nav-menu">
                        <li><a href="/" id="home">Home</a></li>
                        <li><a href="peminjaman" id="peminjamanText">Peminjaman</a></li>
                        <li><a href="informasi" id="informasiText">Informasi</a></li>
                        
                        {{-- Logika untuk menu yang berubah sesuai status login --}}
                        @auth
                            {{-- Menu ini hanya muncul jika pengguna sudah login --}}
                            <li><a href="/bookingansaya">Bookingan Saya</a></li>
                            <li class="profile-menu">
                                <div class="profile-icon" id="profile-icon-trigger">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.992 0 .75.75 0 1 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z" /></svg>
                                </div>
                                <div class="profile-dropdown" id="profile-dropdown-menu">
                                    <a href="profile">Profil Saya</a>
                                    <a href="/settings">Pengaturan</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @else
                            {{-- Tampilkan Tombol Login jika pengguna adalah tamu --}}
                            <li class="nav-action-item"><a href="{{ route('login') }}">Login</a></li>
                        @endguest
                    </ul>
                </nav>
                <!-- Tombol Hamburger untuk Mobile -->
                <button class="hamburger-menu" aria-label="Buka menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </header>
        <div class="mobile-nav">
                <a href="/">Home</a>
                <a href="peminjaman">Peminjaman</a>
                <a href="informasi">Informasi</a>
                <a href="bookingansaya">Bookingan Saya</a>
                <a href="login">Login</a>
        </div>

        <!-- PERUBAHAN: Menggunakan tag <main> -->
        <main class="registration-container">
            <!-- PERUBAHAN: Menggunakan tag <aside> -->
            <aside class="logo-section">
                <img src="{{ asset('storage/image/ICON_SIGMA_PUTIH1.svg') }}" alt="Logo SIGMA">
            </aside>

            <!-- PERUBAHAN: Menggunakan tag <section> -->
            <section class="form-section">
                <form action="{{ route('register') }}" method="POST" class="registration-form">
                    @csrf

                    <div class="form-groupb">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="form-groupb">
                        <label for="phone">Nomor HP</label>
                        <input type="tel" id="phone" name="phone" placeholder="Masukkan Nomor HP" required>
                    </div>

                    <div class="form-groupb">
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>

                    <div class="form-groupb">
                        <label for="nim_nik">NIM / NIK</label>
                        <input type="text" id="nim_nik" name="nim_nik" placeholder="Masukkan NIM / NIK" required>
                    </div>

                    <div class="form-groupb">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>

                    <div class="form-groupb">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                    </div>

                    <div class="form-groupb">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Password Kembali" required>
                    </div>

                    <div class="terms-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Dengan ini saya menyetujui seluruh isi dari <a href="#">syarat dan ketentuan</a> Sistem Informasi Peminjaman Gedung Mahasiswa Fakultas Matematika dan Ilmu Pengetahuan Alam.</label>
                    </div>

                    <button type="submit" class="btn-submit">Lanjut</button>

                </form>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer-main">
                <div class="container footer-grid">
                    <div class="footer-col">
                        <img src="{{ asset('storage/image/LOGO_SIGMA_3_Vector_Footer.svg') }}" alt="Logo SIGMA Udayana" class="footer-logo">
                        <nav class="footer-links">
                            <a href="{{ route('tentangsigma') }}">Tentang SIGMA</a>
                            <a href="faq">FAQ</a>
                            <a href="{{ route('snk') }}">S&K</a>
                            <a href="{{ route('kebijakanprivasi') }}">Kebijakan Privasi</a>
                        </nav>
                    </div>
                    <div class="footer-col">
                        <b class="footer-heading">Reservasi</b>
                        <address>
                            <p>S: reservationfmipa@sigma.ac.id</p>
                            <p>T: +62 81234567891</p>
                        </address>
                        <b class="footer-heading">Pusat Bantuan</b>
                        <address>
                            <p>S: contact@sigma.ac.id</p>
                            <p>T: +62 81234567891</p>
                        </address>
                    </div>
                    <div class="footer-col">
                        <b class="footer-heading">Kantor</b>
                        <address>
                            <p>Gedung Dekanat FMIPA lantai 4<br>Jl. Raya Kampus Unud, Bukit Jimbaran</p>
                        </address>
                        <b class="footer-heading">Operasional</b>
                        <address>
                            <p>08.00 - 16.00 WITA</p>
                            <p>Monday - Friday</p>
                        </address>
                    </div>
                </div>
            </footer>
    </div>
    
    <script>
         
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
