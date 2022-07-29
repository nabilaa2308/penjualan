<?php 
  include 'database/koneksi.php';

  ?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI DETAIL
            </div>
            <div class="card-body">
              <form action="index.php?page=transaksidetail&act=simpan" method="POST">

                <div class="form-group">
                  <label>Kode INV</label>
                  <?php
                  $id_transaksi_detail = ['id'];
                  $sql= "SELECT * FROM transaksi";
                  $query=mysqli_query($connection,$sql);
                  while($data_transaksi=mysqli_fetch_array($query)){
                    $id_transaksi = $data_transaksi['id_transaksi'];
                    $kode_inv = $data_transaksi['kode_inv'];
                  }
                  ?>
                  <input type="text" name="id_transaksi" class="form-control" value="<?=$id_transaksi?> . <?=$kode_inv?>" readonly> 
                </div>

                <div class="form-group">
                  <label>Barang</label>
                  <?php
                  $sql= " SELECT * FROM barang ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_barang" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_barang']?>"><?php echo $row2['id_barang'].$a.$row2['nama_barang'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <?php
                  $sql= "SELECT * FROM barang";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select id="harga_jual" name="id_barang" class="form-control">
                    <?php while($row3=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row3['id_barang']?>"><?php echo $row3['id_barang'].$a.$row3['harga_jual'];?></option>
                    <?php } ?>
                  </select>                
                </div> 

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=transaksidetail" class="btn btn-md btn-dark">BACK</a>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
