
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA CABANG
            </div>
            <div class="card-body">
              <a href="index.php?page=cabang&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA CABANG</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NOMOR TELEPON</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NAMA PERUSAHAAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM cabang INNER JOIN perusahaan ON perusahaan.id_perusahaan=cabang.id_cabang ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_cabang'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['nomor_telp'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['nama_perusahaan'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=cabang&act=edit&id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=cabang&act=hapus&id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>