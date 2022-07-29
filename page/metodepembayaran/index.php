<?php
    $act = '';
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'tambah':
            include 'tambah.php';
            break;
        case 'edit':
            include 'edit.php';
            break;
        case 'simpan':
            include 'simpan.php';
            break;
        case 'update':
            include 'update.php';
            break;
        case 'hapus':
            include 'hapus.php';
            break;
        default:
            include 'home.php';
            break;
    }
?>