<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Tiket - Tirta Firdaus</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="logo">
        Tirta Firdaus
    </div>

    <nav>
        <a href="index.php">Beranda</a>
        <a href="#">Harga Tiket</a>
        <a href="#">Fasilitas</a>
        <a href="#">Galeri</a>
        <a href="booking.php">Booking</a>
    </nav>
</header>


<section class="booking-page">

    <div class="booking-container">

        <p class="label">PEMESANAN TIKET</p>

        <h1>Booking Tiket</h1>

        <p class="booking-info">
            Silakan isi data di bawah ini untuk melakukan
            pemesanan tiket Kolam Renang Tirta Firdaus.
        </p>


        <form action="proses_booking.php" method="POST">

            <div class="form-group">
                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>


            <div class="form-group">
                <label>No. HP</label>

                <input
                    type="text"
                    name="no_hp"
                    placeholder="Masukkan nomor HP"
                    required
                >
            </div>


            <div class="form-group">
                <label>Tanggal Booking</label>

                <input
                    type="date"
                    name="tanggal_booking"
                    required
                >
            </div>


            <div class="form-group">
                <label>Jenis Tiket</label>

                <select name="jenis_tiket" required>

                    <option value="">-- Pilih Tiket --</option>

                    <option value="Dewasa">
                        Tiket Dewasa
                    </option>

                    <option value="Anak-anak">
                        Tiket Anak-anak
                    </option>

                </select>
            </div>


            <div class="form-group">
                <label>Jumlah Tiket</label>

                <input
                    type="number"
                    name="jumlah_tiket"
                    min="1"
                    placeholder="Masukkan jumlah tiket"
                    required
                >
            </div>


            <button type="submit" class="btn-booking">
                Booking Sekarang
            </button>

        </form>

    </div>

</section>


<footer>

    <h3>Tirta Firdaus</h3>

    <p>
        Kolam Renang Tirta Firdaus
    </p>

    <p>
        © 2026 Tirta Firdaus
    </p>

</footer>

</body>
</html>