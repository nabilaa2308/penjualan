<?php
$id_transaksi = $_GET['id'];

//get data dari form
$id_transaksi_detail  = $_POST['id_transaksi_detail'];
$id_transaksi         = $_POST['id_transaksi'];
$id_barang            = $_POST['id_barang'];
$jumlah               = $_POST['jumlah'];
$persen              = 100;

$sql2=mysqli_query($connection, "SELECT harga_jual from barang where id_barang='$id_barang'");
$sql1=mysqli_query($connection, "SELECT * from transaksi where id_transaksi='$id_transaksi'");

$harga=mysqli_fetch_array($sql2);
$transaksi=mysqli_fetch_array($sql1);

$harga_jual=$harga['harga_jual'];
$ppn_awal=$transaksi['ppn'];
$diskon_awal=$transaksi['diskon'];

$ppn_akhir=$ppn_awal / $persen;
$diskon_akhir=$diskon_awal / $persen;
$harga_awal=$harga_jual * $jumlah;
$hitung_ppn=$harga_awal * $ppn_akhir;
$harga_ppn=$harga_awal + $hitung_ppn;
$hitung_diskon=$harga_ppn * $diskon_akhir;
$total_harga=$harga_ppn - $hitung_diskon; 
//query insert data ke dalam database
$query = "INSERT INTO transaksi_detail (id_transaksi_detail, id_transaksi, id_barang, jumlah, harga_jual, total_harga) VALUES ('$id_transaksi_detail', '$id_transaksi', '$id_barang', '$jumlah', '$harga_jual', '$total_harga')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php?page=transaksidetail&id=$id_transaksi 
    header("location: index.php?page=transaksidetail&id=$id_transaksi");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>