<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_perusahaan   = $_POST['id_perusahaan'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat          = $_POST['alamat'];
$nomor_telp      = $_POST['nomor_telp'];
$email           = $_POST['email'];
$tanggal_berdiri = $_POST['tanggal_berdiri'];
$npwp            = $_POST['npwp'];

//query insert data ke dalam database
$query = "INSERT INTO perusahaan (id_perusahaan, nama_perusahaan, alamat, nomor_telp, email, tanggal_berdiri, npwp) VALUES ('$id_perusahaan', '$nama_perusahaan', '$alamat', '$nomor_telp', '$email', '$tanggal_berdiri', '$npwp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman dataperusahaan.php 
    header("location: index.php?page=perusahaan");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>