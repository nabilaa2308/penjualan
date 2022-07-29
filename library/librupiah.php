<?php
function rupiah1($angka){
	$hasil_rupiah = "Rp " . number_format($angka, 0, ".", ".");
	return $hasil_rupiah;
}
 
function rupiah2($angka){
	$hasil_rupiah = "Rp " . number_format($angka, 1, ",", ".");
	return $hasil_rupiah;
}
 
function rupiah3($angka){
	$hasil_rupiah = "Rp " . number_format($angka, 2, ".", ",");
	return $hasil_rupiah;
}
/** 
buat rupiah to string
function rupiahtostring($angka){
   $harga_str = preg_replace("/[^0-9]/","", $angka);
   return $harga_str;
}
*/
?>