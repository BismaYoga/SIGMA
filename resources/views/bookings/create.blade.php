<!-- resources/views/bookings/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Buat Booking Baru</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        form div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="date"], input[type="time"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] { padding: 5px 0; }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover { background-color: #45a049; }
        .error-message { color: red; font-size: 0.9em; margin-top: 5px; }
        .success-message { color: green; font-weight: bold; margin-bottom: 20px; }
    </style>
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
        <section class="page-banner_informasiRuangan" style="background-image: url('{{ asset('storage/image/Banner_InformasiRuangan.png') }}');"></section>
    <h1>Buat Booking Baru</h1>

    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="subject">Subjek Booking:</label>
            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
            @error('subject')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="name">Nama Pemesan:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}" required>
            @error('nim')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="study_program">Program Studi:</label>
            <input type="text" id="study_program" name="study_program" value="{{ old('study_program') }}" required>
            @error('study_program')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="loan_document">Dokumen Pinjaman (PDF/DOC/DOCX, Max 2MB):</label>
            <input type="file" id="loan_document" name="loan_document">
            @error('loan_document')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="booking_date">Tanggal Booking:</label>
            <input type="date" id="booking_date" name="booking_date" value="{{ old('booking_date') }}" required>
            @error('booking_date')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="start_time">Waktu Mulai:</label>
            <input type="time" id="start_time" name="start_time" value="{{ old('start_time') }}" required>
            @error('start_time')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="end_time">Waktu Selesai:</label>
            <input type="time" id="end_time" name="end_time" value="{{ old('end_time') }}" required>
            @error('end_time')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="room_name">Nama Ruangan:</label>
            <input type="text" id="room_name" name="room_name" value="{{ old('room_name') }}" required>
            @error('room_name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <!-- <div>
            <label for="image">Gambar (JPEG/PNG/JPG/GIF, Max 2MB):</label>
            <input type="file" id="image" name="image">
            @error('image')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div> -->

        <button type="submit">Buat Booking</button>
    </form>
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
            // Variabel ini tidak terdefinisi di HTML yang diberikan, jadi saya akan mengomentarinya
            // const dateForm = document.getElementById('date-selection-form'); 
            
            // Pastikan elemen ini ada di HTML Anda, jika tidak, querySelector akan mengembalikan null
            const hamburgerBtn = document.querySelector('.hamburger-menu'); 
            const mobileNav = document.querySelector('.mobile-nav'); 

            // Logika untuk tombol hamburger
            if (hamburgerBtn && mobileNav) { // Pastikan elemen ada sebelum menambahkan event listener
                hamburgerBtn.addEventListener('click', () => {
                    hamburgerBtn.classList.toggle('open');
                    mobileNav.classList.toggle('open');
                    document.body.classList.toggle('no-scroll');
                });
            }
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>

</body>
</html>