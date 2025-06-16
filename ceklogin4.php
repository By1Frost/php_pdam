<?php 
    session_start();
    include 'koneksi4.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:tampil4.php");
    }
    else{
        
        echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
        echo "<script> window.location ='login4.php';</script>";
    }
?>