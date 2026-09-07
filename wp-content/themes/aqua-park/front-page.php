<?php get_header(); ?>
<main>
<section class="hero">
<div class="container hero-grid">
<div>
<span class="badge">🏊 Buka setiap hari</span>
<h1>Segarkan Harimu di <span>AquaPark!</span></h1>
<p>Kolam renang untuk bersantai, bermain, dan menghabiskan waktu bersama keluarga. Pesan tiket dengan mudah secara online.</p>
<div class="actions">
<a class="btn" href="<?php echo esc_url(home_url('/booking')); ?>">🎟️ Pesan Tiket</a>
<a class="btn secondary" href="<?php echo esc_url(home_url('/fasilitas')); ?>">Lihat Fasilitas</a>
</div>
</div>
<div class="hero-card"><div class="pool-emoji">🏊‍♂️🌊</div></div>
</div>
</section>

<section class="section">
<div class="container">
<div class="section-head"><h2>Kenapa Pilih AquaPark?</h2><p>Semua yang kamu butuhkan untuk hari yang menyenangkan.</p></div>
<div class="cards">
<div class="card"><div class="icon">💦</div><h3>Kolam Bersih</h3><p>Area kolam dirawat secara rutin agar tetap nyaman digunakan.</p></div>
<div class="card"><div class="icon">👨‍👩‍👧</div><h3>Ramah Keluarga</h3><p>Area bermain air yang cocok untuk berbagai usia.</p></div>
<div class="card"><div class="icon">🛟</div><h3>Aman & Nyaman</h3><p>Tersedia area pengawasan dan fasilitas pendukung.</p></div>
</div>
</div>
</section>

<section class="section alt">
<div class="container">
<div class="section-head"><h2>Harga Tiket</h2><p>Pilih tiket sesuai kebutuhanmu.</p></div>
<div class="price-grid">
<div class="price"><h3>Anak</h3><div class="amount">Rp15.000</div><p>Per orang</p><a class="btn" href="<?php echo esc_url(home_url('/booking')); ?>">Pesan</a></div>
<div class="price featured"><h3>Dewasa</h3><div class="amount">Rp25.000</div><p>Per orang</p><a class="btn" href="<?php echo esc_url(home_url('/booking')); ?>">Pesan</a></div>
<div class="price"><h3>Keluarga</h3><div class="amount">Rp80.000</div><p>Untuk 4 orang</p><a class="btn" href="<?php echo esc_url(home_url('/booking')); ?>">Pesan</a></div>
</div>
</div>
</section>

<section class="cta"><div class="container"><h2>Siap berenang?</h2><p>Pesan tiketmu sekarang dan nikmati hari yang menyenangkan!</p><a class="btn secondary" href="<?php echo esc_url(home_url('/booking')); ?>">🎟️ Booking Sekarang</a></div></section>
</main>
<?php get_footer(); ?>
