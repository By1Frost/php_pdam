<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pelanggan where no_pelanggan='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:pelanggan4.php");
 
?>