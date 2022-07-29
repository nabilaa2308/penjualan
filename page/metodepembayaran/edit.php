<?php 
  
  include('database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM metode_pembayaran WHERE id_metode_pembayaran =$id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT METODE PEMBAYARAN
            </div>
            <div class="card-body">
              <form action="index.php?page=metodepembayaran&act=update" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>"  class="form-control">
                </div>

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <input type="text" name="nama_metode" value="<?php echo $row['nama_metode'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=metodepembayaran" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    