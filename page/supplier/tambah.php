

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SUPPLIER
            </div>
            <div class="card-body">
              <form action="index.php?page=supplier&act=simpan" method="POST">

              <div class="form-group">
                  <input type="hidden" name="id_perusahaan" placeholder="Masukkan ID Supplier" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" name="nama_supplier" placeholder="Masukkan Nama Supplier" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Supplier" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" name="nomor_rekening" placeholder="Masukkan Nomor Rekening" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=supplier" class="btn btn-md btn-dark">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
