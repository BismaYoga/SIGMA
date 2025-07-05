<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href=""/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham+Black:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans+Display:wght@400;700&display=swap" />
  <title>Beranda | SIGMA</title>
</head>
<body>

  <div class="notloginhome">
    
    <!-- Header -->
    <header class="header-notlogin">
        <div class="header-container">
            
            <a href="{{ url('/home') }}" class="header-logo">
                <img class="logo-sigma-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_2_Vector_Header.svg') }}">
            </a>
  
          <x-Navbar></x-Navbar>

        </div>
    </header>

    <main>
    <!-- Hero Section sebagai Banner -->
    <section class="hero" style="background-image: url('{{ asset('storage/image/gambar_head.png') }}')" aria-labelledby="hero-heading">
      
      <div class="hero-inner">
          
        <a href="{{ url('/booking') }}" class="rectangle-container">
            <div class="rectangle-div"></div>
            <div class="booking-sekarang">Booking Sekarang</div>
        </a>
        
        <div class="vector-parent">
            <img class="vector-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_1_Vector.svg') }}">

            <header class="hero-text">
                <h1 id="hero-heading" class="sistem-informasi">Sistem Informasi</h1>
                <p class="peminjaman-gedung-mahasiswa">Peminjaman Gedung Mahasiswa</p>
            </header>
        </div>
      
      </div>
    </section>

      <!-- Tentang SIGMA -->
      <section aria-labelledby="about-sigmabox">
        <div class="about-sigmaboxin">
          <h2 id="about-sigma" class="about-sigma">
          <span>About </span><span class="sigma">SIGMA</span>
        </h2>
        <p class="sigma-dikembangkan-untuk">
          SIGMA dikembangkan untuk memberikan solusi digital dalam memfasilitasi proses peminjaman gedung dan perlengkapan di kampus. SIGMA diharapkan dapat mempercepat proses peminjaman dan memastikan transparansi dalam hal ketersediaan gedung, aturan peminjaman, dan informasi terkait gedung.
        </p>

        </div>
        
      </section>
    </main>

    <x-Footer></x-Footer>

  </div>

  <script>
    document.getElementById("rectangle-bookingsekarang")?.addEventListener("click", () => {});
    document.getElementById("gedungDekanatFMIPA")?.addEventListener("click", () => {
      window.open("https://maps.app.goo.gl/2kcbHk3bmaQo9Cqv7");
    });

    document.getElementById("tentangSIGMAText")?.addEventListener("click", () => { 'tentang-sigma.html' });
    document.getElementById("fAQText")?.addEventListener("click", () => {});
    document.getElementById("sKText")?.addEventListener("click", () => {});
    document.getElementById("kebijakanPrivasiText")?.addEventListener("click", () => {});
    document.getElementById("peminjamanText")?.addEventListener("click", () => {});
    document.getElementById("informasiText")?.addEventListener("click", () => {});
    document.getElementById("bookinganSayaText")?.addEventListener("click", () => {});
    document.getElementById("loginText")?.addEventListener("click", () => {});
  </script>
</body>
</html>
