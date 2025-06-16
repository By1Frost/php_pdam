<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$no_pelanggan = $_POST['no_pelanggan'];
$nama = $_POST['nama'];
$id_gol = $_POST['id_gol'];
$no_rek = $_POST['no_rek'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$id_wilayah = $_POST['id_wilayah'];
$tgl_reg = $_POST['tgl_reg'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status = $_POST['status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pelanggan SET nama = '$nama', id_gol = '$id_gol', no_rek = '$no_rek', alamat = '$alamat', tlp = '$tlp', id_wilayah = '$id_wilayah', tgl_reg = '$tgl_reg', jenis_kelamin = '$jenis_kelamin', status = '$status' WHERE no_pelanggan = '$no_pelanggan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: pelanggan4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>