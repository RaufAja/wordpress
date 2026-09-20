<?php

include "koneksi.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "SELECT * FROM booking WHERE id_booking = '$id'";
    $result = mysqli_query($koneksi, $query);

    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Data booking tidak ditemukan.");
    }

} else {

    die("ID booking tidak ditemukan.");

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ubah Status Booking - Tirta Firdaus</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <div class="logo">
        Tirta Firdaus
    </div>

    <nav>

        <a href="index.php">Beranda</a>

        <a href="booking.php">Booking</a>

        <a href="admin.php">Admin</a>

    </nav>

</header>


<section class="admin-page">

    <div class="admin-container">

        <p class="label">ADMIN</p>

        <h1>Ubah Status Booking</h1>

        <p class="admin-info">
            Ubah status pemesanan tiket di bawah ini.
        </p>


        <form action="proses_status.php" method="POST">

            <input
                type="hidden"
                name="id_booking"
                value="<?php echo $data['id_booking']; ?>"
            >


            <p>
                <strong>Nama:</strong>
                <?php echo htmlspecialchars($data['nama']); ?>
            </p>


            <p>
                <strong>Tanggal:</strong>
                <?php echo htmlspecialchars($data['tanggal_booking']); ?>
            </p>


            <p>
                <strong>Jenis Tiket:</strong>
                <?php echo htmlspecialchars($data['jenis_tiket']); ?>
            </p>


            <label for="status">
                Status Booking
            </label>

            <br><br>


            <select name="status" id="status">

                <option value="Pending"
                    <?php
                    if ($data['status'] == 'Pending') {
                        echo 'selected';
                    }
                    ?>
                >
                    Pending
                </option>


                <option value="Dikonfirmasi"
                    <?php
                    if ($data['status'] == 'Dikonfirmasi') {
                        echo 'selected';
                    }
                    ?>
                >
                    Dikonfirmasi
                </option>


                <option value="Selesai"
                    <?php
                    if ($data['status'] == 'Selesai') {
                        echo 'selected';
                    }
                    ?>
                >
                    Selesai
                </option>


                <option value="Dibatalkan"
                    <?php
                    if ($data['status'] == 'Dibatalkan') {
                        echo 'selected';
                    }
                    ?>
                >
                    Dibatalkan
                </option>

            </select>


            <br><br>


            <button type="submit">
                Simpan Status
            </button>


            <a href="admin.php">
                Kembali
            </a>

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