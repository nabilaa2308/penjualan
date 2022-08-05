
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-15">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI
            </div>
            <div class="card-body">
              <a href="index.php?page=transaksi&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE INV</th>
                    <th scope="col">NAMA KASIR</th>
                    <th scope="col">NAMA MEMBER</th>
                    <th scope="col">METODE PEMBAYARAN</th>
                    <th scope="col">WAKTU TRANSAKSI</th>
                    <th scope="col">NAMA PEMBELI</th>
                    <th scope="col">PPN%</th>
                    <th scope="col">DISKON%</th>
                    <th scope="col">TOTAL BAYAR</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT *, DATE_FORMAT(waktu_transaksi, '%W, %d/%m/%Y %H:%i') as waktu FROM transaksi 
                      INNER JOIN kasir ON kasir.id_kasir=transaksi.id_kasir INNER JOIN member ON member.id_member=transaksi.id_member 
                      INNER JOIN metode_pembayaran ON metode_pembayaran.id_metode_pembayaran=transaksi.id_metode_pembayaran");
                        while($row = mysqli_fetch_array($query)){
                        $id_transaksi=$row['id_transaksi'];
                        $query2 = mysqli_query($connection,"SELECT SUM(total_harga) AS total FROM transaksi_detail where id_transaksi='$id_transaksi'");
                        while($row2 = mysqli_fetch_array($query2)){
                          $total_harga=$row2['total'];
                          $ppn_awal=$row['ppn'];
                          $diskon_awal=$row['diskon'];
                          $persen              = 100;
                          
                          $ppn_akhir=$ppn_awal / $persen;
                          $diskon_akhir=$diskon_awal / $persen;
                          $hitung_diskon=$total_harga * $diskon_akhir;
                          $harga_diskon=$total_harga - $hitung_diskon;
                          $hitung_ppn=$harga_diskon * $ppn_akhir;
                          $total_bayar=$harga_diskon + $hitung_ppn; 
                  $query3 = mysqli_query($connection,"UPDATE transaksi SET total_bayar = '$total_bayar' where id_transaksi = '$id_transaksi'");
                        
                        }
                  ?>
                  <?php
                  $result1 = "Rp " . number_format((float)$row['total_bayar'], 2, ",", ".");
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['nama_kasir'] ?></td>
                      <td><?php echo $row['nama_member'] ?></td>
                      <td><?php echo $row['nama_metode'] ?></td>
                      <td><?php echo $row['waktu'] ?></td>
                      <td><?php echo $row['nama_pembeli'] ?></td>
                      <td><?php echo $row['ppn'] ?></td>
                      <td><?php echo $row['diskon'] ?></td>                
                      <td><?php echo $result1 ?></td>
                      <td><?php echo $row['status'] ?></td>                
                      <td class="text-center">
                        <?php if ($row['status'] === "proses"){ echo '<a href="index.php?page=transaksi&act=edit&id_transaksi='.$id_transaksi.'" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=transaksi&act=hapus&id_transaksi='.$id_transaksi.'" class="btn btn-sm btn-danger">HAPUS</a>
                        <a href="index.php?page=transaksidetail&id_transaksi='.$id_transaksi.'" class="btn btn-sm btn-info">DETAIL</a>';}                     
                        else if ($row['status'] === "selesai"){ echo '<a href="index.php?page=struk&id_transaksi='.$id_transaksi.'" class="btn btn-sm btn-dark">STRUK</a>';}?>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    </div>
