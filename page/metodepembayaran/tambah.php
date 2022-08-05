
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              DATA METODE PEMBAYARAN
            </div>
            <div class="card-body">
              <form action="index.php?page=metodepembayaran&act=simpan" method="POST">

                <div class="form-group">
                  <input type="hidden" name="id_metode_pembayaran" placeholder="Masukkan ID Metode Pembayaran" class="form-control">
                </div>

                <div class="form-group">
                  <label>Metode Pembayaran</label>
                  <input type="text" name="nama_metode" placeholder="Masukkan Metode Pembayaran" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php?page=metodepembayaran" class="btn btn-md btn-dark style="margin-bottom: 10px">BACK</a>

              </form>
    </div>
          </div>
        </div>
      </div>
  </div>
  
