<?php

include('database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM member WHERE id_member = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=member");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>