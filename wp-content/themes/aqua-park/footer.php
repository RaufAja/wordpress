<?php if (!defined('ABSPATH')) exit; ?>
<footer class="site-footer">
<div class="container footer-grid">
<div><h3>🌊 AQUAPARK</h3><p>Tempat rekreasi air yang seru, nyaman, dan cocok untuk keluarga.</p></div>
<div><h3>Menu</h3><p><a href="<?php echo esc_url(home_url('/tiket')); ?>">Harga Tiket</a><br><a href="<?php echo esc_url(home_url('/fasilitas')); ?>">Fasilitas</a><br><a href="<?php echo esc_url(home_url('/booking')); ?>">Booking</a></p></div>
<div><h3>Kontak</h3><p>📍 Jl. Contoh No. 10<br>📞 08xx-xxxx-xxxx<br>✉️ info@aquapark.test</p></div>
</div>
<div class="container copyright">© <?php echo date('Y'); ?> AquaPark. Semua hak dilindungi.</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
