<?php
session_start();
require "koneksi.php";
$id = $_GET['id'];
$query_hapus = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan = '$id'");

header("Location: riwayat.php"); exit();
?>