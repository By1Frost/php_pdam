<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$id_petugas = $_POST['id_petugas'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$jabatan = $_POST['jabatan'];
$tlp = $_POST['tlp'];
$status = $_POST['status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE petugas SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', username = '$username', email = '$email', password = '$password', jabatan = '$jabatan', tlp = '$tlp', status = '$status' WHERE id_petugas = '$id_petugas'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: petugas4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>