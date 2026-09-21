<?php
require_once "config/database.php";

$kode = isset($_GET['kode']) ? mysqli_real_escape_string($conn, $_GET['kode']) : '';
$query = "SELECT * FROM tiket_pesanan WHERE kode_booking = '$kode'";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    echo "<div style='text-align:center; margin-top:50px;'><h3>Pesanan tidak ditemukan.</h3><a href='index.php'>Kembali ke Beranda</a></div>";
    exit;
}

$tiket = $result->fetch_assoc();

// Proses konfirmasi simulasi pembayaran
if (isset($_POST['konfirmasi_bayar'])) {
    $conn->query("UPDATE tiket_pesanan SET status_pembayaran = 'lunas' WHERE kode_booking = '$kode'");
    header("Location: e-tiket.php?kode=" . $kode);
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Tiket - Tirta Firdaus</title>
    <!-- File CSS Utama agar Header & Navigasi Sama Persis -->
    <link rel="stylesheet" href="style.css">

    <!-- CSS Khusus Tampilan Kotak Pembayaran -->
    <style>
        .payment-container {
            max-width: 650px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .payment-container h2 {
            margin-top: 0;
            color: #0077b6;
            font-size: 24px;
            text-align: center;
        }

        .booking-info {
            background-color: #f4f8fb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .booking-info p {
            margin: 6px 0;
            font-size: 15px;
        }

        .qr-box {
            background-color: #f8f9fa;
            border: 1px dashed #0077b6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
        }

        .qr-box img {
            width: 180px;
            height: 180px;
            margin-top: 10px;
        }

        .payment-options {
            margin: 15px 0;
        }

        .payment-options label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-confirm {
            width: 100%;
            background-color: #00b4d8;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .btn-confirm:hover {
            background-color: #0077b6;
        }
    </style>
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

<div class="payment-container">
    <h2>Pilih Metode Pembayaran</h2>

    <div class="booking-info">
        <p><strong>Kode Booking:</strong> <?= $tiket['kode_booking']; ?></p>
        <p><strong>Total tagihan yang harus dibayar:</strong> <span style="color: #0077b6; font-size: 1.2rem; font-weight: bold;">Rp <?= number_format($tiket['total_bayar'], 0, ',', '.'); ?></span></p>
    </div>

    <form method="POST">
        <p><strong>Metode Pembayaran Digital:</strong></p>
        <div class="payment-options">
            <label>
                <input type="radio" name="metode" value="qris" checked>
                <span><strong>QRIS</strong> (GoPay, OVO, Dana, LinkAja, ShopeePay)</span>
            </label>
            <label>
                <input type="radio" name="metode" value="bca">
                <span><strong>Virtual Account BCA</strong></span>
            </label>
            <label>
                <input type="radio" name="metode" value="mandiri">
                <span><strong>Virtual Account Mandiri</strong></span>
            </label>
        </div>

        <div class="qr-box">
            <p style="margin:0; font-size:13px; color:#555;">Scan QRIS di bawah ini untuk membayar:</p>
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=<?= $tiket['kode_booking']; ?>" alt="QR Code Pembayaran">
        </div>

        <button type="submit" name="konfirmasi_bayar" class="btn-confirm">Saya Sudah Bayar (Konfirmasi)</button>
    </form>
</div>

</body>
</html>