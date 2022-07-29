<?php
include 'database/koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <title>Penjualan</title>
</head>

<body>
    <?php
    include 'page/layout/header.php';
    ?>
    <?php
    $page = '';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    switch ($page) {
        case 'kategori':
            include 'page/kategori/index.php';
            break;
        case 'barang':
            include 'page/barang/index.php';
            break;
        case 'supplier':
            include 'page/supplier/index.php';
            break;
        case 'cabang':
            include 'page/cabang/index.php';
            break;
        case 'perusahaan':
            include 'page/perusahaan/index.php';
            break;
        case 'kasir':
            include 'page/kasir/index.php';
            break;
        case 'metodepembayaran':
            include 'page/metodepembayaran/index.php';
            break;
        case 'member':
            include 'page/member/index.php';
            break;
        case 'transaksi':
            include 'page/transaksi/index.php';
            break;
        case 'transaksidetail':
            include 'page/transaksidetail/index.php';
            break;

        default:
            include 'page/home/index.php';
            break;
    }
    
    include 'page/layout/footer.php';
    ?>


    <?php
    include 'page/layout/js.php';
    ?>
</body>

</html>