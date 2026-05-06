<?php
session_start();
require "koneksi.php";

// Ambil ID pesanan dari URL
$id = $_GET['id'];

// Hapus langsung dari tabel pesanan
$query_hapus = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan = '$id'");

header("Location: riwayat.php"); exit();
?>