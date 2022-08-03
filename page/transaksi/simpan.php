<?php 

//include koneksi database


//get data dari form
$id_transaksi         = $_POST['id_transaksi'];
$id_kasir             = $_POST['id_kasir'] ;
$id_member            = $_POST['id_member'];
$id_metode_pembayaran = $_POST['id_metode_pembayaran'];
$nama_pembeli         = $_POST['nama_pembeli'];

$tanggal               = date('d');
$tanggal_romawi        = tanggal ($tanggal);
$bulan                 = date('n');
$bulan_romawi          = bulan ($bulan);
$tahun                 = date('y');
$tahun_romawi          = tahun ($tahun);
$query                 = mysqli_query($connection, "SHOW TABLE STATUS LIKE 'transaksi'");
$row                   = mysqli_fetch_array($query);
$getid                 = $row ["Auto_increment"];
$slash                 = "/";
$kode_inv              = $getid.$slash.$id_kasir.$slash.$id_metode_pembayaran.$slash.$id_member.$slash.$tanggal_romawi.$slash.$bulan_romawi.$slash.$tahun_romawi;
$ppn                  = $_POST['ppn'];
$diskon               = $_POST['diskon'];
$total_bayar          = $total_harga + $ppn - $diskon;
$harga_str            = preg_replace("/[^0-9]/","", $total_bayar);
$status = $_POST['status'];

 
//query insert data ke dalam database
$query = "INSERT INTO transaksi (id_transaksi, kode_inv, id_kasir, id_member, id_metode_pembayaran, nama_pembeli, ppn, diskon, total_bayar) 
VALUES ('$id_transaksi', '$kode_inv',  '$id_kasir', '$id_member', '$id_metode_pembayaran', '$nama_pembeli', '$ppn', '$diskon','$total_harga')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman datatransaksi.php 
    header("location: index.php?page=transaksi");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>