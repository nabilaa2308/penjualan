<?php
include('database/koneksi.php');
?>
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA KATEGORI
            </div>
            <div class="card-body">
              <form action="index.php?page=kategori&act=simpan" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_kategori" placeholder="Masukkan ID Kategori" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama_kategori" placeholder="Masukkan Nama Kategori" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=kategori" class="btn btn-md btn-dark">BACK</a>

              </form>
    </div>
