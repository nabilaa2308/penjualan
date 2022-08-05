<?php
$id_transaksi= $_GET['id'];

?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <form action="index.php?page=transaksidetail&act=simpan&id=<?php echo $id_transaksi?>" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_transaksi_detail" class="form-control">
                </div>

                

                <div class="form-group">
                  <label>Kode INV</label>
                  <?php
                  $id_transaksi = $_GET['id'];
                  $query1 = "SELECT * , DATE_FORMAT(waktu_transaksi,'%W, %d/%M/%Y %H:%i') AS waktu FROM transaksi inner join kasir on transaksi.id_kasir=kasir.id_kasir WHERE id_transaksi = $id_transaksi";
                  $result = mysqli_query($connection, $query1);
                  $row2 = mysqli_fetch_array($result);
                  $b= " Kode Invoice : ";
              ?>
              <div class="form-row">
              <input type="text" name="id_transaksi" class="form-control" style="width:6%;margin-left:3px;" value="<?php echo $id_transaksi?>" readonly>
              <input type="text" name="desk_transaksi" class="form-control" style="width:93%;" value="<?php echo $b.$row2['kode_inv'];?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Barang</label>
                  <?php
                  $sql= " SELECT * FROM barang ";
                  $query=mysqli_query($connection,$sql);
                  $a=" . ";
                  $b=" . ";
                  ?>
                  <select name="id_barang" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_barang']?>"><?php echo $row2['id_barang'].$a.$row2['nama_barang'].$b.$row2['harga_jual'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
