<?php

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_transaksi_detail = $_POST['id_transaksi_detail'];
$id_transaksi        = $_POST['id_transaksi'];
$id_barang           = $_POST['id_barang'];
$jumlah              = $_POST['jumlah'];

$sql2=mysqli_query($connection, "SELECT harga_jual from barang where id_barang='$id_barang'");
$harga=mysqli_fetch_array($sql2);
$harga_jual=$harga['harga_jual'];
$total_harga=$harga_jual * $jumlah;
//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi_detail SET id_transaksi ='$id_transaksi', id_barang = '$id_barang', jumlah = '$jumlah', harga_jual = '$harga_jual', total_harga = '$total_harga' WHERE id_transaksi_detail = '$id_transaksi_detail'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datatransaksidetail.php 
    header("location: index.php?page=transaksidetail");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>