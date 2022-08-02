<?php

 
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