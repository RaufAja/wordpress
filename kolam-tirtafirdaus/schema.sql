CREATE DATABASE IF NOT EXISTS tirta_firdaus;
USE tirta_firdaus;

CREATE TABLE IF NOT EXISTS tiket_pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_booking VARCHAR(20) NOT NULL UNIQUE,
    nama_pemesan VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    tgl_kunjungan DATE NOT NULL,
    jumlah_dewasa INT DEFAULT 0,
    jumlah_anak INT DEFAULT 0,
    total_bayar DECIMAL(10,2) NOT NULL,
    status_pembayaran ENUM('pending', 'lunas', 'batal') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);