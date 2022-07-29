<?php

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi_detail WHERE id_transaksi_detail = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=transaksidetail");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>