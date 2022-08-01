<?php
function tanggal($tanggal) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($tanggal > 0) {
        foreach ($map as $roman => $int) {
            if($tanggal >= $int) {
                $tanggal -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
function bulan($bulan) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($bulan > 0) {
        foreach ($map as $roman => $int) {
            if($bulan >= $int) {
                $bulan -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
function tahun($tahun) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($tahun > 0) {
        foreach ($map as $roman => $int) {
            if($tahun >= $int) {
                $tahun -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
?>