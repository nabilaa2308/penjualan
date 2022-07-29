<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kasir WHERE id_kasir = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=kasir");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>