<?php

include "koneksi.php";

// Ambil data dari form
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$tanggal_booking = $_POST['tanggal_booking'];
$jenis_tiket = $_POST['jenis_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];

// Harga tiket
if ($jenis_tiket == "Dewasa") {
    $harga_tiket = 15000;
} else {
    $harga_tiket = 10000;
}

// Hitung total
$total_harga = $harga_tiket * $jumlah_tiket;

// Status awal
$status = "Pending";

// Simpan ke database
$query = "INSERT INTO booking 
(nama, no_hp, tanggal_booking, jenis_tiket, jumlah_tiket, total_harga, status)
VALUES 
('$nama', '$no_hp', '$tanggal_booking', '$jenis_tiket', '$jumlah_tiket', '$total_harga', '$status')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>
        alert('Booking berhasil disimpan!');
        window.location='booking.php';
    </script>";
} else {
    echo "Booking gagal: " . mysqli_error($koneksi);
}

?>