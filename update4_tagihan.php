<?php

//include koneksi database
include('koneksi4.php');

//get data dari form
$id_tagihan = $_POST['id_tagihan'];
$no_pelanggan = $_POST['no_pelanggan'];
$payroll = $_POST['payroll'];
$bulan_tagihan = $_POST['bulan_tagihan'];
$m3_lalu = $_POST['m3_lalu'];
$m3_kini = $_POST['m3_kini'];
$m3_pakai = $_POST['m3_pakai'];
$total_tagihan_rp = $_POST['total_tagihan_rp'];
$denda = $_POST['denda'];
$tgl_pencatatan = $_POST['tgl_pencatatan'];
$status = $_POST['status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tagihan SET no_pelanggan = '$no_pelanggan', payroll = '$payroll', bulan_tagihan = '$bulan_tagihan', m3_lalu = '$m3_lalu', m3_kini = '$m3_kini', m3_pakai = '$m3_pakai', total_tagihan_rp = '$total_tagihan_rp', denda = '$denda', tgl_pencatatan = '$tgl_pencatatan', status = '$status' WHERE id_tagihan = '$id_tagihan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tagihan4.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>