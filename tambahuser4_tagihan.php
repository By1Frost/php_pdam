<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$id_tagihan = $_POST['id_tagihan'];
$no_pelanggan = $_POST['no_pelanggan'];
$payroll = $_POST['payroll'];
$bulan_tagihan = $_POST['bulan_tagihan'];
$m3_lalu = $_POST['m3_lalu'];
$m3_kini = $_POST['m3_kini'];
$denda = $_POST['denda'];
$tgl_pencatatan = $_POST['tgl_pencatatan'];
$status = $_POST['status'];
// menginput data ke database
mysqli_query($koneksi,"insert into tagihan (id_tagihan, no_pelanggan, payroll, bulan_tagihan, m3_lalu, m3_kini, denda, tgl_pencatatan, status) values('$id_tagihan','$no_pelanggan','$payroll','$bulan_tagihan','$m3_lalu','$m3_kini','$denda','$tgl_pencatatan','$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:tagihan4.php");
 
?>