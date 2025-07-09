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
                
                <a href="{{ url('/home') }}" class="header-logo">
                    <img class="logo-sigma-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_2_Vector_Header.svg') }}">
                </a>

                <nav class="header-nav">
                    <ul class="nav-menu">
                        <li><a href="home" id="home">Home</a></li>
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
                <div class="mobile-nav">
                    <a href="home">Home</a>
                    <a href="peminjaman">Peminjaman</a>
                    <a href="informasi">Informasi</a>
                    <a href="bookingansaya">Bookingan Saya</a>
                    <a href="login">Login</a>
                </div>

            </div>
        </header>

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
            // Logika untuk tombol hamburger
            hamburgerBtn.addEventListener('click', () => {
                hamburgerBtn.classList.toggle('open');
                mobileNav.classList.toggle('open');
                document.body.classList.toggle('no-scroll');
            });

            //Kalender
            document.addEventListener('DOMContentLoaded', function() {
                const dateInput = document.getElementById('booking-date');
                const dateForm = document.getElementById('date-selection-form');

            // Set tanggal minimum di kalender ke hari ini
            const dateInput = document.getElementById('booking-date');
            if (dateInput) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);

            // Tambahkan event listener untuk auto-submit
                dateInput.addEventListener('change', function() {
                    // Cek jika input tanggal tidak kosong sebelum submit
                    if (this.value) {
                        dateForm.submit();
                    }
                });
            }
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>