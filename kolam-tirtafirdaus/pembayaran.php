<?php
require_once 'config/database.php';
include 'includes/header.php';

$kode = isset($_GET['kode']) ? mysqli_real_escape_string($conn, $_GET['kode']) : '';
$query = "SELECT * FROM tiket_pesanan WHERE kode_booking = '$kode'";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    echo "<div class='container'><p>Pesanan tidak ditemukan.</p></div>";
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

<div class="container">
    <h2>Pilih Metode Pembayaran</h2>
    <p>Kode Booking: <strong><?php echo $tiket['kode_booking']; ?></strong></p>
    <p>Total tagihan yang harus dibayar: <strong style="color: var(--primary); font-size: 1.2rem;">Rp <?php echo number_format($tiket['total_bayar'], 0, ',', '.'); ?></strong></p>
    <hr>

    <form method="POST">
        <div class="form-group">
            <label>Metode Pembayaran Digital:</label>
            <div style="margin-top: 0.5rem;">
                <label style="font-weight: normal; display: block; margin-bottom: 8px;">
                    <input type="radio" name="metode" value="qris" checked> <strong>QRIS</strong> (GoPay, OVO, Dana, LinkAja, ShopeePay)
                </label>
                <label style="font-weight: normal; display: block; margin-bottom: 8px;">
                    <input type="radio" name="metode" value="bca"> <strong>Virtual Account BCA</strong>
                </label>
                <label style="font-weight: normal; display: block; margin-bottom: 8px;">
                    <input type="radio" name="metode" value="mandiri"> <strong>Virtual Account Mandiri</strong>
                </label>
            </div>
        </div>

        <div style="background: #f1f5f9; padding: 1rem; border-radius: 8px; text-align: center; margin: 1.5rem 0;">
            <p style="margin: 0 0 10px 0; font-size: 0.9rem; color: #475569;">Scan QRIS di bawah ini untuk membayar:</p>
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data=PAY-<?php echo $tiket['kode_booking']; ?>" alt="QRIS Payment">
        </div>

        <button type="submit" name="konfirmasi_bayar" class="btn" style="width: 100%;">Saya Sudah Bayar (Konfirmasi)</button>
    </form>
</div>

</body>
</html>