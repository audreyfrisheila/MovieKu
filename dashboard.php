<?php 
session_start();
require "koneksi.php";
if(!isset ($_SESSION['status'])|| $_SESSION['status'] != 'login'){
    echo "<script> alert('Log In dulu dong!'); 
            location.href = 'login.php';
        </script>";
}
$id_user_log = $_SESSION['userID'];
$query=mysqli_query($koneksi,"SELECT*FROM film");





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movieku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2_homepage.css">
    


</head>

<body>
<div class="semua">
    
<nav style="background-color: #8B0000; display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; width: 100%; margin: 0;">
    
    <div style="color: white; font-weight: bold; font-size: 20px;">
        
    </div>
    
    <div style="color: white; display: flex; align-items: center; font-weight: bold;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="margin-right: 8px;">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
        <span><?= $_SESSION['user'];?></span>
    </div>
</nav>

    </div>
    <div class="judul">
        <h3 align="center">
            MovieKu
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor"
                class="bi bi-camera-reels" viewBox="0 0 16 16">
                <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
                <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
            </svg>
        </h3>

        <p class="desk" align="center" style="font-weight: lighter; font-size: 30px;">
            Selamat Datang <?= $_SESSION['user']; ?> !
        </p>
        <p class="desk" align="center">
            Ruang kreasi dan eksplorasi sinema ada di tanganmu. Temukan inspirasi, bedah struktur cerita, dan mulai petualangan filmmu hari ini.
        </p>
    </div>
    <div class="gradient-line"></div>
    
    <div class="list">
        <div class="movieku">
             <?php while($data=mysqli_fetch_assoc($query)){?>
            <div class="movie" id="movie1">
                <img src="<?= $data['gambar']?>" alt="<?= $data['judul_film']?>" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4><?= $data['judul_film']?></h4>
                    <p class="genre"><?= $data['genre']?></p>
                    <p class="rate"><?= $data['rate']?></p>
                    <p class="harga">Rp.<?= $data['harga']?></p>
                    <p class="durasi">Durasi: <?= $data['durasi']?></p>
                    <p class="tayang">Tayang pada pukul: <?= $data['jam_tayang']?></p>
                    <p class="singkat"><?= $data['deskripsi']?>
                    </p>
                </div>
            </div>
            
<?php }?>
        </div>
    </div>

    <div class="regist">
        <form action="form_pesanan.php">
            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>

    <div class="regist">
        <form action="logout.php">
            <button type="submit">Keluar</button>
        </form>
    </div>

</div>

</body>

</html>