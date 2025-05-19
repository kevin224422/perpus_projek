<?php
session_start();
include '../koneksi.php';

$iduser = $_POST['iduser'];
$password = $_POST['password'];

// Cek admin di tabel tbuser
$query = mysqli_query($db, "SELECT * FROM tbuser WHERE iduser='$iduser' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['admin'] = $data['iduser'];
    header("Location: ../index.php");
} else {
    header("Location: ../admin_login.php?error=Login gagal, periksa kembali ID dan password Anda.");
}
?>