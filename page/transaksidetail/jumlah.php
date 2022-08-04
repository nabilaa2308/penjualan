<?php
$id_transaksi        = $_GET['id_transaksi'];
$id_transaksi_detail = $_GET['id_transaksi'];
$id_barang = $_GET['id_barang'];
$jumlah = $_POST['jumlah'];

$sql2=mysqli_query($connection, "SELECT harga_jual from barang where id_barang='$id_barang'");
$harga=mysqli_fetch_array($sql2);
$harga_jual=$harga['harga_jual'];
$total_harga=$harga_jual * $jumlah;

$query = "UPDATE transaksi_detail SET jumlah = '$jumlah', total_harga = '$total_harga' WHERE id_transaksi_detail = '$id_transaksi_detail'";



if($connection->query($query)) {
    header("location:index.php?page=transaksi_detail&id=$id_transaksi");
} else {
    echo "Data Gagal Diupate!";
}

?>