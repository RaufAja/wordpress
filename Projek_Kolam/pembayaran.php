<?php
require_once 'config/database.php';

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
    <p>Total tagihan yang harus dibayar: <strong style="color: var(--primary); font-size: 1.2rem;">Rp <?= number_format($tiket['total_bayar'], 0, ',', '.'); ?></strong></p>
    <form method="POST">
        <div class="form-group">
    <label style="margin-bottom: 0.8rem; display: block;">Metode Pembayaran Digital:</label>
    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
        
        <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
            <input type="radio" name="metode" value="qris" checked style="width: auto; margin: 0;">
            <span><strong>QRIS</strong> (GoPay, OVO, Dana, LinkAja, ShopeePay)</span>
        </label>

        <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
            <input type="radio" name="metode" value="bca" style="width: auto; margin: 0;">
            <span><strong>Virtual Account BCA</strong></span>
        </label>

        <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal; cursor: pointer;">
            <input type="radio" name="metode" value="mandiri" style="width: auto; margin: 0;">
            <span><strong>Virtual Account Mandiri</strong></span>
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