<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Banking Solution</title>
<!-- Font Imports -->
<link href="https://api.fontshare.com/v2/css?f[]=clash-display@400,600&f[]=satoshi@400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=WDXL+Lubrifont+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/header.css">
</head>
<body class="gradient-bg">
<header class="glass-navbar">
        <nav>
            <div class="nav-left">
                <a href="index.php">Home</a>
                <a href="work.php">Ons werk</a>
                <a href="services.php">Diensten</a>
            </div>
            <div class="logo">
                <img src="assets/images/logo.png" alt="Banking Logo" width="100">
            </div>
            <div class="nav-right">
                <a href="aboutus.php">Over ons</a>
                <a href="packages.php">Pakketten</a>
                <a href="contact.php"><button class="nav-cta">Contact</button></a>
            </div>
        </nav>
    </header>

    <!-- Mobile Header (shown on mobile) -->
    <div class="mobile-header">
        <div class="mobile-logo">
            <img src="assets/images/logo.png" alt="Logo">
        </div>
        <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <a href="index.php">Home</a>
        <a href="work.php">Ons werk</a>
        <a href="services.php">Diensten</a>
        <a href="aboutus.php">Over ons</a>
        <a href="packages.php">Pakketten</a>
        <a href="contact.php"><button class="mobile-cta">Contact</button></a>
    </div>
    <script>        document.addEventListener('DOMContentLoaded', () => {
 
            // Mobile menu functionality
            const hamburger = document.querySelector('.hamburger');
            const mobileMenu = document.querySelector('.mobile-menu');

            const toggleMenu = () => {
                hamburger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
            };

            hamburger.addEventListener('click', toggleMenu);

            // Close menu when clicking on links
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', toggleMenu);
            });

            // Handle window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768 && mobileMenu.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });</script>