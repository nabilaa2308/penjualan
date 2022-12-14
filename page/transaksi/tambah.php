

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH TRANSAKSI
            </div>
            <div class="card-body">
              <form action="index.php?page=transaksi&act=simpan" method="POST"> 
                   
                <div class="form-group">
                  <input type="hidden" name="id_transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <input type="hidden" name="kode_inv" placeholder="Masukkan Kode Inv" class="form-control">
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
                    <?php while($row=mysqli_fetch_array($query)){?>
                      <option value="<?php echo $row['id_member']?>"><?php echo $row['id_member'].$a.$row['nama_member'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <input type="text" style="display: none;" id="showpembeli" name="nama_pembeli" value="-" placeholder="Masukkan Nama Pembeli" class="form-control">
                </div>

                  <div class="form-group">
                    <label>Kasir</label>
                    <?php
                    $sql= " SELECT * FROM kasir";
                    $query=mysqli_query($connection,$sql);
                    $a=". ";
                    ?>
                    <select name="id_kasir" class="form-control">
                      <?php while($row=mysqli_fetch_array($query)){?>
                      <option value="<?php echo $row['id_kasir']?>"><?php echo $row['id_kasir'].$a.$row['nama_kasir'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                  

                <div class="form-group">
                  <label>PPN%</label>
                  <input type="text" name="ppn" placeholder="Masukkan PPN" class="form-control">
                </div>

                <div class="form-group">
                  <label>Diskon%</label>
                  <input type="text" name="diskon" placeholder="Masukkan Diskon" class="form-control">
                </div>

                <div class="form-group">
                  <input type="hidden" name="total_bayar" class="form-control">
                </div>   

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <?php
                  $sql= " SELECT * FROM metode_pembayaran";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_metode_pembayaran" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_metode_pembayaran']?>"><?php echo $row['id_metode_pembayaran'].$a.$row['nama_metode'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <input type="hidden" name="status" value="proses" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=transaksi" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
