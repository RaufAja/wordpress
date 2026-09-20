<?php
$host     = "localhost";
$user     = "root";
$pass     = "";
$dbname   = "tirta_firdaus";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}
?>