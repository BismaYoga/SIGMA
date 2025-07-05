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
                <x-Navbar></x-Navbar>
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

        <x-Footer></x-Footer>
    </div>

</body>