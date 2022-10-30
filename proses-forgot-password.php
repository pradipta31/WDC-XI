<?php
    include 'koneksi.php';
    $email = $_POST['email'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' LIMIT 1");
    if(mysqli_num_rows($query) > 0){
        $password = md5($_POST['password']);
        $re_password = md5($_POST['re_password']);
        if ($password == $re_password) {
            $sql = mysqli_query($koneksi, "UPDATE user SET password='$password' WHERE email='$email'");
            header('location: index.php?pesan=berhasil_update');
        }else{
            header('location: forgot-password.php?pesan=password');
        }
    }else{
        header('location: forgot-password.php?pesan=gagal');
    }
    
?>