<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$tlp = $_POST['tlp'];
// menginput data ke database
mysqli_query($koneksi,"insert into petugas (nama, username, email, jabatan, password, tlp, jenis_kelamin, status) values('$nama','$username','$email','BARU','$password','$tlp','$jenis_kelamin','AKTIF')");
 
// mengalihkan halaman kembali ke index.php
header("location:petugas4.php");
 
?>