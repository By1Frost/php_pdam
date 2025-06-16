<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$id_gol = $_POST['id_gol'];
$kode_tarif = $_POST['kode_tarif'];
$tarif_0_10_m3 = $_POST['tarif_0_10_m3'];
$tarif_11_20_m3 = $_POST['tarif_11_20_m3'];
$tarif_21_30_m3 = $_POST['tarif_21_30_m3'];
$tarif_31_dst_m3 = $_POST['tarif_31_dst_m3'];
$keterangan = $_POST['keterangan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tarif SET kode_tarif = '$kode_tarif', tarif_0_10_m3 = '$tarif_0_10_m3', tarif_11_20_m3 = '$tarif_11_20_m3', tarif_21_30_m3 = '$tarif_21_30_m3', tarif_31_dst_m3 = '$tarif_31_dst_m3', keterangan = '$keterangan' WHERE id_gol = '$id_gol'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tarif4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>