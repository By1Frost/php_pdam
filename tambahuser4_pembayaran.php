<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$id_tagihan = $_POST['id_tagihan'];
$tgl_bayar = $_POST['tgl_bayar'];
$jml_bayar = $_POST['jml_bayar'];
$metode_bayar = $_POST['metode_bayar'];
$id_petugas = $_POST['id_petugas'];
// menginput data ke database
mysqli_query($koneksi,"insert into pembayaran (id_tagihan, tgl_bayar, jml_bayar, metode_bayar, id_petugas) values('$id_tagihan','$tgl_bayar','$jml_bayar','$metode_bayar','$id_petugas')");
 
// mengalihkan halaman kembali ke index.php
header("location:pembayaran4.php");
 
?>