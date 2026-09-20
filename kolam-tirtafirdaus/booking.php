<?php include 'includes/header.php'; ?>

<div class="container">
    <h2>Form Pemesanan Tiket</h2>
    <form action="proses-booking.php" method="POST">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_pemesan" required placeholder="Contoh: Budi Santoso">
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required placeholder="nama@email.com">
            </div>
            <div class="form-group">
                <label>Nomor WhatsApp / HP</label>
                <input type="tel" name="no_hp" required placeholder="08123456789">
            </div>
        </div>

        <div class="form-group">
            <label>Tanggal Kunjungan</label>
            <input type="date" name="tgl_kunjungan" min="<?php echo date('Y-m-d'); ?>" required>
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label>Jumlah Dewasa (Rp 25.000 / orang)</label>
                <input type="number" name="jumlah_dewasa" min="0" value="1" required>
            </div>
            <div class="form-group">
                <label>Jumlah Anak-Anak (Rp 15.000 / orang)</label>
                <input type="number" name="jumlah_anak" min="0" value="0" required>
            </div>
        </div>

        <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Lanjut ke Pembayaran</button>
    </form>
</div>

</body>
</html>