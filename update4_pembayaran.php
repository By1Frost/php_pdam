<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$id_pembayaran = $_POST['id_pembayaran'];
$id_tagihan = $_POST['id_tagihan'];
$tgl_bayar = $_POST['tgl_bayar'];
$jml_bayar = $_POST['jml_bayar'];
$metode_bayar = $_POST['metode_bayar'];
$id_petugas = $_POST['id_petugas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pembayaran SET id_pembayaran = '$id_pembayaran', id_tagihan = '$id_tagihan', tgl_bayar = '$tgl_bayar', jml_bayar = '$jml_bayar', metode_bayar = '$metode_bayar', id_petugas = '$id_petugas' WHERE id_pembayaran = '$id_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: pembayaran4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>