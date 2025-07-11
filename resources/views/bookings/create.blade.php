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
    <title>Buat Booking Baru | SIGMA</title>
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
                        <li><a href="/peminjaman" id="peminjamanText">Peminjaman</a></li>
                        <li><a href="/informasi" id="informasiText">Informasi</a></li>
                        @auth
                            @if (Auth::user()->role === 'admin')
                                    {{-- Tampilkan tautan ke dashboard admin jika pengguna adalah admin --}}
                                <li><a href="/admin/dashboard" id="adminDashboardText">Dashboard Admin</a></li>
                            @endif
                            {{-- Menu ini hanya muncul jika pengguna sudah login --}}
                            <li><a href="/bookingansaya">Bookingan Saya</a></li>
                            <li class="profile-menu">
                                <div class="profile-icon" id="profile-icon-trigger">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.992 0 .75.75 0 1 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z" /></svg>
                                </div>
                                <div class="profile-dropdown" id="profile-dropdown-menu">
                                    <a href="profile">Profil Saya</a>
                                    <a href="/settings">Pengaturan</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @else
                            {{-- Tampilkan Tombol Login jika pengguna adalah tamu --}}
                            <li class="nav-action-item"><a href="{{ route('login') }}">Login</a></li>
                        @endguest
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
            <section class="page-banner_informasiRuangan" style="background-image: url('{{ asset('storage/image/Banner_InformasiRuangan.png') }}');"></section>

            <!-- Form Section -->
            <section class="booking-form-section">
                <div class="container">
                    <div class="form-container">
                        <h1 class="form-title">Formulir Peminjaman Ruangan</h1>
                        
                        @if (session('success'))
                            <div class="success-message">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <form id="booking-form" class="booking-form" method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Tipe Booking -->
                            <div class="form-group">
                                <label for="tipe_booking" class="form-label">Tipe Booking*</label>
                                <select id="tipe_booking" name="tipe_booking" class="form-select" required>
                                    <option value="">Pilih Tipe Booking</option>
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Event">Event</option>
                                </select>
                            </div>

                            <!-- Subjek Booking -->
                            <div class="form-group">
                                <label for="subject" class="form-label">Subjek Booking*</label>
                                <input type="text" id="subject" name="subject" class="form-input" placeholder="Masukkan subjek booking" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Peminjam -->
                            <div class="form-group">
                                <label for="name" class="form-label">Nama Peminjam*</label>
                                <input type="text" id="name" name="name" class="form-input" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- NIM Peminjam -->
                            <div class="form-group">
                                <label for="nim" class="form-label">NIM Peminjam*</label>
                                <input type="text" id="nim" name="nim" class="form-input" placeholder="Contoh: 2308561090" pattern="[0-9]{10}" maxlength="10" value="{{ old('nim') }}" required>
                                @error('nim')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Program Studi -->
                            <div class="form-group">
                                <label for="study_program" class="form-label">Program Studi Peminjam*</label>
                                <select id="study_program" name="study_program" class="form-select" required>
                                    <option value="">Pilih Program Studi</option>
                                    <option value="Kimia" {{ old('study_program') == 'Kimia' ? 'selected' : '' }}>Kimia</option>
                                    <option value="Fisika" {{ old('study_program') == 'Fisika' ? 'selected' : '' }}>Fisika</option>
                                    <option value="Biologi" {{ old('study_program') == 'Biologi' ? 'selected' : '' }}>Biologi</option>
                                    <option value="Matematika" {{ old('study_program') == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                                    <option value="Farmasi" {{ old('study_program') == 'Farmasi' ? 'selected' : '' }}>Farmasi</option>
                                    <option value="Informatika" {{ old('study_program') == 'Informatika' ? 'selected' : '' }}>Informatika</option>
                                </select>
                                @error('study_program')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal Booking -->
                            <div class="form-group">
                                <label for="booking_date" class="form-label">Tanggal Booking*</label>
                                <input type="date" id="booking_date" name="booking_date" class="form-input" value="{{ old('booking_date') }}" required>
                                @error('booking_date')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Waktu Mulai -->
                            <div class="form-group">
                                <label for="start_time" class="form-label">Waktu Mulai*</label>
                                <select id="start_time" name="start_time" class="form-select" required>
                                    <option value="">Pilih Waktu Mulai</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                @error('start_time')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Waktu Selesai -->
                            <div class="form-group">
                                <label for="end_time" class="form-label">Waktu Selesai*</label>
                                <select id="end_time" name="end_time" class="form-select" required>
                                    <option value="">Pilih Waktu Selesai</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                @error('end_time')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Ruangan -->
                            <div class="form-group">
                                <label for="room_name" class="form-label">Nama Ruangan*</label>
                                <select id="room_name" name="room_name" class="form-select" required>
                                    <option value="">Pilih Ruangan</option>
                                    <option value="Ruang Kuliah 1.1" {{ old('room_name') == 'Ruang Kuliah 1.1' ? 'selected' : '' }}>Ruang Kuliah 1.1</option>
                                    <option value="Ruang Kuliah 1.2" {{ old('room_name') == 'Ruang Kuliah 1.2' ? 'selected' : '' }}>Ruang Kuliah 1.2</option>
                                    <option value="Ruang Kuliah 1.3" {{ old('room_name') == 'Ruang Kuliah 1.3' ? 'selected' : '' }}>Ruang Kuliah 1.3</option>
                                    <option value="Ruang Kuliah 1.4" {{ old('room_name') == 'Ruang Kuliah 1.4' ? 'selected' : '' }}>Ruang Kuliah 1.4</option>
                                    <option value="Ruang Senat" {{ old('room_name') == 'Ruang Senat' ? 'selected' : '' }}>Ruang Senat</option>
                                    <option value="Ruang Kuliah 2.1" {{ old('room_name') == 'Ruang Kuliah 2.1' ? 'selected' : '' }}>Ruang Kuliah 2.1</option>
                                    <option value="Ruang Kuliah 2.2" {{ old('room_name') == 'Ruang Kuliah 2.2' ? 'selected' : '' }}>Ruang Kuliah 2.2</option>
                                    <option value="Ruang Kuliah 2.3" {{ old('room_name') == 'Ruang Kuliah 2.3' ? 'selected' : '' }}>Ruang Kuliah 2.3</option>
                                    <option value="Ruang Kuliah 2.4" {{ old('room_name') == 'Ruang Kuliah 2.4' ? 'selected' : '' }}>Ruang Kuliah 2.4</option>
                                    <option value="Ruang Kuliah 2.5" {{ old('room_name') == 'Ruang Kuliah 2.5' ? 'selected' : '' }}>Ruang Kuliah 2.5</option>
                                    <option value="Ruang Rapat" {{ old('room_name') == 'Ruang Rapat' ? 'selected' : '' }}>Ruang Rapat</option>
                                    <option value="Ruang Kuliah 3.1" {{ old('room_name') == 'Ruang Kuliah 3.1' ? 'selected' : '' }}>Ruang Kuliah 3.1</option>
                                    <option value="Ruang Kuliah 3.2" {{ old('room_name') == 'Ruang Kuliah 3.2' ? 'selected' : '' }}>Ruang Kuliah 3.2</option>
                                    <option value="Ruang Kuliah 3.3" {{ old('room_name') == 'Ruang Kuliah 3.3' ? 'selected' : '' }}>Ruang Kuliah 3.3</option>
                                    <option value="Ruang Kuliah 3.4" {{ old('room_name') == 'Ruang Kuliah 3.4' ? 'selected' : '' }}>Ruang Kuliah 3.4</option>
                                    <option value="Lab Komputer 1" {{ old('room_name') == 'Lab Komputer 1' ? 'selected' : '' }}>Lab Komputer 1</option>
                                    <option value="Lab Komputer 2" {{ old('room_name') == 'Lab Komputer 2' ? 'selected' : '' }}>Lab Komputer 2</option>
                                </select>
                                {{-- <input type="text" id="room_name" name="room_name" class="form-input" placeholder="Masukkan nama ruangan" value="{{ old('room_name') }}" required> --}}
                                @error('room_name')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Dokumen Pinjaman (Hidden by default) -->
                            <div class="form-group" id="loan-document-group" style="display: none;">
                                <label for="loan_document" class="form-label">Dokumen Pinjaman*</label>
                                <div class="file-upload-container">
                                    <input type="file" id="loan_document" name="loan_document" class="file-input" accept=".pdf,.doc,.docx">
                                    <div class="file-upload-display">
                                        <img src="{{ asset('storage/image/document-icon.png') }}" alt="Document" class="file-icon">
                                        <span class="file-text">Pilih file (.pdf, .doc, .docx)</span>
                                    </div>
                                </div>
                                @error('loan_document')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Schedule Display -->
                            <div class="schedule-section">
                                <h3 class="schedule-title">Jadwal Ruang Kuliah</h3>
                                <div class="schedule-grid">
                                    <div class="time-labels">
                                        <div class="time-label">08:00</div>
                                        <div class="time-label">09:00</div>
                                        <div class="time-label">10:00</div>
                                        <div class="time-label">11:00</div>
                                        <div class="time-label">12:00</div>
                                        <div class="time-label">13:00</div>
                                        <div class="time-label">14:00</div>
                                        <div class="time-label">15:00</div>
                                        <div class="time-label">16:00</div>
                                    </div>
                                    <div class="schedule-timeline">
                                        <!-- Timeline will be populated by JavaScript -->
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Facilities Section -->
                            <div class="facilities-info-section">
                                <h3 class="facilities-info-title">Fasilitas Ruang Kuliah</h3>
                                <div class="facilities-info-content">
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">❄️</span>
                                        <span class="facility-info-text">AC 1 PK</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">📽️</span>
                                        <span class="facility-info-text">Proyektor 1920 x 1080p 60hz</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🖥️</span>
                                        <span class="facility-info-text">Screen Proyektor</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🔌</span>
                                        <span class="facility-info-text">Kabel HDMI</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🌐</span>
                                        <span class="facility-info-text">2 Gigabit Ethernet Port</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">📶</span>
                                        <span class="facility-info-text">Akses Wifi imissu@unud</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🪑</span>
                                        <span class="facility-info-text">25 Meja Mahasiswa</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">💺</span>
                                        <span class="facility-info-text">25 Kursi Mahasiswa</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🏢</span>
                                        <span class="facility-info-text">1 Meja Dosen</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🪑</span>
                                        <span class="facility-info-text">1 Kursi Dosen</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">⚡</span>
                                        <span class="facility-info-text">6 Stop Kontak</span>
                                    </div>
                                    <div class="facility-info-item">
                                        <span class="facility-info-icon">🔒</span>
                                        <span class="facility-info-text">Pintu Double Lock</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Room Layout -->
                            <div class="room-layout-section">
                                <h3 class="layout-title">Layout Ruang Kuliah</h3>
                                <div class="room-layout-container">
                                    <img src="{{ asset('storage/image/room-layout-placeholder.png') }}" alt="Layout Ruang Kuliah" class="room-layout-image">
                                </div>
                            </div>

                            <!-- Terms and Conditions Section -->
                            <div class="terms-section">
                                <div class="terms-header" id="terms-toggle">
                                    <h3 class="terms-title">Syarat dan Ketentuan Peminjaman Ruangan</h3>
                                    <span class="terms-arrow">▼</span>
                                </div>
                                <div class="terms-content" id="terms-content">
                                    <ol class="terms-list">
                                        <li>
                                            <h4>Tujuan Peminjaman</h4>
                                            <ol type="a">
                                                <li>Peminjaman gedung diperbolehkan untuk kegiatan perkuliahan, seminar, workshop, pelatihan, atau kegiatan lain yang telah mendapat persetujuan dari pihak pengelola.</li>
                                                <li>Peminjaman gedung di luar kepentingan perkuliahan diwajibkan melampirkan surat pengajuan resmi melalui formulir peminjaman yang disediakan.</li>
                                            </ol>
                                        </li>
                                        <li>
                                            <h4>Aturan Penggunaan Ruangan</h4>
                                            <ol type="a">
                                                <li>Peminjam diizinkan untuk mengubah tata letak ruangan sesuai kebutuhan kegiatan, dengan syarat tata letak wajib dikembalikan ke posisi semula setelah kegiatan selesai.</li>
                                                <li>Peminjam bertanggung jawab penuh atas kebersihan dan keamanan ruangan selama masa pemakaian.</li>
                                                <li>Segala kerusakan atau kehilangan peralatan yang terjadi selama masa peminjaman menjadi tanggung jawab peminjam.</li>
                                            </ol>
                                        </li>
                                        <li>
                                            <h4>Ketentuan Lainnya</h4>
                                            <ol type="a">
                                                <li>Peminjam wajib mematuhi waktu penggunaan gedung sesuai jadwal yang telah disetujui.</li>
                                                <li>Kegiatan yang menimbulkan suara keras atau mengganggu lingkungan sekitar harus memperhatikan jam operasional.</li>
                                                <li>Dilarang membawa bahan berbahaya, merokok di dalam ruangan, atau menggunakan dekorasi yang merusak fasilitas.</li>
                                            </ol>
                                        </li>
                                        <li>
                                            <h4>Pembatalan Peminjaman</h4>
                                            <ol type="a">
                                                <li>Apabila proses peminjaman belum dikonfirmasi oleh admin, peminjam dapat membatalkan permohonan tanpa persetujuan lebih lanjut.</li>
                                                <li>Jika peminjaman telah dikonfirmasi oleh admin, pembatalan harus menunggu persetujuan dari admin.</li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-submit-section">
                                <div class="availability-status">
                                    <span id="availability-text" class="availability-text">Ruangan Tersedia!</span>
                                </div>
                                <button type="submit" id="submit-btn" class="btn-primary submit-btn">
                                    Booking Ruangan Sekarang!
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!-- Confirmation Modal -->
        <div id="confirmation-modal" class="modal-overlay">
            <div class="modal-container">
                <div class="modal-content">
                    <h2 class="modal-title">Konfirmasi Peminjaman Ruanganmu</h2>
                    
                    <div class="confirmation-checklist">
                        <div class="checkbox-item">
                            <input type="checkbox" id="check1" class="confirmation-checkbox">
                            <label for="check1" class="checkbox-label">
                                Saya akan bertanggung jawab atas kebersihan ruangan selama pemakaian.
                            </label>
                        </div>
                        
                        <div class="checkbox-item">
                            <input type="checkbox" id="check2" class="confirmation-checkbox">
                            <label for="check2" class="checkbox-label">
                                Saya akan bertanggung jawab atas keamanan ruangan selama pemakaian.
                            </label>
                        </div>
                        
                        <div class="checkbox-item">
                            <input type="checkbox" id="check3" class="confirmation-checkbox">
                            <label for="check3" class="checkbox-label">
                                Saya akan memastikan ruangan telah bersih sebelum mengembalikan kunci.
                            </label>
                        </div>
                        
                        <div class="checkbox-item">
                            <input type="checkbox" id="check4" class="confirmation-checkbox">
                            <label for="check4" class="checkbox-label">
                                Saya akan menggunakan ruangan hanya selama batas waktu peminjaman saya.
                            </label>
                        </div>
                        
                        <div class="checkbox-item">
                            <input type="checkbox" id="check5" class="confirmation-checkbox">
                            <label for="check5" class="checkbox-label">
                                Saya bertanggung jawab atas segala jenis kerusakan yang disebabkan oleh saya selaku peminjam pada waktu peminjaman.
                            </label>
                        </div>
                    </div>
                    
                    <div class="modal-buttons">
                        <button type="button" id="cancel-booking" class="btn-secondary">Batal</button>
                        <button type="button" id="confirm-booking" class="btn-primary" disabled>
                            Konfirmasi Peminjaman Saya
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
            // Initialize form functionality
            initializeTimeSelectors();
            initializeScheduleDisplay();
            initializeTipeBookingToggle();
            initializeFileUpload();
            initializeFormValidation();
            initializeTermsToggle();
            initializeConfirmationModal();
            initializeTimeValidation();
            
            // Initialize time selectors with 10-minute intervals
            function initializeTimeSelectors() {
                const startTimeSelect = document.getElementById('start_time');
                const endTimeSelect = document.getElementById('end_time');
                const oldStartTime = '{{ old("start_time") }}';
                const oldEndTime = '{{ old("end_time") }}';
                
                // Generate time options from 08:00 to 16:00 with 10-minute intervals
                for (let hour = 8; hour <= 16; hour++) {
                    for (let minute = 0; minute < 60; minute += 10) {
                        if (hour === 16 && minute > 0) break; // Stop at 16:00
                        
                        const timeString = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
                        
                        const option1 = new Option(timeString, timeString);
                        const option2 = new Option(timeString, timeString);
                        
                        // Set selected if matches old value
                        if (timeString === oldStartTime) {
                            option1.selected = true;
                        }
                        if (timeString === oldEndTime) {
                            option2.selected = true;
                        }
                        
                        startTimeSelect.appendChild(option1);
                        endTimeSelect.appendChild(option2);
                    }
                }
                
                // Add event listeners for time validation
                startTimeSelect.addEventListener('change', validateTimeSelection);
                endTimeSelect.addEventListener('change', validateTimeSelection);
            }
            function initializeScheduleDisplay() {
                const timeline = document.querySelector('.schedule-timeline');
                const totalSlots = 8 * 6; // 8 hours * 6 (10-minute slots per hour)
                
                // Create timeline slots
                for (let i = 0; i < totalSlots; i++) {
                    const slot = document.createElement('div');
                    slot.className = 'time-slot';
                    
                    // Mark some slots as booked for demonstration
                    if (i >= 12 && i < 18) { // 10:00 - 11:00 booked
                        slot.classList.add('booked');
                    }
                    if (i >= 36 && i < 42) { // 14:00 - 15:00 booked
                        slot.classList.add('booked');
                    }
                    
                    timeline.appendChild(slot);
                }
            }
            
            // Handle tipe booking selection toggle
            function initializeTipeBookingToggle() {
                const tipeBookingSelect = document.getElementById('tipe_booking');
                const loanDocumentGroup = document.getElementById('loan-document-group');
                const loanDocumentInput = document.getElementById('loan_document');
                
                tipeBookingSelect.addEventListener('change', function() {
                    if (this.value === 'Event') {
                        loanDocumentGroup.style.display = 'block';
                        loanDocumentInput.required = true;
                    } else {
                        loanDocumentGroup.style.display = 'none';
                        loanDocumentInput.required = false;
                        loanDocumentInput.value = '';
                    }
                });
            }
            
            // Handle file upload display
            function initializeFileUpload() {
                const fileInput = document.getElementById('loan_document');
                const fileText = document.querySelector('.file-text');
                
                if (fileInput && fileText) {
                    fileInput.addEventListener('change', function() {
                        if (this.files.length > 0) {
                            fileText.textContent = this.files[0].name;
                        } else {
                            fileText.textContent = 'Pilih file (.pdf, .doc, .docx)';
                        }
                    });
                }
            }
            
            // Initialize time validation
            function initializeTimeValidation() {
                const startTimeSelect = document.getElementById('start_time');
                const endTimeSelect = document.getElementById('end_time');
                
                startTimeSelect.addEventListener('change', validateTimeSelection);
                endTimeSelect.addEventListener('change', validateTimeSelection);
            }
            
            // Validate time selection
            function validateTimeSelection() {
                const startTime = document.getElementById('start_time').value;
                const endTime = document.getElementById('end_time').value;
                const availabilityText = document.getElementById('availability-text');
                const submitBtn = document.getElementById('submit-btn');
                
                if (startTime && endTime) {
                    const startDate = new Date(`2000-01-01T${startTime}:00`);
                    const endDate = new Date(`2000-01-01T${endTime}:00`);
                    
                    if (endDate <= startDate) {
                        availabilityText.textContent = 'Waktu selesai harus lebih besar dari waktu mulai!';
                        availabilityText.className = 'availability-text error';
                        submitBtn.disabled = true;
                        submitBtn.classList.add('disabled');
                    } else if (checkTimeConflict(startTime, endTime)) {
                        availabilityText.textContent = 'Waktu bentrok dengan jadwal yang sudah ada!';
                        availabilityText.className = 'availability-text error';
                        submitBtn.disabled = true;
                        submitBtn.classList.add('disabled');
                    } else {
                        availabilityText.textContent = 'Ruangan Tersedia!';
                        availabilityText.className = 'availability-text success';
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('disabled');
                    }
                    
                    updateScheduleHighlight(startTime, endTime);
                }
            }
            
            // Check for time conflicts (demo function)
            function checkTimeConflict(startTime, endTime) {
                // Demo: 10:00-11:00 and 14:00-15:00 are booked
                const bookedSlots = ['10:00-11:00', '14:00-15:00'];
                
                for (let slot of bookedSlots) {
                    const [bookedStart, bookedEnd] = slot.split('-');
                    
                    if ((startTime >= bookedStart && startTime < bookedEnd) || 
                        (endTime > bookedStart && endTime <= bookedEnd) ||
                        (startTime <= bookedStart && endTime >= bookedEnd)) {
                        return true;
                    }
                }
                return false;
            }
            
            // Update schedule highlight
            function updateScheduleHighlight(startTime, endTime) {
                const timeSlots = document.querySelectorAll('.time-slot');
                
                // Clear previous highlights
                timeSlots.forEach(slot => slot.classList.remove('selected'));
                
                // Parse start and end times
                const [startHour, startMinute] = startTime.split(':').map(Number);
                const [endHour, endMinute] = endTime.split(':').map(Number);
                
                // Calculate precise slot indices based on 10-minute intervals
                // Each hour has 6 slots (60 minutes / 10 minutes = 6 slots)
                // Start from hour 8, so we subtract 8 from the hour
                const startSlotIndex = (startHour - 8) * 6 + Math.floor(startMinute / 10);
                const endSlotIndex = (endHour - 8) * 6 + Math.floor(endMinute / 10);
                
                // Highlight the selected time slots
                for (let i = startSlotIndex; i < endSlotIndex && i < timeSlots.length; i++) {
                    if (i >= 0 && timeSlots[i]) {
                        timeSlots[i].classList.add('selected');
                    }
                }
            }
            
            // Form validation
            function initializeFormValidation() {
                const form = document.getElementById('booking-form');
                const nimInput = document.getElementById('nim');
                
                // NIM validation - only numbers
                nimInput.addEventListener('input', function() {
                    this.value = this.value.replace(/[^0-9]/g, '');
                });
                
                // Form submission
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic validation
                    const requiredFields = form.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value.trim()) {
                            isValid = false;
                            field.classList.add('error');
                        } else {
                            field.classList.remove('error');
                        }
                    });
                    
                    if (isValid) {
                        // Show confirmation modal instead of submitting directly
                        showConfirmationModal();
                    } else {
                        alert('Mohon lengkapi semua field yang wajib diisi!');
                    }
                });
            }
            
            // Initialize terms and conditions toggle
            function initializeTermsToggle() {
                const termsToggle = document.getElementById('terms-toggle');
                const termsContent = document.getElementById('terms-content');
                const termsArrow = document.querySelector('.terms-arrow');
                
                termsToggle.addEventListener('click', function() {
                    if (termsContent.style.display === 'none' || termsContent.style.display === '') {
                        termsContent.style.display = 'block';
                        termsArrow.textContent = '▲';
                        termsToggle.classList.add('expanded');
                    } else {
                        termsContent.style.display = 'none';
                        termsArrow.textContent = '▼';
                        termsToggle.classList.remove('expanded');
                    }
                });
                
                // Initially collapsed
                termsContent.style.display = 'none';
            }
            
            // Initialize confirmation modal
            function initializeConfirmationModal() {
                const modal = document.getElementById('confirmation-modal');
                const confirmBtn = document.getElementById('confirm-booking');
                const cancelBtn = document.getElementById('cancel-booking');
                const checkboxes = document.querySelectorAll('.confirmation-checkbox');
                
                // Check if all checkboxes are checked
                function updateConfirmButton() {
                    const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                    confirmBtn.disabled = !allChecked;
                    if (allChecked) {
                        confirmBtn.classList.remove('disabled');
                    } else {
                        confirmBtn.classList.add('disabled');
                    }
                }
                
                // Add event listeners to checkboxes
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', updateConfirmButton);
                });
                
                // Cancel button - close modal
                cancelBtn.addEventListener('click', function() {
                    hideConfirmationModal();
                });
                
                // Confirm button - submit form
                confirmBtn.addEventListener('click', function() {
                    if (!confirmBtn.disabled) {
                        // Actually submit the form to the backend
                        hideConfirmationModal();
                        
                        // Remove the prevent default and submit the form normally
                        const form = document.getElementById('booking-form');
                        const formData = new FormData(form);
                        
                        // Make sure we're submitting to the correct endpoint
                        fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                                               document.querySelector('input[name="_token"]').value
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                // Redirect to success page
                                window.location.href = '/peminjaman/sukses';
                            } else {
                                throw new Error('Network response was not ok');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            // Fallback to normal form submission
                            form.submit();
                        });
                    }
                });
                
                // Close modal when clicking outside
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        hideConfirmationModal();
                    }
                });
            }
            
            // Show confirmation modal
            function showConfirmationModal() {
                const modal = document.getElementById('confirmation-modal');
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                
                // Reset checkboxes
                const checkboxes = document.querySelectorAll('.confirmation-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                
                // Disable confirm button initially
                const confirmBtn = document.getElementById('confirm-booking');
                confirmBtn.disabled = true;
                confirmBtn.classList.add('disabled');
            }
            
            // Hide confirmation modal
            function hideConfirmationModal() {
                const modal = document.getElementById('confirmation-modal');
                modal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scrolling
            }

            // Initialize hamburger menu
            const hamburgerBtn = document.querySelector('.hamburger-menu'); 
            const mobileNav = document.querySelector('.mobile-nav'); 

            if (hamburgerBtn && mobileNav) {
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