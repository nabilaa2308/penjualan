<?php
    include 'database/koneksi.php';
    include 'page/layout/js.php';
  
    $id = $_GET['id'];
  
    $query = "SELECT * FROM barang WHERE id_barang =$id ";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);

?>

<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BARANG
            </div>
            <div class="card-body">
              <form action="index.php?page=barang&act=update" method="POST">
                
                <div class="form-group">
                  <input type="hidden" name="id_barang" value="<?php echo $row['id_barang'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <?php
                  $id_barang=$row['id_barang'];
                  $sql= "SELECT * FROM barang inner join kategori on kategori.id_kategori=barang.id_kategori where id_barang=$id";
                  $query=mysqli_query($connection,$sql);
                  while($databarang=mysqli_fetch_array($query)){
                    $id_kategori = $databarang['id_kategori'];
                    $nama_kategori = $databarang['nama_kategori'];
                  }
                  ?>
                  <input type="text" name="id_kategori" class="form-control" value="<?=$id_kategori?> . <?=$nama_kategori?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <?php
                  $id_barang=$row['id_barang'];
                  $sql= "SELECT * FROM barang inner join supplier on supplier.id_supplier=barang.id_supplier where id_barang=$id";
                  $query=mysqli_query($connection,$sql);
                  while($databarang=mysqli_fetch_array($query)){
                    $id_supplier = $databarang['id_supplier'];
                    $nama_supplier = $databarang['nama_supplier'];
                  }
                  ?>
                  <input type="text" name="id_supplier" class="form-control" value="<?=$id_supplier?> . <?=$nama_supplier?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" name="stok" value="<?php echo $row['stok'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Harga Modal</label>
                  <input type="text" id="harga_modal" name="harga_modal" value="<?php echo $row['harga_modal'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" id="harga_jual" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk'] ?>" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php/page=barang" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>