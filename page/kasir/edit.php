<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM kasir WHERE id_kasir =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>


    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT KASIR
            </div>
            <div class="card-body">
              <form action="index.php?page=kasir&act=update" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_kasir" value="<?php echo $row['id_kasir'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kasir</label>
                  <input type="text" name="nama_kasir" value="<?php echo $row['nama_kasir'] ?>" class="form-control">
                </div>  
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name=jenis_kelamin class="form-control">
                    <option value="Laki-Laki" <?php if ($row['jenis_kelamin'] == 'Laki-Laki') { echo 'selected';}?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') { echo 'selected';}?>>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Cabang</label>
                  <?php
                  $sql= " SELECT * FROM cabang ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_cabang" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_cabang']?>"><?php echo $row['id_cabang'].$a.$row['nama_cabang'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=kasir" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  