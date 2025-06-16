<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$id_wilayah = $_POST['id_wilayah'];
$nama_wilayah = $_POST['nama_wilayah'];
$keterangan = $_POST['keterangan'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE wilayah SET id_wilayah = '$id_wilayah', nama_wilayah = '$nama_wilayah', keterangan = '$keterangan' WHERE id_wilayah = '$id_wilayah'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: wilayah4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>