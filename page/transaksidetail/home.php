<?php
$id_transaksi = $_GET['id_transaksi'];

?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <a href="index.php?page=transaksidetail&act=tambah&id=<?php echo $id_transaksi?>" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">KODE INV</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">TOTAL HARGA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM transaksi_detail 
                      INNER JOIN transaksi ON transaksi.id_transaksi=transaksi_detail.id_transaksi 
                      INNER JOIN barang ON barang.id_barang=transaksi_detail.id_barang 
                      WHERE transaksi.id_transaksi='$id_transaksi'");
                      while($row = mysqli_fetch_array($query))
                      
                      
                      {?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kode_inv'] ?></td>
                      <td><?php echo $row['nama_barang']?></td>
                      <td><form method="POST" action="index.php?page=transaksidetail&act=jumlah&id_transaksi_detail=<?php echo $row['id_transaksi_detail']?>&id_barang=<?php echo $row['id_barang']?>&id_transaksi=<?php echo $id_transaksi?>">
                    <input type="number" name="jumlah" style="border-style: none;outline:none;width: 50px;height: 20px;" value="<?php echo $row['jumlah']?>">
                    <button type="submit" name="submit" class="btn btn-primary">UBAH</button>
                    </form> </td>
                      <td><?php echo rupiah3($row['harga_jual']) ?></td>
                      <td><?php echo rupiah3($row['total_harga'])  ?></td>
                      <td class="text-center">
                        <a href="index.php?page=transaksidetail&act=edit&id=<?php echo $row['id_transaksi_detail']?>&id_transaksi=<?=$id_transaksi?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=transaksidetail&act=hapus&id=<?php echo $row['id_transaksi_detail']?>&id_transaksi=<?=$id_transaksi?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
              <a href="index.php?page=transaksi" class="btn btn-md btn-dark">BACK</a>
            </div>
          </div>
      </div>
    </div>
    </div>
