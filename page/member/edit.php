<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM member WHERE id_member =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>


    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT MEMBER
            </div>
            <div class="card-body">
              <form action="index.php?page=member&act=update" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_member" value="<?php echo $row['id_member'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama member</label>
                  <input type="text" name="nama_member" value="<?php echo $row['nama_member'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" value="<?php echo $row['nomor_telp'] ?>" class="form-control">
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
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=member" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    