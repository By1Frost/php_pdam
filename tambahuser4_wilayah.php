<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$id_wilayah = $_POST['id_wilayah'];
$nama_wilayah = $_POST['nama_wilayah'];
$keterangan = $_POST['keterangan'];
// menginput data ke database
mysqli_query($koneksi,"insert into wilayah (id_wilayah, nama_wilayah, keterangan) values('$id_wilayah','$nama_wilayah','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:wilayah4.php");
 
?>