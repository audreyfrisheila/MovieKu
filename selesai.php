<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Berhasil</title>
    
    <link rel="stylesheet" href="style4_berhasil.css">
    <link rel="stylesheet" href="style2_homepage.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }

        .regist {
            margin-top: 20px; 
        }
        .regist button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="berhasil">
        <p class="atas" style="font-weight: bold; font-size: 1.2rem;">Pemesanan tiket berhasil!</p>
        <p>Tiket akan dikirimkan melalui email Anda. Cek email secara berkala!</p>
    </div>

    <div class="regist">
        <form action="dashboard.php">
            <button type="submit">Kembali</button>
        </form>
    </div>
</body>
</html>