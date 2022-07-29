<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM perusahaan WHERE id_perusahaan =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>


    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PERUSAHAAN
            </div>
            <div class="card-body">
              <form action="index.php?page=perusahaan&act=update" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_perusahaan" value="<?php echo $row['id_perusahaan'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" value="<?php echo $row['nama_perusahaan'] ?>" class="form-control">
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
                  <label>Tanggal Berdiri</label>
                  <input type="date" name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>NPWP</label>
                  <input type="text" name="npwp" value="<?php echo $row['npwp'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=perusahaan" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
