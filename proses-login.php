<?php
    session_start();
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // menyeleksi data admin dengan email dan password yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
?>