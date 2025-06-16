<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$iduser    = $_POST['iduser']; //ini make atribut yang ada di tabel database
$fname      = $_POST['fname'];
$lname      = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password   = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET fname = '$fname', lname = '$lname', username = '$username', email = '$email', password = '$password' WHERE iduser = '$iduser'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>