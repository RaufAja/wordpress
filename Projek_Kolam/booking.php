<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket - Tirta Firdaus</title>
    <!-- CSS Utama untuk Navbar & Header Beranda -->
    <link rel="stylesheet" href="style.css">
    
    <!-- CSS Tambahan Khusus Form Booking -->
    <style>
        .booking-container {
            max-width: 650px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .booking-container h2 {
            margin-top: 0;
            margin-bottom: 25px;
            color: #0077b6;
            font-size: 24px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #0077b6;
            outline: none;
        }

        .btn-submit {
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

        .btn-submit:hover {
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

<div class="booking-container">
    <h2>Form Pemesanan Tiket</h2>
    
    <form action="proses-booking.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Contoh: Budi Santoso" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" required>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor WhatsApp / HP</label>
            <input type="text" id="no_hp" name="no_hp" placeholder="08123456789" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Kunjungan</label>
            <input type="date" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="tiket_dewasa">Jumlah Dewasa (Rp 25.000 / orang)</label>
            <input type="number" id="tiket_dewasa" name="tiket_dewasa" value="1" min="0" required>
        </div>

        <div class="form-group">
            <label for="tiket_anak">Jumlah Anak-Anak (Rp 15.000 / orang)</label>
            <input type="number" id="tiket_anak" name="tiket_anak" value="0" min="0" required>
        </div>

        <button type="submit" class="btn-submit">Lanjut ke Pembayaran</button>
    </form>
</div>

</body>
</html>