<?php
require_once 'config/database.php';

$query = "SELECT * FROM booking ORDER BY id_booking DESC";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Booking - Tirta Firdaus</title>

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

        <h1>Data Booking</h1>

        <p class="admin-info">
            Daftar pemesanan tiket Kolam Renang Tirta Firdaus.
        </p>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Nama</th>
                        <th>No. HP</th>
                        <th>Tanggal</th>
                        <th>Jenis Tiket</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>

                <?php

                $no = 1;

                while ($data = mysqli_fetch_assoc($result)) {

                ?>

                    <tr>

                        <td>
                            <?php echo $no++; ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['nama']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['no_hp']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['tanggal_booking']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['jenis_tiket']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['jumlah_tiket']); ?>
                        </td>

                        <td>
                            Rp <?php echo number_format($data['total_harga'], 0, ',', '.'); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($data['status']); ?>
                        </td>

                        <td>

                            <a href="ubah_status.php?id=<?php echo $data['id_booking']; ?>">
                                Ubah Status
                            </a>

                            <br><br>

                            <a href="hapus_booking.php?id=<?php echo $data['id_booking']; ?>"
                               onclick="return confirm('Yakin ingin menghapus booking ini?');">
                                Hapus
                            </a>

                        </td>

                    </tr>

                <?php

                }

                ?>

                </tbody>

            </table>

        </div>

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