<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_member     = $_POST['id_member'];
$nama_member   = $_POST['nama_member'];
$nomor_telp      = $_POST['nomor_telp'];
$alamat          = $_POST['alamat'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE member SET nama_member ='$nama_member', nomor_telp = '$nomor_telp', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE id_member = '$id_member'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datamember.php 
    header("location: index.php?page=member");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>