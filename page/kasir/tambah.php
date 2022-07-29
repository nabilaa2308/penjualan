<?php
include 'database/koneksi.php';

?>

  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA KASIR
            </div>
            <div class="card-body">
              <form action="index.php?page=kasir&act=simpan" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_kasir" placeholder="Masukkan ID Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kasir</label>
                  <input type="text" name="nama_kasir" placeholder="Masukkan Nama Kasir" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Kasir" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name=jenis_kelamin class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>


                <div class="form-group">
                  <label>Cabang</label>
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

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=kasir" class="btn btn-md btn-dark">BACK</a>

              </form>
    </div>
