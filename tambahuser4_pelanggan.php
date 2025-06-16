<?php 
// koneksi database
include 'koneksi4.php';
 
// menangkap data yang di kirim dari form
//MASUKINNYA fname lname atau nama depan nama belakang?
$nama = $_POST['nama'];
$id_gol = $_POST['id_gol'];
$no_rek = $_POST['no_rek'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$id_wilayah = $_POST['id_wilayah'];
$tgl_reg = $_POST['tgl_reg'];
$jenis_kelamin = $_POST['jenis_kelamin'];
// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan (nama, id_gol, no_rek, alamat, tlp, id_wilayah, tgl_reg, jenis_kelamin, status) values('$nama','$id_gol','$no_rek','$alamat','$tlp','$id_wilayah','$tgl_reg','$jenis_kelamin','AKTIF')");
 
// mengalihkan halaman kembali ke index.php
header("location:pelanggan4.php");
 
?>