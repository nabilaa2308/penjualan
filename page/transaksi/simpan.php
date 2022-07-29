<?php 

//include koneksi database
include('database/koneksi.php');

//get data dari form
$id_transaksi         = $_POST['id_transaksi'];
$id_kasir             = $_POST['id_kasir'];
$id_member            = $_POST['id_member'];
$id_metode_pembayaran = $_POST['id_metode_pembayaran'];
$nama_pembeli         = $_POST['nama_pembeli'];
$dt                   = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
$tanggal              = $dt->format('d/m/y H:1');
$query                = mysqli_query($connection, "SHOW TABLE STATUS LIKE 'transaksi'");
$row                  = mysqli_fetch_array($query);
$getid                = $row ["Auto_increment"];
$slash                = "/";
$kode_inv             = $getid.$slash.$id_kasir.$slash.$id_metode_pembayaran.$slash.$id_member.$slash.$tanggal;
$ppn                  = $_POST['ppn'];
$diskon               = $_POST['diskon'];
$total_bayar          = $_POST['total_bayar'];
$harga_str            = preg_replace("/[^0-9]/","", $total_bayar);
 
//query insert data ke dalam database
$query = "INSERT INTO transaksi (id_transaksi, kode_inv, id_kasir, id_member, id_metode_pembayaran, nama_pembeli, ppn, diskon, total_bayar) 
VALUES ('$id_transaksi', '$kode_inv',  '$id_kasir', '$id_member', '$id_metode_pembayaran', '$nama_pembeli', '$ppn', '$diskon','$harga_str')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datatransaksi.php 
    header("location: index.php?page=transaksi");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>