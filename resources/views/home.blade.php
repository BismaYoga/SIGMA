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
            <a href="#">Peminjaman</a>
            <a href="#">Informasi</a>
            <a href="#">Bookingan Saya</a>
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
                <img src="https://placehold.co/400x600/a9a9a9/ffffff?text=Ruang+Kelas" alt="Ruang kelas dengan kursi" class="gallery-item item-1">
                <img src="{{ asset('storage/image/ac.jpg') }}" alt="Air Conditioner di dinding" class="gallery-item item-2">
                <img src="https://placehold.co/400x400/d3d3d3/ffffff?text=Ruang+Diskusi" alt="Ruang kelas dengan whiteboard" class="gallery-item item-3">
                <img src="{{ asset('storage/image/Dekanat_Mipa.jpg') }}" alt="Gedung Fakultas MIPA" class="gallery-item item-center">
                <img src="{{ asset('storage/image/RektoratDrone1.jpeg') }}" alt="Gedung dari sudut lain" class="gallery-item item-4">
                <img src="https://placehold.co/400x500/f5f5f5/ffffff?text=Kelas+Kosong" alt="Ruang kelas kosong" class="gallery-item item-5">
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
            // Logika untuk tombol hamburger
            hamburgerBtn.addEventListener('click', () => {
                hamburgerBtn.classList.toggle('open');
                mobileNav.classList.toggle('open');
                document.body.classList.toggle('no-scroll');
            });

            // Set tanggal minimum di kalender ke hari ini
            const dateInput = document.getElementById('booking-date');
            if (dateInput) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);
            }
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
