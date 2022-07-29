<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_kasir      = $_POST['id_kasir'];
$nama_kasir    = $_POST['nama_kasir'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telp    = $_POST['nomor_telp'];
$id_cabang     = $_POST['id_cabang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kasir SET nama_kasir ='$nama_kasir', alamat = '$alamat', nomor_telp = '$nomor_telp', id_cabang = '$id_cabang' WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datakasir.php 
    header("location: index.php?page=kasir");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>