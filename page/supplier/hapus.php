<?php

//get id
$id = $_GET['id'];

$query = "DELETE FROM supplier WHERE id_supplier = '$id'";

if($connection->query($query)) {
    header("location: index.php?page=supplier");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>