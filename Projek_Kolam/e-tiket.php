<?php
require_once "config/database.php";

$kode = isset($_GET['kode']) ? mysqli_real_escape_string($conn, $_GET['kode']) : '';
$query = "SELECT * FROM tiket_pesanan WHERE kode_booking = '$kode'";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    echo "<div style='text-align:center; padding:50px;'><h3>Tiket tidak ditemukan.</h3><a href='index.php'>Kembali ke Beranda</a></div>";
    exit;
}

$tiket = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket - Tirta Firdaus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">
        Tirta Firdaus
    </div>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="index.php#galeri">Galeri</a>
        <a href="booking.php" class="btn">Pesan Tiket</a>
    </nav>
</header>

<div class="container">
    <div class="ticket-card">
        <h2>E-Tiket Kolam Renang Tirta Firdaus</h2>
        
        <div class="ticket-details">
            <p><strong>Kode Booking:</strong> <?= $tiket['kode_booking']; ?></p>
            <p><strong>Nama Pemesan:</strong> <?= htmlspecialchars($tiket['nama_pemesan']); ?></p>
            <p><strong>Tanggal Kunjungan:</strong> <?= date('d-m-Y', strtotime($tiket['tgl_kunjungan'])); ?></p>
            <p><strong>Rincian:</strong> <?= $tiket['jumlah_dewasa']; ?> Dewasa, <?= $tiket['jumlah_anak']; ?> Anak</p>
            <p><strong>Total Bayar:</strong> Rp <?= number_format($tiket['total_bayar'], 0, ',', '.'); ?></p>
            <p><strong>Status:</strong> <span style="color: green; font-weight: bold; text-transform: uppercase;"><?= $tiket['status_pembayaran']; ?></span></p>
        </div>

        <div class="qr-section">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data=<?= $tiket['kode_booking']; ?>" alt="QR Code E-Tiket">
            <p style="font-size: 12px; color: #666; margin-top: 5px;">Tunjukkan QR Code ini kepada petugas di gerbang masuk.</p>
        </div>

        <button onclick="window.print()" class="btn-print">Cetak E-Tiket</button>
    </div>
</div>

</body>
</html>