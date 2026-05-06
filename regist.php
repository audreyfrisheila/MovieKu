<?php
session_start();
require "koneksi.php";
if(isset($_POST['register'])){
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
   if($password !== $confirm){
$_SESSION['flash_message'] = "Kata sandi tidak sama!";
        header('Location: regist.php'); 
        exit();
         }else{
        $cek_user=mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
        $cek_jml = mysqli_num_rows($cek_user);
        if($cek_jml>0){
            echo "<script> alert ('Username Tidak Tersedia'); </script>";
        }else {
            $insert = mysqli_query($koneksi, "INSERT INTO user (username,password) VALUES ('$username', '$password')");
            if ($insert) {
                echo "<script> alert('Berhasil masuk! kembali ke halaman masuk'); 
                        location.href='login.php';
                        </script>";
            } else {
                echo "<script> alert('Gagal masuk, coba lagi'); </script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGIST</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="form-container">
    <div class="title text-center mb-4">
        <h1 style="color: var(--secondary-color);">MovieKu
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
  <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
  <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
  <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
</svg>
        </h1>
        <h2 style="color: var(--hightlight-color);">Daftar</h2>
        <p class="text-muted">Isi untuk melanjutkan</p>
    </div>

        <?php if (isset($_SESSION['flash_message'])): ?>
        <div class="alert alert-danger text-center" role="alert">
            <?= $_SESSION['flash_message']; ?>
        </div>
        <?php unset($_SESSION['flash_message']);  ?>
         <?php endif; ?>
    

    <form action="regist.php" method="POST">
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" id="floatingUsername" placeholder="Username" required>
            <label for="floatingUsername">Nama pengguna</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Kata sandi</label>
        </div> 
        <div class="form-floating mb-3">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                    placeholder="Konfirmasi password" required>
                <label for="confirm_password">Konfirmasi</label>
            </div>
        

        <button type="submit" name="register" class="btn btn-primary w-100 py-2 fw-bold" >Daftar Sekarang</button>
        
    </form> 
    
</div>
</body>
</html>