document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header-main');
    const hamburgerBtn = document.querySelector('.hamburger-menu');
    const mobileNav = document.querySelector('.mobile-nav');
    const profileIcon = document.getElementById('profile-icon-trigger');
    const dropdownMenu = document.getElementById('profile-dropdown-menu');
    let lastScrollY = window.scrollY;

    // Logika untuk efek scroll header
    window.addEventListener('scroll', () => {
        if (mobileNav.classList.contains('open')) {
            return;
        }

        const currentScrollY = window.scrollY;

        if (currentScrollY <= 50) {
            header.classList.remove('scrolled', 'hidden');
        } else {
            if (currentScrollY > lastScrollY) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
                header.classList.add('scrolled');
            }
        }
        
        lastScrollY = currentScrollY;
    });

    // Logika untuk tombol hamburger
    hamburgerBtn.addEventListener('click', () => {
        hamburgerBtn.classList.toggle('open');
        mobileNav.classList.toggle('open');
        document.body.classList.toggle('no-scroll');
    });

    // --- Logika untuk Navbar Scroll (Hide/Show) ---
    if (header) {
        window.addEventListener('scroll', () => {
            // Jangan jalankan efek scroll jika menu mobile sedang terbuka
            if (mobileNav && mobileNav.classList.contains('open')) {
                return; 
            }
            
            const currentScrollY = window.scrollY;

            if (currentScrollY <= 50) {
                // Di bagian atas, selalu tampilkan header tanpa background
                header.classList.remove('scrolled', 'hidden');
            } else {
                if (currentScrollY > lastScrollY) {
                    // Scroll ke bawah, sembunyikan header
                    header.classList.add('hidden');
                } else {
                    // Scroll ke atas, tampilkan header
                    header.classList.remove('hidden');
                    header.classList.add('scrolled'); // Tambahkan background saat scroll ke atas
                }
            }
            lastScrollY = currentScrollY;
        });
    }

    // --- Logika untuk Dropdown Profil ---
    if (profileIcon && dropdownMenu) {
        profileIcon.addEventListener('click', function(event) {
            event.stopPropagation();
            dropdownMenu.classList.toggle('show');
        });

        window.addEventListener('click', function(event) {
            if (!dropdownMenu.contains(event.target) && !profileIcon.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    }

    
});
