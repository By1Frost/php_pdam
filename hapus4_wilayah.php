<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from wilayah where id_wilayah='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:wilayah4.php");
 
?>