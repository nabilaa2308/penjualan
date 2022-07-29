<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM supplier WHERE id_supplier =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SUPPLIER
            </div>
            <div class="card-body">
              <form action="index.php?page=supplier" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>" class="form-control">
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
                  <label>Nomor Rekening</label>
                  <input type="text" name="nomor_rekening" value="<?php echo $row['nomor_rekening'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=supplier" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    