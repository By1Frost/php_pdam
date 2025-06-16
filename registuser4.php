<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$tlp = $_POST['tlp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
// menginput data ke database
mysqli_query($koneksi,"insert into petugas (nama, username, email, jabatan, password, tlp, jenis_kelamin, status) values('$nama','$username','$email','BARU','$password','$tlp','$jenis_kelamin','AKTIF')");
 
// mengalihkan halaman kembali ke index.php
header("location:login4.php");
 
?>