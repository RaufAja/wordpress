<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

require_once "config/database.php";

// Ambil data statistik ringkas
$total_pesanan = $conn->query("SELECT COUNT(*) AS total FROM tiket_pesanan")->fetch_assoc()['total'];
$total_lunas   = $conn->query("SELECT COUNT(*) AS total FROM tiket_pesanan WHERE status_pembayaran = 'lunas'")->fetch_assoc()['total'];
$total_pending = $conn->query("SELECT COUNT(*) AS total FROM tiket_pesanan WHERE status_pembayaran = 'pending'")->fetch_assoc()['total'];
$total_omset   = $conn->query("SELECT SUM(total_bayar) AS total FROM tiket_pesanan WHERE status_pembayaran = 'lunas'")->fetch_assoc()['total'] ?? 0;

// Ambil seluruh data log pesanan (diurutkan dari yang terbaru)
$query = "SELECT * FROM tiket_pesanan ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tirta Firdaus</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            border-left: 5px solid #0077b6;
        }

        .stat-card h3 {
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        .stat-card p {
            margin: 10px 0 0;
            font-size: 22px;
            font-weight: bold;
            color: #0077b6;
        }

        .table-responsive {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            white-space: nowrap;
        }

        th {
            background-color: #f4f8fb;
            color: #0077b6;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .badge-lunas { background: #e8f5e9; color: #2e7d32; }
        .badge-pending { background: #fffde7; color: #f57f17; }

        .btn-action {
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 12px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .btn-status { background: #00b4d8; }
        .btn-delete { background: #e63946; }
    </style>
</head>
<body>

<header>
    <div class="logo">
        Tirta Firdaus - Panel Admin
    </div>
    <nav>
        <a href="index.php" target="_blank">Lihat Website</a>
        <a href="logout.php" style="color: #ff4d4d; margin-left: 15px; font-weight: bold;">Logout</a>
    </nav>
</header>

<div class="admin-container">
    <h2>Riwayat & Log Pesanan Tiket</h2>

    <!-- Ringkasan Statistik -->
    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Pesanan</h3>
            <p><?= number_format($total_pesanan); ?></p>
        </div>
        <div class="stat-card" style="border-color: #2e7d32;">
            <h3>Pesanan Lunas</h3>
            <p style="color: #2e7d32;"><?= number_format($total_lunas); ?></p>
        </div>
        <div class="stat-card" style="border-color: #f57f17;">
            <h3>Pesanan Pending</h3>
            <p style="color: #f57f17;"><?= number_format($total_pending); ?></p>
        </div>
        <div class="stat-card" style="border-color: #00b4d8;">
            <h3>Total Pendapatan</h3>
            <p style="color: #00b4d8;">Rp <?= number_format($total_omset, 0, ',', '.'); ?></p>
        </div>
    </div>

    <!-- Tabel Data Pemesan -->
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Booking</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>No. HP / WA</th>
                    <th>Tgl Kunjungan</th>
                    <th>Rincian Orang</th>
                    <th>Total Bayar</th>
                    <th>Status</th>
                    <th>Waktu Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><strong><?= $row['kode_booking']; ?></strong></td>
                            <td><?= htmlspecialchars($row['nama_pemesan']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td>
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $row['no_hp']); ?>" target="_blank" style="color: #0077b6; text-decoration: none;">
                                    <?= htmlspecialchars($row['no_hp']); ?> 💬
                                </a>
                            </td>
                            <td><?= date('d-m-Y', strtotime($row['tgl_kunjungan'])); ?></td>
                            <td><?= $row['jumlah_dewasa']; ?> Dewasa, <?= $row['jumlah_anak']; ?> Anak</td>
                            <td><strong>Rp <?= number_format($row['total_bayar'], 0, ',', '.'); ?></strong></td>
                            <td>
                                <span class="badge <?= $row['status_pembayaran'] == 'lunas' ? 'badge-lunas' : 'badge-pending'; ?>">
                                    <?= $row['status_pembayaran']; ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y H:i', strtotime($row['created_at'])); ?></td>
                            <td>
                                <a href="ubah_status.php?id=<?= $row['id']; ?>&status=<?= $row['status_pembayaran'] == 'lunas' ? 'pending' : 'lunas'; ?>" class="btn-action btn-status">
                                    Ubah Status
                                </a>
                                <a href="ubah_status.php?action=delete&id=<?= $row['id']; ?>" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11" style="text-align: center; color: #999;">Belum ada pesanan masuk.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>