<?php

//get data dari form
$id_transaksi_detail  = $_POST['id_transaksi_detail'];
$id_transaksi         = $_POST['id_transaksi'];
$id_barang            = $_POST['id_barang'];
$jumlah               = $_POST['jumlah'];

$sql2=mysqli_query($connection, "SELECT harga_jual from barang where id_barang='$id_barang'");
$harga=mysqli_fetch_array($sql2);
$harga_jual=$harga['harga_jual'];
$total_harga=$harga_jual * $jumlah;

 
//query insert data ke dalam database
$query = "INSERT INTO transaksi_detail (id_transaksi_detail, id_transaksi, id_barang, jumlah, harga_jual, total_harga) VALUES ('$id_transaksi_detail', '$id_transaksi', '$id_barang', '$jumlah', '$harga_jual', '$total_harga')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php?page=transaksidetail&id=$id_transaksi 
    header("location: index.php?page=transaksidetail&id_transaksi=$id_transaksi");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>