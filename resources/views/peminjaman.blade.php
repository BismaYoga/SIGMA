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
                        <li><a href="peminjaman" id="peminjamanText">Peminjaman</a></li>
                        <li><a href="informasi" id="informasiText">Informasi</a></li>
                        <li><a href="bookingansaya" id="bookinganSayaText">Bookingan Saya</a></li>
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
            <section class="page-banner" style="background-image: url('{{ asset('storage/image/Banner_Dekanat.png') }}');">
                <div class="banner-content">
                    <h1 class="banner-title">Peminjaman</h1>
                </div>
            </section>

            <section class="date-selector-section">
                <div class="date-form-container">
                    <form id="date-selection-form" action="/peminjaman" method="GET">
                        <input type="date" id="booking-date" name="tanggal" required>
                        <!-- Tombol submit tidak diperlukan karena akan otomatis -->
                    </form>
                </div>
            </section>

            <section class="room-availability-section">
                <!-- LANTAI 1 -->
                <div class="availability-container">
                    <h2 class="floor-title">LANTAI 1</h2>
                    <div class="room-grid">
                        <a href="/peminjaman/InformasiRuangan" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 1.1">
                            <div class="room-label">RUANG 1.1</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 1.2">
                            <div class="room-label">RUANG 1.2</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 1.3">
                            <div class="room-label">RUANG 1.3</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 1.4">
                            <div class="room-label">RUANG 1.4</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Rapat_Senat.jpg') }}" alt="Ruang Senat">
                            <div class="room-label">RUANG SENAT</div>
                        </a>
                    </div>
                </div>

                <!-- LANTAI 2 -->
                <div class="availability-container">
                    <h2 class="floor-title">LANTAI 2</h2>
                    <div class="room-grid">
                        <a href="#" class="room-card partial">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 2.1">
                            <div class="room-label">RUANG 2.1</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 2.2">
                            <div class="room-label">RUANG 2.2</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 2.3">
                            <div class="room-label">RUANG 2.3</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 2.4">
                            <div class="room-label">RUANG 2.4</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 2.5">
                            <div class="room-label">RUANG 2.5</div>
                        </a>
                        <a href="#" class="room-card partial">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Rapat_Senat.jpg') }}" alt="Ruang Rapat">
                            <div class="room-label">RUANG RAPAT</div>
                        </a>
                    </div>
                </div>

                <!-- PERUBAHAN: LANTAI 3 -->
                <div class="availability-container">
                    <h2 class="floor-title">LANTAI 3</h2>
                    <div class="room-grid">
                        <a href="#" class="room-card partial">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 3.1">
                            <div class="room-label">RUANG 3.1</div>
                        </a>
                        <a href="#" class="room-card partial">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 3.2">
                            <div class="room-label">RUANG 3.2</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 3.3">
                            <div class="room-label">RUANG 3.3</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="{{ asset('storage/image/Informasi_Ruang_Kelas.jpg') }}" alt="Ruang 3.4">
                            <div class="room-label">RUANG 3.4</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Labkom.jpg') }}" alt="Lab Komputer 1">
                            <div class="room-label">LAB KOMPUTER 1</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="{{ asset('storage/image/Informasi_Labkom.jpg') }}" alt="Lab Komputer 2">
                            <div class="room-label">LAB KOMPUTER 2</div>
                        </a>
                    </div>
                </div>

                <!-- PERUBAHAN: ALAT-ALAT -->
                <div class="availability-container">
                    <h2 class="floor-title">ALAT-ALAT</h2>
                    <div class="room-grid">
                        <a href="#" class="room-card partial">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Proyektor" alt="Proyektor">
                            <div class="room-label">PROYEKTOR</div>
                        </a>
                        <a href="#" class="room-card partial">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Screen" alt="Screen">
                            <div class="room-label">SCREEN</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Sound" alt="Sound">
                            <div class="room-label">SOUND</div>
                        </a>
                        <a href="#" class="room-card available">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Mixer" alt="Mixer">
                            <div class="room-label">MIXER</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Papan+Tulis" alt="Papan Tulis">
                            <div class="room-label">PAPAN TULIS</div>
                        </a>
                        <a href="#" class="room-card unavailable">
                            <img src="https://placehold.co/300x200/e9ecef/6c757d?text=Komputer+AIO" alt="Komputer AIO">
                            <div class="room-label">KOMPUTER AIO</div>
                        </a>
                    </div>
                </div>
                </section>
            </section>

            <!-- PERUBAHAN: SECTION KETERANGAN -->
            <section class="legend-section">
                <h3 class="legend-title">Keterangan:</h3>
                <div class="legend-items">
                    <div class="legend-item">
                        <div class="legend-color-box" style="background-color: #dc3545;"></div>
                        <span>Tidak Ada Jam Tersedia</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color-box" style="background-color: #ffc107;"></div>
                        <span>Ada Jam Tersedia</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color-box" style="background-color: #28a745;"></div>
                        <span>Semua Jam Tersedia</span>
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