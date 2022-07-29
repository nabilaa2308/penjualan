<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_metode_pembayaran = $_POST['id_metode_pembayaran'];
$nama_metode          = $_POST['nama_metode'];

//query insert data ke dalam database
$query = "INSERT INTO metode_pembayaran (id_metode_pembayaran, nama_metode) VALUES ('$id_metode_pembayaran', '$nama_metode')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datametodebayar.php 
    header("location: index.php?page=metodepembayaran");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>