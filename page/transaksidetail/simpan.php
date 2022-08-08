<?php

//get data dari form
$id_transaksi_detail  = $_POST['id_transaksi_detail'];
$id_transaksi         = $_POST['id_transaksi'];
$id_barang            = $_POST['id_barang'];
$jumlah               = $_POST['jumlah'];
?>
<script>
    var id_transaksi = '<?php echo $id_transaksi ?>';
</script>
<?php
$sql2=mysqli_query($connection, "SELECT harga_jual from barang where id_barang='$id_barang'");
$harga=mysqli_fetch_array($sql2);
$harga_jual=$harga['harga_jual'];
$total_harga=$harga_jual * $jumlah;

//query insert data ke dalam database
$sql1 = mysqli_query($connection, "SELECT * FROM transaksi_detail WHERE id_transaksi='$id_transaksi' AND id_barang='$id_barang'");
if (mysqli_num_rows($sql1) === 0 ) {
    $sql = mysqli_query($connection, "INSERT INTO transaksi_detail (id_transaksi_detail, id_transaksi, id_barang, jumlah, harga_jual, total_harga) VALUES ('$id_transaksi_detail', '$id_transaksi', '$id_barang', '$jumlah', '$harga_jual', '$total_harga')");    
    header("location: index.php?page=transaksidetail&id_transaksi=$id_transaksi");
} else if (mysqli_num_rows($sql1) > 1){
    echo '<script>alert("{Barang Sudah Ada, Silahkan Pilih Barang yang Lain!");
    window.location="index.php?page=transaksidetail&id_transaksi="+ id_transaksi;
    </script>';
}

?>