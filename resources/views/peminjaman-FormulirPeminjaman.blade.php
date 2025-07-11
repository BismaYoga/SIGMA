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

        <main>
            <!-- Banner -->
            <section class="page-banner_informasiRuangan" style="background-image: url('{{ asset('storage/image/Banner_InformasiRuangan.png') }}');"></section>

            <!-- Form Section -->
            <section class="booking-form-section">
                <div class="container">
                    <div class="form-container">
                        <h1 class="form-title">Formulir Peminjaman Ruangan</h1>
                        
                        <form id="booking-form" class="booking-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Perihal Peminjaman -->
                            <div class="form-group">
                                <label for="perihal" class="form-label">Perihal Peminjaman*</label>
                                <select id="perihal" name="perihal" class="form-select" required>
                                    <option value="">Pilih Perihal</option>
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Event">Event</option>
                                </select>
                            </div>

                            <!-- Nama Peminjam -->
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama Peminjam*</label>
                                <input type="text" id="nama" name="nama" class="form-input" placeholder="Masukkan nama lengkap" required>
                            </div>

                            <!-- NIM Peminjam -->
                            <div class="form-group">
                                <label for="nim" class="form-label">NIM Peminjam*</label>
                                <input type="text" id="nim" name="nim" class="form-input" placeholder="Contoh: 2308561090" pattern="[0-9]{10}" maxlength="10" required>
                            </div>

                            <!-- Program Studi -->
                            <div class="form-group">
                                <label for="prodi" class="form-label">Program Studi Peminjam*</label>
                                <select id="prodi" name="prodi" class="form-select" required>
                                    <option value="">Pilih Program Studi</option>
                                    <option value="Kimia">Kimia</option>
                                    <option value="Fisika">Fisika</option>
                                    <option value="Biologi">Biologi</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Informatika">Informatika</option>
                                </select>
                            </div>

                            <!-- Waktu Peminjaman -->
                            <div class="form-group">
                                <label for="waktu-mulai" class="form-label">Waktu Peminjaman*</label>
                                <select id="waktu-mulai" name="waktu_mulai" class="form-select" required>
                                    <option value="">Pilih Waktu Mulai</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>

                            <!-- Waktu Pengembalian -->
                            <div class="form-group">
                                <label for="waktu-selesai" class="form-label">Waktu Pengembalian*</label>
                                <select id="waktu-selesai" name="waktu_selesai" class="form-select" required>
                                    <option value="">Pilih Waktu Selesai</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>

                            <!-- Surat Peminjaman (Hidden by default) -->
                            <div class="form-group" id="surat-group" style="display: none;">
                                <label for="surat" class="form-label">Surat Peminjaman*</label>
                                <div class="file-upload-container">
                                    <input type="file" id="surat" name="surat_peminjaman" class="file-input" accept=".pdf,.doc,.docx">
                                    <div class="file-upload-display">
                                        <img src="{{ asset('storage/image/document-icon.png') }}" alt="Document" class="file-icon">
                                        <span class="file-text">Pilih file (.pdf, .doc, .docx)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Schedule Display -->
                            <div class="schedule-section">
                                <h3 class="schedule-title">Jadwal Ruang Kuliah 1.1</h3>
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
                                <h3 class="facilities-info-title">Fasilitas Ruang Kuliah 1.1</h3>
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
                                <h3 class="layout-title">Layout Ruang Kuliah 1.1</h3>
                                <div class="room-layout-container">
                                    <img src="{{ asset('storage/image/room-layout-placeholder.png') }}" alt="Layout Ruang Kuliah 1.1" class="room-layout-image">
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
            // Initialize form functionality
            initializeTimeSelectors();
            initializeScheduleDisplay();
            initializePerihalToggle();
            initializeFileUpload();
            initializeFormValidation();
            initializeTermsToggle();
            initializeConfirmationModal();
            
            // Initialize time selectors with 10-minute intervals
            function initializeTimeSelectors() {
                const waktuMulai = document.getElementById('waktu-mulai');
                const waktuSelesai = document.getElementById('waktu-selesai');
                
                // Generate time options from 08:00 to 16:00 with 10-minute intervals
                for (let hour = 8; hour <= 16; hour++) {
                    for (let minute = 0; minute < 60; minute += 10) {
                        if (hour === 16 && minute > 0) break; // Stop at 16:00
                        
                        const timeString = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
                        
                        const option1 = new Option(timeString, timeString);
                        const option2 = new Option(timeString, timeString);
                        
                        waktuMulai.appendChild(option1);
                        waktuSelesai.appendChild(option2);
                    }
                }
                
                // Add event listeners for time validation
                waktuMulai.addEventListener('change', validateTimeSelection);
                waktuSelesai.addEventListener('change', validateTimeSelection);
            }
            
            // Initialize schedule display
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
            
            // Handle perihal selection toggle
            function initializePerihalToggle() {
                const perihalSelect = document.getElementById('perihal');
                const suratGroup = document.getElementById('surat-group');
                const suratInput = document.getElementById('surat');
                
                perihalSelect.addEventListener('change', function() {
                    if (this.value === 'Event') {
                        suratGroup.style.display = 'block';
                        suratInput.required = true;
                    } else {
                        suratGroup.style.display = 'none';
                        suratInput.required = false;
                        suratInput.value = '';
                    }
                });
            }
            
            // Handle file upload display
            function initializeFileUpload() {
                const fileInput = document.getElementById('surat');
                const fileText = document.querySelector('.file-text');
                
                fileInput.addEventListener('change', function() {
                    if (this.files.length > 0) {
                        fileText.textContent = this.files[0].name;
                    } else {
                        fileText.textContent = 'Pilih file (.pdf, .doc, .docx)';
                    }
                });
            }
            
            // Validate time selection
            function validateTimeSelection() {
                const waktuMulai = document.getElementById('waktu-mulai').value;
                const waktuSelesai = document.getElementById('waktu-selesai').value;
                const availabilityText = document.getElementById('availability-text');
                const submitBtn = document.getElementById('submit-btn');
                
                if (waktuMulai && waktuSelesai) {
                    const startTime = new Date(`2000-01-01T${waktuMulai}:00`);
                    const endTime = new Date(`2000-01-01T${waktuSelesai}:00`);
                    
                    if (endTime <= startTime) {
                        availabilityText.textContent = 'Waktu selesai harus lebih besar dari waktu mulai!';
                        availabilityText.className = 'availability-text error';
                        submitBtn.disabled = true;
                        submitBtn.classList.add('disabled');
                    } else if (checkTimeConflict(waktuMulai, waktuSelesai)) {
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
                    
                    updateScheduleHighlight(waktuMulai, waktuSelesai);
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
                
                // Calculate slot indices
                const startHour = parseInt(startTime.split(':')[0]);
                const startMinute = parseInt(startTime.split(':')[1]);
                const endHour = parseInt(endTime.split(':')[0]);
                const endMinute = parseInt(endTime.split(':')[1]);
                
                const startIndex = (startHour - 8) * 6 + (startMinute / 10);
                const endIndex = (endHour - 8) * 6 + (endMinute / 10);
                
                // Highlight selected slots
                for (let i = startIndex; i < endIndex; i++) {
                    if (timeSlots[i]) {
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
                        // Show confirmation modal instead of alert
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
                        // Here you would normally submit the form to backend
                        alert('Peminjaman berhasil dikonfirmasi! (Demo - belum terintegrasi dengan backend)');
                        hideConfirmationModal();
                        
                        // Reset form
                        document.getElementById('booking-form').reset();
                        
                        // Reset availability text
                        document.getElementById('availability-text').textContent = 'Ruangan Tersedia!';
                        document.getElementById('availability-text').className = 'availability-text success';
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
        });
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>