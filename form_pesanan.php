<?php
$pilihan_film = [
    "enola" => "Enola Holmes",
    "wednesday" => "Wednesday",
    "queensgambit" => "Queen's Gambit",
    "mencuriraden" => "Mencuri Raden Saleh",
    "homesweetloan" => "Home Sweet Loan"
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="style3_pesan.css">
</head>

<body>
    <div class="pemesanan">
        <div class="judul">
            <h1 align="center">Form Pemesanan</h1>
        </div>

        <form action="pesanan.php" method="POST">
            <div class="nama"><input type="text" name="nama" id="name" placeholder="Nama:" required>
            </div>
            <div class="email"><input type="email" name="email" id="email" placeholder="Email:" required></div>
            <div class="daftar">
               <div class="daftar">
    <select name="daftar_film" class="list" required>
        <option value="" style="font-color: grey">Pilih film</option>
       
        <?php 
        foreach ($pilihan_film as $key => $nama_film) {
            echo "<option value='$key'>$nama_film</option>";
        }
        ?>
        
    </select>
</div>
            </div>
            <div class="jml"><input type="text" name="jumlah" placeholder="Jumlah tiket:" required></div>

            <div class="kursi">
                <input type="text" name="kursi" placeholder="Kursi yang dipilih:" required><br>
            </div>

            <div class="bayar">
                <h3>Metode Pembayaran</h3>
                <input type="radio" name="byr" value="Cash" required id="cash"><label for="cash">Cash</label><br>
                <input type="radio" name="byr" value="Qris" required id="qris"><label for="qris">Qris</label><br>
            </div>
            <div class="simpan">

    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" >Pesan</button>
            </div>
            <div class="reset">

                <button type="reset" value="Reset" class="btn btn-secondary w-100 py-2 fw-bold">Muat ulang</button>


        </form>
       

    </div>
    </div>
</body>

</html>