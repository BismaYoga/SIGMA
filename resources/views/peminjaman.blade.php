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
  <title>Peminjaman | SIGMA</title>
</head>

<body>
    <div class="notloginpeminjaman">
        <!-- Header -->
        <header class="header-notlogin">
            <div class="header-container">
                
                <a href="{{ url('/home') }}" class="header-logo">
                    <img class="logo-sigma-icon" alt="Logo SIGMA" src="{{ asset('storage/image/LOGO_SIGMA_2_Vector_Header.svg') }}">
                </a>

                <nav class="header-nav">
                    <ul class="nav-menu">
                        <li><a href="/" id="home">Home</a></li>
                        <li><a href="/peminjaman" id="peminjamanText">Peminjaman</a></li>
                        <li><a href="/informasi" id="informasiText">Informasi</a></li>
                        <li><a href="/bookingansaya" id="bookinganSayaText">Bookingan Saya</a></li>
                        <li><a href="/login" id="loginText">Login</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <main>
            <!-- Banner -->
            <section class="banner" style="background-image: url('{{ asset('storage/image/Banner_Dekanat.png') }}')">
            <div class="overlay">
                <h1>Peminjaman</h1>
            </div>
            </section>

            <section class="bar-tanggal">
                <div class="dropdown-bulan-tahun">
                    <form class="dropdown">
                    <label for="tahun">Tahun</label>
                    <select id="tahun" name="tahun">
                        <option value="2025">2025</option>
                        <!-- Tambahkan opsi lain di sini -->
                    </select>
                    </form>
                    
                    <form class="dropdown1">
                    <label for="bulan">Bulan</label>
                    <select id="bulan" name="bulan">
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                        <!-- Tambahkan opsi lain di sini -->
                    </select>
                    </form>
                </div>

                <nav class="tanggal">
                    <button class="prev" aria-label="Sebelumnya">
                    <span class="rectangle-prev"></span>
                    <span>Prev</span>
                    </button>

                    <button class="next" aria-label="Berikutnya">
                    <span class="rectangle-prev"></span>
                    <span>Next</span>
                    </button>

                    <ul class="daftar-tanggal">
                    <li class="tgl">
                        <time datetime="2025-06-01">1</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-02">2</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-03">3</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-04">4</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-05">5</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-06">6</time>
                    </li>
                    <li class="tgl">
                        <time datetime="2025-06-07">7</time>
                    </li>
                    </ul>
                </nav>
            </section>

        </main>

    

            
















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