<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pembayaran where id_pembayaran='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:pembayaran4.php");
 
?>