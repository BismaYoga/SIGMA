document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header-main');
    const hamburgerBtn = document.querySelector('.hamburger-menu');
    const mobileNav = document.querySelector('.mobile-nav');
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

    
});
