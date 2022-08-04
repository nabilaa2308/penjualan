<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<style>  
  table {  
    font-family: arial, sans-serif;  
    border-collapse: collapse;  
    width: 50%;
    margin: 0px auto;
  }
  #htmlContent{
    text-align: center;
  }  
  td, th, button {  
    border: 1px solid #dddddd;  
    text-align: left;  
    padding: 8px;  
  }  
  button {  
    border: 1px solid black;   
  } 
  tr:nth-child(even) {  
    background-color: #dddddd;  
  }  
</style>  
<div id="htmlContent">
<?php
    $id_transaksi = $_GET['id_transaksi'];
    $query = mysqli_query($connection, "SELECT * FROM transaksi
                        INNER JOIN transaksi_detail ON transaksi_detail.id_transaksi = transaksi.id_transaksi
                        INNER JOIN member on member.id_member = transaksi.id_member
                        INNER JOIN metode_pembayaran on metode_pembayaran.id_metode_pembayaran = transaksi.id_metode_pembayaran
                        INNER JOIN kasir on kasir.id_kasir = transaksi.id_kasir
                        INNER JOIN cabang on cabang.id_cabang = kasir.id_cabang
                        INNER JOIN perusahaan on perusahaan.id_perusahaan = cabang.id_perusahaan 
                        WHERE transaksi.id_transaksi = $id_transaksi");
    $query2 = mysqli_query($connection,"SELECT * FROM transaksi_detail inner join transaksi on transaksi.id_transaksi=transaksi_detail.id_transaksi inner join barang on barang.id_barang=transaksi_detail.id_barang where transaksi_detail.id_transaksi=$id_transaksi");
    $row=mysqli_fetch_array($query);
    $total_bayar = $row['total_bayar'];
    $total = number_format($total_bayar,2,',','.');
    ?>
</head>
<body>
    <div class="card" style="width:40%;margin:auto;margin-top:30px;">
      <div class="card-body" style="margin:auto;">
        <h5 class="card-title"><?php echo $row['nama_perusahaan']?> &nbsp;&nbsp; <img src="assets/image/penjualan.png" width="100px" height="60px"></h5>
        <p class="card-text"><?php echo $row['nama_cabang'] ?><br>
        <?php echo $row['alamat']?>
        No. Telp : <?php echo $row['nomor_telp']?>
        <hr>
        <?php echo $row['kode_inv']?>&nbsp; | &nbsp;
        <?php echo $row['nama_member']?>&nbsp; | &nbsp;
        <?php echo $row['nama_metode']?><br>
        Kasir : <?php echo $row['nama_kasir']?>
        <hr>
        <table cellpadding="4">
          <tr>
            <th>Nama</th>
            <th>Qty</th>
            <th>Harga(pcs)</th>
            <th>Harga Total*</th>
          </tr>
        <?php while($row2=mysqli_fetch_array($query2)){?>
          <tr>
            <td><?php echo $row2['nama_barang']?>&nbsp;&nbsp;</td>
            <td><?php echo $row2['jumlah']?>&nbsp;&nbsp;</td>
            <td><?php echo rupiah3($row2['harga_jual'])?>&nbsp;&nbsp;</td>
            <td><?php echo rupiah3($row2['total_harga'])?>&nbsp;</td><?php }?></p>
          </tr>
          <tr>
            <td colspan="3">Total : </td>
            <td>Rp <?php echo $total?></td>
          </tr>
        </table>
        <hr>
        *sudah termasuk kalkulasi ppn dan diskon
        <br>
        PPN : <?php echo $row['ppn']?>%
        <br>
        Diskon :  <?php echo $row['diskon']?>%
        <hr>
        Call Center : <?php echo $row['nomor_telp']?> |
        Email : <?php echo $row['email']?>
      </div>
    </div>
</div>
<div id="editor"></div>
<center>
  <p>
    <button id="generatePDF">generate PDF</button>
  </p>
 Ref:<a href="https://phpcoder.tech">phpcoder.tech</a>
</center>