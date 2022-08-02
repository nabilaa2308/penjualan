<?php 
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM kategori WHERE id_kategori = $id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>


    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT KATEGORI
            </div>
            <div class="card-body">
              <form action="index.php?page=kategori&act=update" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=kategori" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    