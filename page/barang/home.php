
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BARANG
            </div>
            <div class="card-body">
              <a href="index.php?page=barang&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">NAMA KATEGORI</th>
                    <th scope="col">NAMA SUPPLIER</th>
                    <th scope="col">STOK</th>
                    <th scope="col">HARGA MODAL</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">TANGGAL MASUK</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT *, DATE_FORMAT(tanggal_masuk, '%W, %d/%m/%Y') as tanggal_masuk FROM barang INNER JOIN kategori ON kategori.id_kategori=barang.id_kategori INNER JOIN supplier ON supplier.id_supplier=barang.id_supplier");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_barang'] ?></td>
                      <td><?php echo $row['nama_kategori'] ?></td>
                      <td><?php echo $row['nama_supplier'] ?></td>
                      <td><?php echo $row['stok'] ?></td>
                      <td><?php echo rupiah3($row['harga_modal']) ?></td>
                      <td><?php echo rupiah3($row['harga_jual']) ?></td>
                      <td><?php echo $row['tanggal_masuk'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=barang&act=edit&id=<?php echo $row['id_barang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=barang&act=hapus&id=<?php echo $row['id_barang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
