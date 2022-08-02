<?php

//get id
$id = $_GET['id'];

$query = "DELETE FROM perusahaan WHERE id_perusahaan = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=perusahaan");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>