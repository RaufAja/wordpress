<?php
require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    
    $tiket_dewasa = isset($_POST['tiket_dewasa']) ? (int)$_POST['tiket_dewasa'] : 0;
    $tiket_anak = isset($_POST['tiket_anak']) ? (int)$_POST['tiket_anak'] : 0;

    // Perhitungan total harga
    $harga_dewasa = 25000;
    $harga_anak = 15000;
    $total_bayar = ($tiket_dewasa * $harga_dewasa) + ($tiket_anak * $harga_anak);

    $kode_booking = "TF-" . date("Ymd") . "-" . strtoupper(substr(md5(uniqid()), 0, 4));

    // Query disesuaikan dengan kolom tgl_kunjungan & total_bayar
    $query = "INSERT INTO tiket_pesanan 
              (kode_booking, nama_pemesan, email, no_hp, tgl_kunjungan, jumlah_dewasa, jumlah_anak, total_bayar, status_pembayaran) 
              VALUES 
              ('$kode_booking', '$nama', '$email', '$no_hp', '$tanggal', '$tiket_dewasa', '$tiket_anak', '$total_bayar', 'pending')";

    if (mysqli_query($conn, $query)) {
        header("Location: pembayaran.php?kode=" . $kode_booking);
        exit;
    } else {
        echo "Gagal menyimpan pesanan: " . mysqli_error($conn);
    }
}
?>