(function () {
    'use strict';

    // Theme toggle with localStorage persistence
    var root = document.documentElement;
    var themeToggle = document.getElementById('themeToggle');

    function applyTheme(theme) {
        root.setAttribute('data-theme', theme);
        try {
            localStorage.setItem('portfolio-theme', theme);
        } catch (e) { /* ignore */ }
    }

    function getSavedTheme() {
        try {
            var saved = localStorage.getItem('portfolio-theme');
            if (saved === 'light' || saved === 'dark') {
                return saved;
            }
        } catch (e) { /* ignore */ }
        return 'light';
    }

    applyTheme(getSavedTheme());

    if (themeToggle) {
        themeToggle.addEventListener('click', function () {
            var current = root.getAttribute('data-theme');
            applyTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    // Mobile navigation toggle
    var navToggler = document.getElementById('navToggler');
    var navMenu = document.getElementById('navMenu');

    if (navToggler && navMenu) {
        navToggler.addEventListener('click', function () {
            var isActive = navMenu.classList.toggle('active');
            navToggler.classList.toggle('active', isActive);
            navToggler.setAttribute('aria-expanded', isActive ? 'true' : 'false');
        });

        // Close menu when a link is clicked
        navMenu.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                navMenu.classList.remove('active');
                navToggler.classList.remove('active');
                navToggler.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // Certificate lightbox
    var lightbox = document.getElementById('certLightbox');
    var lightboxImage = document.getElementById('certLightboxImage');
    var lightboxTitle = document.getElementById('certLightboxTitle');
    var lightboxClose = document.getElementById('certLightboxClose');
    var bodyEl = document.body;

    function openLightbox(image, title) {
        lightboxImage.setAttribute('src', image);
        lightboxTitle.textContent = title;
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
        bodyEl.style.overflow = 'hidden';
        lightboxClose.focus();
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        lightbox.setAttribute('aria-hidden', 'true');
        bodyEl.style.overflow = '';
    }

    document.querySelectorAll('.js-cert-open').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            openLightbox(link.getAttribute('data-image'), link.getAttribute('data-title'));
        });
    });

    if (lightboxClose) {
        lightboxClose.addEventListener('click', function (e) {
            e.stopPropagation();
            closeLightbox();
        });
    }

    if (lightbox) {
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && lightbox && lightbox.classList.contains('open')) {
            closeLightbox();
        }
    });
})();
