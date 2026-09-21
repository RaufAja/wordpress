-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2026 pada 04.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tirta_firdaus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_pesanan`
--

CREATE TABLE `tiket_pesanan` (
  `id` int(11) NOT NULL,
  `kode_booking` varchar(20) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `jumlah_dewasa` int(11) DEFAULT 0,
  `jumlah_anak` int(11) DEFAULT 0,
  `total_bayar` decimal(10,2) NOT NULL,
  `status_pembayaran` enum('pending','lunas','batal') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tiket_pesanan`
--

INSERT INTO `tiket_pesanan` (`id`, `kode_booking`, `nama_pemesan`, `email`, `no_hp`, `tgl_kunjungan`, `jumlah_dewasa`, `jumlah_anak`, `total_bayar`, `status_pembayaran`, `created_at`) VALUES
(1, 'TF-20260920-030B', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-27', 0, 1, 15000.00, 'lunas', '2026-09-20 07:45:05'),
(2, 'TF-20260920-29F2', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-27', 0, 1, 15000.00, 'lunas', '2026-09-20 07:51:42'),
(3, 'TF-20260920-61BC', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-27', 1, 0, 25000.00, 'lunas', '2026-09-20 08:22:10'),
(4, 'TF-20260920-051B', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-27', 9, 19, 510000.00, 'lunas', '2026-09-20 08:32:54'),
(5, 'TF-20260920-A35B', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-25', 16, 0, 400000.00, 'lunas', '2026-09-20 09:24:39'),
(6, 'TF-20260920-ABC9', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-20', 1, 0, 25000.00, 'lunas', '2026-09-20 14:07:19'),
(7, 'TF-20260920-8D37', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-20', 9999999, 0, 99999999.99, 'lunas', '2026-09-20 15:45:20'),
(8, 'TF-20260921-33E3', '', 'raufpg12@gmail.com', '0123456789', '0000-00-00', 0, 0, 0.00, 'pending', '2026-09-21 01:14:20'),
(9, 'TF-20260921-91CE', '', 'raufpg12@gmail.com', '0123456789', '0000-00-00', 0, 0, 0.00, 'pending', '2026-09-21 01:14:38'),
(10, 'TF-20260921-E1B3', '', 'raufpg12@gmail.com', '0123456789', '0000-00-00', 0, 0, 0.00, 'pending', '2026-09-21 01:15:31'),
(11, 'TF-20260921-557C', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-20', 10, 10, 400000.00, 'pending', '2026-09-21 01:57:16'),
(12, 'TF-20260921-7FBE', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-20', 10, 10, 400000.00, 'lunas', '2026-09-21 01:57:31'),
(13, 'TF-20260921-6127', 'Rauf Putra Gunawan', 'raufpg12@gmail.com', '0123456789', '2026-09-22', 10, 0, 250000.00, 'lunas', '2026-09-21 02:46:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tiket_pesanan`
--
ALTER TABLE `tiket_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_booking` (`kode_booking`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tiket_pesanan`
--
ALTER TABLE `tiket_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
