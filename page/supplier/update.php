<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_supplier     = $_POST['id_supplier'];
$nama_supplier   = $_POST['nama_supplier'];
$nomor_telp      = $_POST['nomor_telp'];
$alamat          = $_POST['alamat'];
$nomor_rekening  = $_POST['nomor_rekening'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET nama_supplier ='$nama_supplier', nomor_telp = '$nomor_telp', alamat = '$alamat', nomor_rekening = '$nomor_rekening' WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datasupplier.php 
    header("location: index.php?page=supplier");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>