<?php 
session_start();
require "koneksi.php";


if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($koneksi, strtolower($_POST['username']));
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $query=mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username' AND password='$password'");
    $cek_jml=mysqli_num_rows($query);
    if($cek_jml>0){
        $data=mysqli_fetch_array($query);
        $_SESSION['user']=$data['username'];
        $_SESSION['userID']=$data['id_user'];
        $_SESSION['status']='login';
        header("location: dashboard.php"); exit();
    }else{
        
$_SESSION['flash_message'] = "username atau password ada yg salah!";
header('Location: login.php'); 
exit();

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MovieKu</title>

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
        <h2 style="color: var(--hightlight-color);">Masuk</h2>
        <p class="text-muted">Masukan informasimu</p>
    </div>



    <form action="" method="POST">
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" id="floatingUsername" placeholder="Username" required>
            <label for="floatingUsername">Nama pengguna</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Kata sandi</label>
        </div> 

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Ingat saya</label>
            </div>
            <a href="#" class="text-decoration-none small">Butuh bantuan?</a>
        </div>

        
  <a href="dashboard.php"><button type="submit" class="btn btn-primary w-100 py-2 fw-bold" name="login">Log In</button></a>
        
    </form> 
     <div class="text-center my-3 text-muted small">Belum punya akun?</div>
        
    <a href="regist.php" class="btn btn-outline-dark w-100 mb-3">Daftar di sini</a>

    
</div>


</body>
</html>