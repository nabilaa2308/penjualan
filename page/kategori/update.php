<?php


//get data dari form
$id_kategori     = $_POST['id_kategori'];
$nama_kategori   = $_POST['nama_kategori'];

//query update data ke dalam database berdasarkan ID

$query = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman datakategori.php 
    header("location:index.php?page=kategori");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>