<?php


//get data dari form
$id_cabang     = $_POST['id_cabang'];
$nama_cabang   = $_POST['nama_cabang'];
$alamat        = $_POST['alamat'];
$nomor_telp    = $_POST['nomor_telp'];
$email         = $_POST['email'];
$id_perusahaan = $_POST['id_perusahaan'];


//query insert data ke dalam database
$query = "INSERT INTO cabang (id_cabang, nama_cabang, alamat, nomor_telp, email, id_perusahaan) VALUES ('$id_cabang', '$nama_cabang', '$alamat', '$nomor_telp', '$email', '$id_perusahaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datacabang.php 
    header("location: index.php?page=cabang");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>