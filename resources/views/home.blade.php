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
  <title>Beranda | SIGMA</title>
</head>
<body>

    <div class="notloginhome">
    
        <!-- Header -->
        <header class="header-main">
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

        <main>
        <!-- Hero Section sebagai Banner -->
        <section class="hero" style="background-image: url('{{ asset('storage/image/gambar_head.png') }}');">
                    <div class="container hero-inner">
                        <form action="/peminjaman" method="GET" class="hero-booking-form">
                            <!-- PERUBAHAN: Logo ditambahkan di sini -->
                            <img src="{{ asset('storage/image/LOGO_SIGMA_1_Vector.svg') }}" alt="Logo SIGMA" class="form-logo">
                            <div class="form-group">
                                <label for="booking-date">Pilih Tanggal Peminjaman</label>
                                <input type="date" id="booking-date" name="tanggal" required>
                            </div>
                            <button type="submit" class="btn-primary">Booking Sekarang</button>
                        </form>
                    </div>
                </section>

        <!-- Tentang SIGMA -->
        <section class="about-section">
            <div class="container">
                <h2 id="about-sigma" class="section-title">
                    <span>About </span><span class="text-yellow">SIGMA</span>
                </h2>
                <p class="section-subtitle">
                    SIGMA dikembangkan untuk memberikan solusi digital dalam memfasilitasi proses peminjaman gedung dan perlengkapan di kampus. SIGMA diharapkan dapat mempercepat proses peminjaman dan memastikan transparansi dalam hal ketersediaan gedung, aturan peminjaman, dan informasi terkait gedung.
                </p>
            </div>
        </section>

        <section class="gallery-section">
            <div class="staggered-gallery">
                <img src="{{ asset('storage/image/Ruang_Kelas.jpg') }}" alt="Ruang kelas dengan kursi" class="gallery-item item-1">
                <img src="{{ asset('storage/image/ac.jpg') }}" alt="Air Conditioner di dinding" class="gallery-item item-2">
                <img src="{{ asset('storage/image/Ruang_Diskusi.jpg') }}" alt="Ruang kelas dengan whiteboard" class="gallery-item item-3">
                <img src="{{ asset('storage/image/Dekanat_Mipa.jpg') }}" alt="Gedung Fakultas MIPA" class="gallery-item item-center">
                <img src="{{ asset('storage/image/RektoratDrone1.jpeg') }}" alt="Gedung dari sudut lain" class="gallery-item item-4">
                <img src="{{ asset('storage/image/Kelas_Kosong.jpg') }}" alt="Ruang kelas kosong" class="gallery-item item-5">
                <img src="{{ asset('storage/image/proyektor.jpg') }}" alt="Meja dan TV di ruang kelas" class="gallery-item item-6">
            </div>
        </section>

        </main>

        <!-- Footer -->
        <footer class="footer-main">
                <div class="container footer-grid">
                    <div class="footer-col">
                        <img src="{{ asset('storage/image/LOGO_SIGMA_3_Vector_Footer.svg') }}" alt="Logo SIGMA Udayana" class="footer-logo">
                        <nav class="footer-links">
                            <a href="#">Tentang SIGMA</a>
                            <a href="#">FAQ</a>
                            <a href="#">S&K</a>
                            <a href="#">Kebijakan Privasi</a>
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
         document.addEventListener('DOMContentLoaded', function() {
            const dateForm = document.getElementById('date-selection-form');

            // Set tanggal minimum di kalender ke hari ini
            const dateInput = document.getElementById('booking-date');
            if (dateInput && dateForm) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);
            }
            });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
