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
  <title>Informasi | SIGMA</title>
</head>
<body>
    <div class="notloginpeminjaman">
        <!-- Header -->
        <header class="header-notlogin">
        <div class="header-notlogin"></div>
            <x-Navbar></x-Navbar>
                <img class="logo-sigma-icon" alt="Logo SIGMA" src="/Assets/gambar/LOGO SIGMA 2 Vector Header.svg">
        </header>

        <!-- Banner -->
        <section class="banner">
        <div class="overlay">
            <h1>Informasi</h1>
        </div>
        </section>

        <!-- Informasi Singkat -->
        <section class="informasi-singkat">
            <p>Gedung Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) Universitas Udayana merupakan fasilitas yang dirancang untuk mendukung berbagai aktivitas akademik dan non-akademik. Gedung ini dilengkapi dengan berbagai ruangan yang disesuaikan dengan kebutuhan seperti ruang kelas dengan proyektor dan whiteboard, ruang seminar berkapasitas besar, serta ruang rapat yang nyaman. Setiap ruangan dirancang dengan mempertimbangkan kenyamanan, aksesibilitas, dan fungsionalitas.</p>

        </section>
        




        <!-- Footer -->
        <footer class="component-footer">
        <div class="footer">
            <div class="call-parent">
            <section class="reservation">
                <b class="reservasi">Reservasi</b>
                <address class="call-reservasi">
                <p>S: reservationfmipa@sigma.ac.id</p>
                <p>T: +62 81234567891</p>
                </address>
            </section>
            <section class="contact-center">
                <b class="reservasi">Pusat Bantuan</b>
                <address class="call-reservasi">
                <p>S: contact@sigma.ac.id</p>
                <p>T: +62 81234567891</p>
                </address>
            </section>
            </div>

            <div class="office-parent">
            <section class="reservation">
                <b class="reservasi">Kantor</b>
                <address class="gedung-dekanat-fmipa-container" id="gedungDekanatFMIPA">
                <p>Gedung Dekanat FMIPA lantai 4</p>
                <p>Jl. Raya Kampus Unud, Bukit Jimbaran</p>
                </address>
            </section>
            <section class="hours">
                <b class="operasional">Operasional</b>
                <div class="wita-monday-container">
                <p>08.00 - 16.00 WITA</p>
                <p>Monday - Friday</p>
                </div>
            </section>
            </div>

            <nav class="shortcut">
            <div class="tentang-sigma" id="tentangSIGMAText">Tentang SIGMA</div>
            <div class="faq" id="fAQText">FAQ</div>
            <div class="sk" id="sKText">S&K</div>
            <div class="kebijakan-privasi" id="kebijakanPrivasiText">Kebijakan Privasi</div>
            </nav>

            <div class="logo-sigma-footer">
            <img class="group-logofooter" alt="Logo Group" src="/Assets/gambar/LOGO SIGMA 3 Vector Footer.svg">
            <!-- <div class="group-div">
                <div class="group-child1"></div>
                
            </div> -->
            <!-- <img class="sigma-icon" alt="Logo SIGMA" src="SIGMA.svg">
            <img class="udayana-icon" alt="Logo Udayana" src="UDAYANA.svg"> -->
            </div>
        </div>
        </footer>
    </div>
</body>