<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$id_gol = $_POST['id_gol'];
$kode_tarif = $_POST['kode_tarif'];
$tarif_0_10_m3 = $_POST['tarif_0_10_m3'];
$tarif_11_20_m3 = $_POST['tarif_11_20_m3'];
$tarif_21_30_m3 = $_POST['tarif_21_30_m3'];
$tarif_31_dst_m3 = $_POST['tarif_31_dst_m3'];
$keterangan = $_POST['keterangan'];
// menginput data ke database
mysqli_query($koneksi,"insert into tarif (id_gol, kode_tarif, tarif_0_10_m3, tarif_11_20_m3, tarif_21_30_m3, tarif_31_dst_m3, keterangan) values('$id_gol','$kode_tarif','$tarif_0_10_m3','$tarif_11_20_m3','$tarif_21_30_m3','$tarif_31_dst_m3','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:tarif4.php");
 
?>