<?php
include 'database/koneksi.php';
?>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA CABANG
            </div>
            <div class="card-body">
              <form action="index.php?page=cabang&act=simpan" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_cabang" placeholder="Masukkan ID Cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Cabang</label>
                  <input type="text" name="nama_cabang" placeholder="Masukkan Nama Cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Cabang" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email Cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Perusahaan</label>
                  <?php
                  $sql= " SELECT * FROM perusahaan";
                  $query=mysqli_query($connection,$sql);
                  $a=". ";
                  ?>
                  <select name="id_perusahaan" class="form-control">
                    <?php while($row=mysqli_fetch_array($query)){?>
                    <option value="<?php echo $row['id_perusahaan']?>"><?php echo $row['id_perusahaan'].$a.$row['nama_perusahaan'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" name="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=cabang" class="btn btn-md btn-dark">BACK</a>

              </form>
    </div>
