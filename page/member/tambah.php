
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA MEMBER
            </div>
            <div class="card-body">
              <form action="index.php?page=member&act=simpan" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_member" placeholder="Masukkan ID Member" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Member</label>
                  <input type="text" name="nama_member" placeholder="Masukkan Nama Member" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="nomor_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Member" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name=jenis_kelamin class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=member" class="btn btn-md btn-dark">BACK</a>

              </form>
    </div>
          </div>
        </div>
      </div>
  </div>

    