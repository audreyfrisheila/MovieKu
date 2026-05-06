<?php
session_start();
require "koneksi.php";

if (!isset($_SESSION['status'])) { header("Location: login.php"); exit; }

$id_pesanan = $_GET['id'];


if (isset($_POST['update'])) {
    $jml_baru = $_POST['jumlah'];
    $update = mysqli_query($koneksi, "UPDATE pesanan SET jumlah = '$jml_baru' WHERE id_pesanan = '$id_pesanan'");
    
    if ($update) {
        echo "<script>alert('Pesanan berhasil diperbarui!'); location.href='riwayat.php';</script>";
    } else {
        echo "Gagal update: " . mysqli_error($koneksi);
    }
}

$data_lama = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT p.*, f.judul_film FROM pesanan p JOIN film f ON p.id_film = f.id_film WHERE p.id_pesanan = '$id_pesanan'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Pesanan - MovieKu</title>
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
<body class="p-5" style="background-color: #f4f4f4;">
    <div class="card p-4 mx-auto shadow" style="max-width: 400px;">
        <h3 class="text-center mb-4">Edit Pesanan</h3>
        <p><strong>Film:</strong> <?= $data_lama['judul_film']; ?></p>
        
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Jumlah Tiket Baru:</label>
                <input type="number" name="jumlah" class="form-control" value="<?= $data_lama['jumlah']; ?>" required>
            </div>
            
            <button type="submit" name="update" class="btn btn-danger w-100 mb-2">Simpan Perubahan</button>
            <a href="riwayat.php" class="btn btn-secondary w-100">Batal</a>
        </form>
    </div>
</body>
</html>