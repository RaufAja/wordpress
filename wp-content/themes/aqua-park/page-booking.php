<?php /* Template Name: Booking Tiket */ get_header(); ?>
<main>
<section class="page-title"><div class="container"><h1>Pesan Tiket</h1></div></section>
<section class="content"><div class="container booking">
<div>
<h2>Booking mudah, datang dan berenang!</h2>
<p>Pilih tanggal kunjungan dan jumlah tiket. Form ini adalah template awal dan belum terhubung ke sistem pembayaran.</p>
<div class="notice">💡 Untuk tugas sekolah, kamu bisa menghubungkan form ini ke WhatsApp, Google Forms, atau plugin booking nantinya.</div>
</div>
<div class="form-box">
<form action="#" method="post" onsubmit="alert('Demo: formulir berhasil dikirim. Hubungkan ke sistem booking untuk penggunaan nyata.'); return false;">
<label for="date">Tanggal kunjungan</label><input id="date" type="date" required>
<label for="ticket">Jenis tiket</label>
<select id="ticket"><option>Anak - Rp15.000</option><option>Dewasa - Rp25.000</option><option>Keluarga - Rp80.000</option></select>
<label for="qty">Jumlah tiket</label><input id="qty" type="number" min="1" value="1" required>
<label for="name">Nama pemesan</label><input id="name" type="text" required>
<label for="phone">Nomor WhatsApp</label><input id="phone" type="tel" required>
<br><br><button class="btn" type="submit">Kirim Booking</button>
</form>
</div>
</div></section>
</main>
<?php get_footer(); ?>
