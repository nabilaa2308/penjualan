
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA PERUSAHAAN
            </div>
            <div class="card-body">
              <form action="index.php?page=perusahaan&act=simpan" method="POST">
                
                <div class="form-group">
                  <input type="hidden" name="id_perusahaan" placeholder="Masukkan ID Perusahaan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Perusahaan</label>
                  <input type="text" name="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Perusahaan" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email Perusahaan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Berdiri</label>
                  <input type="date" name="tanggal_berdiri" placeholder="Masukkan Tanggal Berdiri Perusahaan" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=perusahaan" class="btn btn-md btn-dark">BACK</a>

              </form>
    </div>
