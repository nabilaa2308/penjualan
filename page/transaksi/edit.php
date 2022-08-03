<?php 
  
  $id = $_GET['id_transaksi'];
  
  $query = "SELECT * FROM transaksi WHERE id_transaksi ='$id'";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="index.php?page=transaksi&act=update" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kode INV</label>
                  <input type="text" name="kode_inv" value="<?php echo $row['kode_inv'] ?>" class="form-control" readonly>
                </div>
                
                <div class="form-group">
                <button type="button" id="member" class="btn btn-success">Member</button>
                <button type="button" id="nonmember" class="btn btn-success">Non Member</button>
                </div>
                
                <div class="form-group">
                  <?php
                  $sql= " SELECT * FROM member";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_member" id="showmember" style="display: none;" class="form-control">
                  <option value="6">Pilih Member</option>
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_member']?>" <?php if($row2['id_member'] == $row['id_member']) { echo 'selected';}?>><?php echo $row2['id_member'].$a.$row2['nama_member'];?></option>
                    <?php } ?>
                  </select>
                </div>

                
                <div class="form-group">
                  <input type="text" style="display: none;" id="showpembeli" name="nama_pembeli" value="<?php echo $row['nama_pembeli'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Kasir</label>
                  <?php
                  $sql= " SELECT * FROM kasir";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_kasir" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_kasir']?>" <?php if($row2['id_kasir'] == $row['id_kasir']) { echo 'selected';}?>><?php echo $row2['id_kasir'].$a.$row2['nama_kasir'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>PPN%</label>
                  <input type="text" name="ppn" value="<?php echo $row['ppn'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon%</label>
                  <input type="text" name="diskon" value="<?php echo $row['diskon'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <input type="hidden" id="total_bayar" name="total_bayar" value="<?php echo $row['total_bayar'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <?php
                  $sql= " SELECT * FROM metode_pembayaran";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_metode_pembayaran" class="form-control">
                    <?php while($row2=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row2['id_metode_pembayaran']?>" <?php if($row2['id_metode_pembayaran'] == $row['id_metode_pembayaran']) { echo 'selected';}?>><?php echo $row2['id_metode_pembayaran'].$a.$row2['nama_metode'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <input type="hidden" id="total_bayar" name="total_bayar" value="<?php echo $row['total_bayar'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Status : </label>
                  <input type="checkbox" id="status" name="proses" value="proses">
                  <label for="status">Proses</label>
                <input type="checkbox" id="status" name="selesai" value="selesai">
                <label for="status">Selesai</label>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=transaksi" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>