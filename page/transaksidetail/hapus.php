<?php

//get id
$id = $_GET['id'];
$id_transaksi = $_GET['id_transaksi'];


$query = "DELETE FROM transaksi_detail WHERE id_transaksi_detail = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=transaksidetail&id_transaksi=$id_transaksi");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>