<?php
require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    
    // Ambil input tiket (pastikan dikonversi ke integer)
    $tiket_dewasa = isset($_POST['tiket_dewasa']) ? (int)$_POST['tiket_dewasa'] : 0;
    $tiket_anak = isset($_POST['tiket_anak']) ? (int)$_POST['tiket_anak'] : 0;

    // Hitung Total Bayar
    $harga_dewasa = 25000;
    $harga_anak = 15000;
    $total_bayar = ($tiket_dewasa * $harga_dewasa) + ($tiket_anak * $harga_anak);

    // Buat Kode Booking Unik
    $kode_booking = "TF-" . date("Ymd") . "-" . strtoupper(substr(md5(uniqid()), 0, 4));

    // Simpan ke Database
// Simpan ke Database (menggunakan nama kolom 'tanggal')
$query = "INSERT INTO tiket_pesanan 
          (kode_booking, nama_pemesan, email, no_hp, tanggal, jumlah_dewasa, jumlah_anak, total_harga, status_pembayaran) 
          VALUES 
          ('$kode_booking', '$nama', '$email', '$no_hp', '$tanggal', '$tiket_dewasa', '$tiket_anak', '$total_bayar', 'pending')";
          
    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman pembayaran dengan membawa kode booking
        header("Location: pembayaran.php?kode=" . $kode_booking);
        exit;
    } else {
        echo "Gagal menyimpan pesanan: " . mysqli_error($conn);
    }
}
?>