<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama          = mysqli_real_escape_string($conn, $_POST['nama_pemesan']);
    $email         = mysqli_real_escape_string($conn, $_POST['email']);
    $no_hp         = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $tgl_kunjungan = mysqli_real_escape_string($conn, $_POST['tgl_kunjungan']);
    $dewasa        = (int)$_POST['jumlah_dewasa'];
    $anak          = (int)$_POST['jumlah_anak'];

    // Hitung total harga
    $harga_dewasa = 25000;
    $harga_anak   = 15000;
    $total_bayar  = ($dewasa * $harga_dewasa) + ($anak * $harga_anak);

    // Buat Kode Booking Unik (Contoh: TF-20260920-X89A)
    $kode_booking = "TF-" . date("Ymd") . "-" . strtoupper(substr(md5(time()), 0, 4));

    // Simpan ke database
    $query = "INSERT INTO tiket_pesanan 
              (kode_booking, nama_pemesan, email, no_hp, tgl_kunjungan, jumlah_dewasa, jumlah_anak, total_bayar, status_pembayaran) 
              VALUES ('$kode_booking', '$nama', '$email', '$no_hp', '$tgl_kunjungan', $dewasa, $anak, $total_bayar, 'lunas')";

    if ($conn->query($query) === TRUE) {
        header("Location: e-tiket.php?kode=" . $kode_booking);
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>