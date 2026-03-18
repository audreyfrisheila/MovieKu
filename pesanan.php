<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesanan_baru = [
        "nama_film" => $_POST['daftar_film'],
        "jumlah" => $_POST['jumlah'],
        "kursi" => $_POST['kursi'],
        "metode" => $_POST['byr']
    ];
    $_SESSION['keranjang'][] = $pesanan_baru;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
<style>
    body{
    background: url('bg_film3.jpg') no-repeat center center fixed;
    margin-top: 10px;
    background-size: cover;
    background-blend-mode: darken;
    background-color: rgba(0,0,0,0.5);
  
}
th, td{
    text-align: center;
    
}
h2{
    color: white;
}

</style>

</head>
<body class="p-5">
    <h2 align="center">Daftar Pesanan Kamu</h2>
    <table class="table table-bordered" style="border-radius:10px">
        <thead>
        <tr class="omg">
                <th style="background-color: red; color: white;">Film</th>
                <th style="background-color: red; color: white;">Jumlah</th>
                <th style="background-color: red; color: white;">Kursi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
if (isset($_SESSION['keranjang'])) {
    foreach ($_SESSION['keranjang'] as $item) {
        echo "<tr>
                <td>{$item['nama_film']}</td>
                <td>{$item['jumlah']}</td>
                <td>{$item['kursi']}</td>
              </tr>";
    }
}
?>
        </tbody> 
    </table>

    <a href="form_pesanan.php" class="btn btn-success" > + Tambah Pesanan Lagi</a>
    <a href="selesai.php" class="btn btn-primary">Selesai</a>
</body>
</html>