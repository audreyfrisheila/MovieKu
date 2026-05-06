<?php
session_start();
require "koneksi.php";
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
    echo "<script> alert('Log In dulu dong!'); location.href = 'login.php'; </script>";
    exit;
}

if (isset($_POST['tombol_pesan'])) {
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $id_film = $_POST['daftar_film'];
    $jumlah  = $_POST['jumlah'];
    $kursi   = $_POST['kursi']; 
    $id_user = $_SESSION['userID'];
    $tanggal = date('Y-m-d');
    $query_pesanan = mysqli_query($koneksi, "INSERT INTO pesanan (jumlah, tanggal, nama_pemesan, email, id_user, id_film) VALUES ('$jumlah', '$tanggal', '$nama', '$email', '$id_user', '$id_film')");
    
    if($query_pesanan){
header("Location: riwayat.php");
    } else {
        echo "Gagal simpan pesanan: " . mysqli_error($koneksi);
    }
}

$pilihan_film = [
    1 => "Enola Holmes",
    2 => "Wednesday",
    3 => "Queen's Gambit",
    4 => "Mencuri Raden Saleh",
    5 => "Home Sweet Loan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="style3_pesan.css">
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
<body>
    <div class="card p-4 mx-auto" style="max-width: 500px; background: white;">
        <h2 align="center" class="mb-4">Form Pemesanan</h2>

        <form action="" method="POST">
            <input type="text" class="form-control mb-3" name="nama" placeholder="Nama Pemesan:" required>
            <input type="email" class="form-control mb-3" name="email" placeholder="Email:" required>
            
            <select name="daftar_film" class="form-control mb-3" required>
                <option value="">Pilih film</option>
                <?php foreach ($pilihan_film as $id => $nama_film) {
                    echo "<option value='$id'>$nama_film</option>";
                } ?>
            </select>
            
            <input type="number" class="form-control mb-3" name="jumlah" placeholder="Jumlah tiket:" required>
            
            <input type="text" class="form-control mb-3" name="kursi" placeholder="Kursi (misal: A1):" required>

            <button type="submit" name="tombol_pesan" class="btn btn-danger w-100 mb-2 fw-bold">Pesan Tiket</button>
            <a href="dashboard.php" class="btn btn-danger w-100 fw-bold">Kembali ke Dashboard</a>
        </form>
    </div>
</body>
</html>