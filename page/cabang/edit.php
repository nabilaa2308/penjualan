<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM cabang WHERE id_cabang =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CABANG
            </div>
            <div class="card-body">
              <form action="index.php?page=cabang&act=update" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_cabang" value="<?php echo $row['id_cabang'] ?>" class="form-control">
                </div>  

                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" name="nama_cabang" value="<?php echo $row['nama_cabang'] ?>" class="form-control">
                </div>  
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>ID Perusahaan</label>
                  <?php
                  $sql= " SELECT * FROM perusahaan ";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_perusahaan" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_perusahaan']?>"><?php echo $row['id_perusahaan'].$a.$row['nama_perusahaan'];?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="datacabang.php" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   