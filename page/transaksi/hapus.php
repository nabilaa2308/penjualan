<?php
//get id
$id = $_GET['id_transaksi'];

$query = "DELETE FROM transaksi WHERE id_transaksi = $id";

if($connection->query($query)) {
    header("location: index.php?page=transaksi");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>