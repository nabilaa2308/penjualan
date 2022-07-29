<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_metode_pembayaran = $_POST['id_metode_pembayaran'];
$nama_metode   = $_POST['nama_metode'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE metode_pembayaran SET nama_metode ='$nama_metode' WHERE id_metode_pembayaran = '$id_metode_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datametodebayar.php 
    header("location: index.php?page=metodepembayaran");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>