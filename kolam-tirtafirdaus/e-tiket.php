<?php 
require_once 'config/database.php';
include 'includes/header.php';

$kode = isset($_GET['kode']) ? mysqli_real_escape_string($conn, $_GET['kode']) : '';
$query = "SELECT * FROM tiket_pesanan WHERE kode_booking = '$kode'";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    echo "<div class='container'><p>Tiket tidak ditemukan.</p></div>";
    exit;
}

$tiket = $result->fetch_assoc();
?>

<div class="container">
    <div class="ticket-card">
        <h3 style="margin-top:0; color: var(--primary);">E-Tiket Kolam Renang Tirta Firdaus</h3>
        <p><strong>Kode Booking:</strong> <?php echo $tiket['kode_booking']; ?></p>
        <hr>
        <p><strong>Nama Pemesan:</strong> <?php echo $tiket['nama_pemesan']; ?></p>
        <p><strong>Tanggal Kunjungan:</strong> <?php echo date('d-m-Y', strtotime($tiket['tgl_kunjungan'])); ?></p>
        <p><strong>Rincian:</strong> <?php echo $tiket['jumlah_dewasa']; ?> Dewasa, <?php echo $tiket['jumlah_anak']; ?> Anak</p>
        <p><strong>Total Bayar:</strong> Rp <?php echo number_number_format($tiket['total_bayar'], 0, ',', '.'); ?></p>
        <p><strong>Status:</strong> <span style="color: green; font-weight: bold;"><?php echo strtoupper($tiket['status_pembayaran']); ?></span></p>
        
        <div style="text-align: center; margin-top: 1.5rem;">
            <!-- Menggunakan API QR Code publik untuk membuat QR tiket dinamis -->
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $tiket['kode_booking']; ?>" alt="QR Code Tiket">
            <p style="font-size: 0.85rem; color: #64748b;">Tunjukkan QR Code ini kepada petugas di gerbang masuk.</p>
        </div>
    </div>
    <div style="margin-top: 1rem; text-align: center;">
        <button onclick="window.print()" class="btn">Cetak E-Tiket</button>
    </div>
</div>

</body>
</html>