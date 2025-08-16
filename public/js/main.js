$(document).ready(function() {
    // Theme toggle functionality
    const themeToggle = $('#themeToggle');
    const html = $('html');
    const body = $('body');

    // Get saved theme or default to light
    let currentTheme = localStorage.getItem('zarnite-theme') || 'light';

    // Apply saved theme
    applyTheme(currentTheme);

    // Theme toggle click handler
    themeToggle.on('click', function() {
        currentTheme = currentTheme === 'light' ? 'dark' : 'light';
        applyTheme(currentTheme);
        localStorage.setItem('zarnite-theme', currentTheme);
    });

    function applyTheme(theme) {
        body.attr('data-bs-theme', theme);

        if (theme === 'dark') {
            $('.theme-icon-light').addClass('d-none');
            $('.theme-icon-dark').removeClass('d-none');
        } else {
            $('.theme-icon-light').removeClass('d-none');
            $('.theme-icon-dark').addClass('d-none');
        }
    }

    // Mobile navigation
    $('.navbar-nav .nav-link').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        const target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });

    // Add active class to current page nav item
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    $('.navbar-nav .nav-link').each(function() {
        const href = $(this).attr('href');
        if (href === currentPage || (currentPage === '' && href === 'index.html')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    // Newsletter subscription
    $('.input-group button[type="button"]').on('click', function() {
        const email = $(this).siblings('input[type="email"]').val();
        if (email && isValidEmail(email)) {
            // Simulate subscription
            alert('Thank you for subscribing! We\'ll keep you updated.');
            $(this).siblings('input[type="email"]').val('');
        } else {
            alert('Please enter a valid email address.');
        }
    });

    // Email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Add fade-in animation to cards on scroll
    function animateOnScroll() {
        $('.card').each(function() {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('fade-in-up');
            }
        });
    }

    // Trigger animation on scroll
    $(window).on('scroll', animateOnScroll);

    // Trigger animation on page load
    animateOnScroll();

    // Navbar background on scroll
    $(window).on('scroll', function() {
        const scrollTop = $(window).scrollTop();
        if (scrollTop > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

    // Add loading animation for images
    $('img').on('load', function() {
        $(this).addClass('fade-in-up');
    });

    // Handle contact form submission (if exists)
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        // Simulate form submission
        alert('Thank you for your message! We\'ll get back to you soon.');
        this.reset();
    });

    // Handle early access form submission (if exists)
    $('#earlyAccessForm').on('submit', function(e) {
        e.preventDefault();
        // Simulate form submission
        alert('Thank you for your interest! We\'ll notify you when early access is available.');
        this.reset();
    });
});
