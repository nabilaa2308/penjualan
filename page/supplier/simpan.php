<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_supplier     = $_POST['id_supplier'];
$nama_supplier   = $_POST['nama_supplier'];
$nomor_telp      = $_POST['nomor_telp'];
$alamat          = $_POST['alamat'];
$nomor_rekening  = $_POST['nomor_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO supplier (id_supplier, nama_supplier, nomor_telp, alamat, nomor_rekening) VALUES ('$id_supplier', '$nama_supplier', '$nomor_telp', '$alamat', '$nomor_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datasupplier.php 
    header("location: index.php?page=supplier");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>