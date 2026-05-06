<?php
session_start();
require "koneksi.php";
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
    header("Location: login.php");
    exit;
}

$id_user_log = $_SESSION['userID'];
$query = mysqli_query($koneksi, "SELECT pesanan.*, film.judul_film 
                                 FROM pesanan 
                                 JOIN film ON pesanan.id_film = film.id_film 
                                 WHERE pesanan.id_user = '$id_user_log'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Riwayat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--inner-color);
    color: var(--text-color);
    margin: 100px;
    margin-top: 5px;
    padding: 10px;
    justify-content: center;
    height: 100vh;

    display: flex;
    background: url('bg_film3.jpg') no-repeat center center fixed;
    background-size: cover;
    background-blend-mode: darken;
    background-color: rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="p-5">
    <div class="card p-4 mx-auto shadow" style="max-width: 800px; background: rgba(255,255,255,0.95);">
        <h2 class="text-center mb-4">Riwayat Pesanan Kamu</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="dashboard.php" class="btn btn-danger">Kembali ke Beranda</a>
            <a href="form_pesanan.php" class="btn btn-danger">+ Tambah Pesanan</a>
        </div>
        
        <table class="table table-hover table-bordered text-center">
            <thead class="table-danger">
                <tr>
                    <th>Tanggal</th>
                    <th>Judul Film</th>
                    <th>Jumlah Tiket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['judul_film']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td>
                        <a href="edit_pesanan.php?id=<?= $row['id_pesanan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus_pesanan.php?id=<?= $row['id_pesanan']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin membatalkan pesanan ini?');">Batal</a>
                    </td>
                </tr>
                <?php } ?>
                <?php if(mysqli_num_rows($query) == 0) echo "<tr><td colspan='4'>Belum ada pesanan.</td></tr>"; ?>
            </tbody> 
        </table>
    </div>
</body>
</html>