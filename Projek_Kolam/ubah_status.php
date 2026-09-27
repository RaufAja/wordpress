<?php
require_once "config/database.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($id > 0) {
    if ($action === 'delete') {
        // Hapus pesanan
        $query = "DELETE FROM tiket_pesanan WHERE id = $id";
        $conn->query($query);
    } else {
        // Ubah status pembayaran
        $status = isset($_GET['status']) ? mysqli_real_escape_string($conn, $_GET['status']) : 'pending';
        $query = "UPDATE tiket_pesanan SET status_pembayaran = '$status' WHERE id = $id";
        $conn->query($query);
    }
}

header("Location: admin.php");
exit;
?>