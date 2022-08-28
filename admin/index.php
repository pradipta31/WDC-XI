<!-- cek apakah sudah login -->
<?php
    session_start();
    include '../koneksi.php';
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    $email = $_SESSION['email'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
    $row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Halaman Admin</h2>
    <br />
    <h4>Selamat datang, <?= $row['nama']; ?>! anda telah login.</h4>
    <br />
    <br />
    <a href="../logout.php">LOGOUT</a>
</body>
</html>
