<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolam Renang Tirta Firdaus</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="main-header">
    <nav class="navbar">
        <a href="index.php" class="brand-logo">
            🏊‍♂️ Tirta Firdaus
        </a>
        
        <!-- Tombol Hamburger untuk Tampilan Layar HP -->
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php" class="nav-link">Beranda</a></li>
            <li><a href="index.php#fasilitas" class="nav-link">Fasilitas</a></li>
            <li><a href="index.php#harga" class="nav-link">Harga Tiket</a></li>
            <li><a href="index.php#lokasi" class="nav-link">Lokasi</a></li>
            <li><a href="booking.php" class="nav-link btn-nav-ticket">Pesan Tiket Online</a></li>
        </ul>
    </nav>
</header>

<script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const navMenu = document.getElementById('navMenu');

    hamburgerBtn.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburgerBtn.classList.toggle('active');
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburgerBtn.classList.remove('active');
        });
    });
</script>