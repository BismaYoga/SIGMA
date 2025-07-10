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
  <title>Peminjaman | SIGMA</title>
</head>

<body> 
    <div class="notloginpeminjaman">
        <!-- Header -->
        <header class="header-main">
            <div class="header-container">
                
                <a href="{{ url('/') }}" class="header-logo">
                    <img class="logo-sigma-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_2_Vector_Header.svg') }}">
                </a>

                <nav class="header-nav">
                    <ul class="nav-menu">
                        <li><a href="/" id="home">Home</a></li>
                        <li><a href="/peminjaman" id="peminjamanText">Peminjaman</a></li>
                        <li><a href="/informasi" id="informasiText">Informasi</a></li>
                        <li><a href="/bookingansaya" id="bookinganSayaText">Bookingan Saya</a></li>
                        <li><a href="login" id="loginText">Login</a></li>
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
            <!-- Banner -->
            <section class="page-banner_informasiRuangan" style="background-image: url('{{ asset('storage/image/Banner_InformasiRuangan.png') }}');"></section>

            <!-- Room Detail Section -->
            <section class="room-detail-section">
                <div class="container">
                    <div class="room-detail-content">
                        <!-- Room Title -->
                        <h1 class="room-title">Ruang Kuliah 1.1</h1>
                        
                        <!-- Room Description -->
                        <div class="room-description">
                            <p>Ruang Kuliah 1.1 merupakan sebuah ruang yang memiliki fokus untuk digunakan dalam kegiatan perkuliahan. Tempatnya yang strategis berada di depan ruang koordinator program studi, memberikan akses dalam berkoordinasi terkait perkuliahan. Di sisi lain, ruang perkuliahan ini juga dapat digunakan untuk berbagai kegiatan lainnya seperti rapat, seminar, dan kegiatan lainnya yang berkaitan dengan perkuliahan.</p>
                        </div>

                        <!-- Facilities Section -->
                        <div class="facilities-section">
                            <h2 class="facilities-title">Fasilitas :</h2>
                            <div class="facilities-grid">
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">AC</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">1 Meja Dosen</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">24 Meja</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">1 Bangku Dosen</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">24 Bangku</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">Layar Proyektor</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">LCD Proyektor</span>
                                </div>
                                <div class="facility-item">
                                    <span class="facility-icon">✓</span>
                                    <span class="facility-text">Kabel HDMI</span>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Button -->
                        <div class="booking-button-section">
                            <a href="/peminjaman/FormulirPeminjaman" class="btn-primary booking-btn">Booking Ruangan Sekarang!</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer-main">
            <div class="container footer-grid">
                <div class="footer-col">
                    <img src="{{ asset('storage/image/LOGO_SIGMA_3_Vector_Footer.svg') }}" alt="Logo SIGMA Udayana" class="footer-logo">
                    <nav class="footer-links">
                        <a href="{{ route('tentangsigma') }}">Tentang SIGMA</a>
                        <a href="#">FAQ</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('booking-date');
            const dateForm = document.getElementById('date-selection-form');

            if (dateInput && dateForm) {
                // Set tanggal minimum ke hari ini
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);

                // Cek jika sudah ada tanggal di URL
                const urlParams = new URLSearchParams(window.location.search);
                const dateFromUrl = urlParams.get('tanggal');
                if (dateFromUrl) {
                    dateInput.value = dateFromUrl;
                } else {
                    // Jika tidak ada tanggal di URL, set ke hari ini
                    dateInput.value = today;
                }

                // Tambahkan event listener untuk auto-submit
                dateInput.addEventListener('change', function() {
                    if (this.value) {
                        dateForm.submit();
                    }
                });
            }
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>