<?php 
session_start();
if(!isset ($_SESSION['username'])){
    header("Location:index.php"); exit();
}
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
        <span><?php echo $_SESSION['username'];?></span>
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
            Selamat Datang <?php echo $_SESSION['username']; ?> !
        </p>
        <p class="desk" align="center">
            Ruang kreasi dan eksplorasi sinema ada di tanganmu. Temukan inspirasi, bedah struktur cerita, dan mulai petualangan filmmu hari ini.
        </p>
    </div>
    <div class="gradient-line"></div>
    <div class="list">
        <div class="movieku">
            <div class="movie" id="movie1">
                <img src="posterfilm_1.jpg" alt="Enola Holmes" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4>Enola Holmes</h4>
                    <p class="genre">Action / Adventure / Fiction</p>
                    <p class="rate">Rate: 8.6</p>
                    <p class="harga">Rp. 70.000</p>
                    <p class="durasi">Durasi: 129 menit</p>
                    <p class="tayang">Tayang pada pukul: 20.00</p>
                    <p class="singkat">
                        Aksi cerdik adik remaja Sherlock Holmes dalam petualangan mencari ibunya yang hilang dan memecahkan konspirasi besar.
                    </p>
                </div>
            </div>
            <div class="movie" id="movie2">
                <img src="posterfilm_2.jpg" alt="Wednesday" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4>Wednesday</h4>
                    <p class="genre">Fiction / Horror</p>
                    <p class="rate">Rate: 8.2</p>
                    <p class="harga">Rp. 100.000</p>
                    <p class="durasi">Durasi: 60 menit</p>
                    <p class="tayang">Tayang pada pukul: 21.00</p>
                    <p class="singkat">
                        Gadis remaja misterius dengan kemampuan psikis yang mencoba mengungkap misteri pembunuhan berantai di Akademi Nevermore.
                    </p>
                </div>
            </div>
            <div class="movie" id="movie3">
                <img src="posterfilm_3.jpg" alt="Queen's Gambit" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4>Queen's Gambit</h4>
                    <p class="genre">Drama / Roman</p>
                    <p class="rate">Rate: 8.7</p>
                    <p class="harga">Rp. 50.000</p>
                    <p class="durasi">Durasi: 60 menit</p>
                    <p class="tayang">Tayang pada pukul: 17.00</p>
                    <p class="singkat">
                        Perjalanan seorang yatim piatu jenius catur yang berjuang melawan trauma dan kecanduan demi menjadi pemain terbaik dunia.
                    </p>
                </div>
            </div>
            <div class="movie" id="movie4">
                <img src="posterfilm_4.jpg" alt="Mencuri Raden Saleh" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4>Mencuri Raden Saleh</h4>
                    <p class="genre">Drama / History</p>
                    <p class="rate">Rate: 8.0</p>
                    <p class="harga">Rp. 50.000</p>
                    <p class="durasi">Durasi: 154 menit</p>
                    <p class="tayang">Tayang pada pukul: 14.00</p>
                    <p class="singkat">
                        Sekelompok anak muda amatir merencanakan pencurian terbesar abad ini mencuri lukisan bersejarah karya Raden Saleh di Istana Negara.
                    </p>
                </div>
            </div>
            <div class="movie" id="movie5">
                <img src="posterfilm_5.jpg" alt="Home Sweet Loan" width="150" height="230" class="gambar">
                <div class="desc">
                    <h4>Home Sweet Loan</h4>
                    <p class="genre">Drama / Family</p>
                    <p class="rate">Rate: 8.0</p>
                    <p class="harga">Rp. 50.000</p>
                    <p class="durasi">Durasi: 105 menit</p>
                    <p class="tayang">Tayang pada pukul: 18.00</p>
                    <p class="singkat">
                        Perjuangan seorang pekerja kelas menengah yang terjebak dalam dilema sandwich generation demi mewujudkan impian memiliki rumah sendiri.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="regist">
        <form action="form_pesanan.php">
            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>

</div>

</body>

</html>