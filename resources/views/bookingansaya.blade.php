<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  {{-- <link rel="stylesheet" href=""/> --}} <!-- Dihapus karena kosong -->
  <link rel="icon" href="{{ asset('storage/image/ICON_SIGMA_PUTIH1.svg') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham+Black:wght@400&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans+Display:wght@400;700&display=swap" />
  <title>Bookingan Saya | SIGMA</title>
  @vite('resources/css/app.css')
</head>

<body>
    <div>
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
                    <h1 class="banner-title">Bookingan Saya</h1>
                </div>
            </section>
            
            {{-- Bagian untuk menampilkan daftar bookingan --}}
            <div class="container mx-auto p-4 sm:p-6 lg:p-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-8">Daftar Peminjaman Anda</h2>
                
                {{-- PERBAIKAN UTAMA: Membungkus blok kartu dengan @forelse --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($bookings as $booking)
                        <div class="md:h-96 w-full flex justify-center items-center p-2">
                            <div class="bg-gray-200 md:h-[90%] w-[95%] rounded-3xl p-6 flex flex-col justify-between shadow-md">
                                <!-- Nama Ruangan dan Status di bagian atas kartu -->
                                <div class="flex justify-between items-start mb-4">
                                    <h1 class="text-2xl font-bold text-gray-800">{{ $booking->room_name }}</h1>
                                    
                                    @php
                                        $statusColor = 'bg-gray-500';
                                        $statusText = 'Tidak Diketahui';
                                        
                                        if ($booking->status == 'pending') {
                                            $statusColor = 'bg-yellow-500';
                                            $statusText = 'Menunggu Konfirmasi';
                                        } elseif ($booking->status == 'confirmed') {
                                            $statusColor = 'bg-green-500';
                                            $statusText = 'Dikonfirmasi';
                                        } elseif ($booking->status == 'rejected') {
                                            $statusColor = 'bg-red-500';
                                            $statusText = 'Ditolak';
                                        }
                                    @endphp
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold text-white {{ $statusColor }}">
                                        {{ $statusText }}
                                    </span>
                                </div>
                                
                                <!-- Detail Waktu dan Informasi Lainnya -->
                                <div class="flex-grow">
                                    <p class="text-lg text-gray-700 mb-1"><span class="font-semibold">Waktu Mulai:</span> {{ $booking->formatted_start_time }}</p>
                                    <p class="text-lg text-gray-700 mb-4"><span class="font-semibold">Waktu Selesai:</span> {{ $booking->formatted_end_time }}</p>
                                    
                                    <p class="text-gray-700 text-base mb-2">
                                        <span class="font-semibold">Perihal:</span> {{ $booking->subject ?: 'Tidak Ada Perihal' }}
                                    </p>
                                    <p class="text-gray-700 text-base mb-2">
                                        <span class="font-semibold">Peminjam:</span> {{ $booking->name }} ({{ $booking->nim }})
                                    </p>
                                    @if ($booking->study_program)
                                        <p class="text-gray-700 text-base mb-2">
                                            <span class="font-semibold">Program Studi:</span> {{ $booking->study_program }}
                                        </p>
                                    @endif
                                    @if ($booking->booking_date)
                                        <p class="text-gray-700 text-base mb-2">
                                            <span class="font-semibold">Tanggal Booking:</span> {{ $booking->formatted_booking_date }}
                                        </p>
                                    @endif
                                    @if ($booking->loan_document_path)
                                        <p class="text-gray-700 text-base">
                                            <span class="font-semibold">Surat Peminjaman:</span>
                                            <a href="{{ asset('storage/' . $booking->loan_document_path) }}" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
                                                Lihat Dokumen
                                            </a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600 text-lg col-span-full">Belum ada peminjaman yang tersedia.</p>
                    @endforelse
                </div>
            </div>
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