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
  <title>Informasi | SIGMA</title>
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
                    <h1 class="banner-title">Syarat dan Ketentuan</h1>
                </div>
            </section>

            <!-- S&K Section -->
    <section class="snk-section">
      <div class="container">
          <h1 class="snk-title">Syarat & Ketentuan Peminjaman Ruangan</h1>

          <ol class="snk-list">
            <li>
              <h3>Tujuan Peminjaman</h3>
              <ol type="a">
                <li>Peminjaman gedung diperbolehkan untuk kegiatan perkuliahan, seminar, workshop, pelatihan, atau kegiatan lain yang telah mendapat persetujuan dari pihak pengelola.</li>
                <li>Peminjaman gedung di luar kepentingan perkuliahan diwajibkan melampirkan surat pengajuan resmi melalui formulir peminjaman yang disediakan. Dengan ketentuan:
                  <ol type="i">
                    <li>Pengajuan peminjaman gedung untuk kepentingan di luar perkuliahan wajib dilakukan maksimal H-14 sebelum kegiatan berlangsung.</li>
                    <li>Surat pengajuan resmi harus diunggah melalui form yang tersedia saat proses pengajuan dilakukan.</li>
                  </ol>
                </li>
              </ol>
            </li>
          
            <li>
              <h3>Aturan Penggunaan Ruangan</h3>
              <ol type="a">
                <li>Peminjam diizinkan untuk mengubah tata letak ruangan sesuai kebutuhan kegiatan, dengan syarat tata letak wajib dikembalikan ke posisi semula setelah kegiatan selesai.</li>
                <li>Peminjam bertanggung jawab penuh atas kebersihan dan keamanan ruangan selama masa pemakaian.</li>
                <li>Segala kerusakan atau kehilangan peralatan yang terjadi selama masa peminjaman menjadi tanggung jawab peminjam dan wajib dilaporkan kepada Contact Person Reservasi melalui nomor telepon yang tercantum.</li>
                <li>Biaya ganti rugi atas kerusakan atau kehilangan peralatan akan ditentukan oleh pengelola gedung berdasarkan ketentuan yang berlaku.</li>
                <li>Pelanggaran terhadap syarat dan ketentuan peminjaman dapat berakibat pada larangan peminjaman gedung di masa mendatang.</li>
              </ol>
            </li>
          
            <li>
              <h3>Ketentuan Lainnya</h3>
              <ol type="a">
                <li>Peminjam wajib mematuhi waktu penggunaan gedung sesuai jadwal yang telah disetujui.</li>
                <li>Uang yang sudah ditransfer tidak dapat dikembalikan dan sudah berkomitmen untuk melakukan peminjaman.</li>
                <li>Pemesanan perihal event yang sudah melakukan pembayaran tidak dapat dibatalkan, apabila ingin dibatalkan tidak ada pengembalian dana.</li>
                <li>Kegiatan yang menimbulkan suara keras atau mengganggu lingkungan sekitar harus memperhatikan jam operasional dan izin khusus dari pengelola.</li>
                <li>Larangan khusus:
                  <ol type="i">
                    <li>Dilarang membawa bahan berbahaya, seperti bahan mudah terbakar, bahan kimia beracun, atau barang yang dapat membahayakan keselamatan.</li>
                    <li>Dilarang merokok di dalam ruangan atau di area yang tidak diperbolehkan.</li>
                    <li>Dilarang menggunakan dekorasi yang merusak fasilitas gedung, seperti paku, lem tembak, atau bahan perekat yang meninggalkan bekas.</li>
                  </ol>
                </li>
              </ol>
            </li>
          
            <li>
              <h3>Pembatalan Peminjaman</h3>
              <ol type="a">
                <li>Apabila proses peminjaman belum dikonfirmasi oleh admin, peminjam dapat membatalkan permohonan tanpa memerlukan persetujuan lebih lanjut.</li>
                <li>Jika peminjaman telah dikonfirmasi oleh admin, pembatalan harus menunggu persetujuan dari admin untuk mengonfirmasi pembatalan.</li>
              </ol>
            </li>
          
            <li>
              <h3>Tambahan Ketentuan</h3>
              <ol>
                <li type="a">Ketentuan tambahan dapat diterapkan oleh pengelola gedung sesuai kebutuhan dan situasi tertentu.</li>
              </ol>
            </li>
          </ol>
          
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
            const dateForm = document.getElementById('date-selection-form');
            // Logika untuk tombol hamburger
            hamburgerBtn.addEventListener('click', () => {
                hamburgerBtn.classList.toggle('open');
                mobileNav.classList.toggle('open');
                document.body.classList.toggle('no-scroll');
            });

            
                
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>