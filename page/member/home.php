
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA MEMBER
            </div>
            <div class="card-body">
              <a href="index.php?page=member&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA MEMBER</th>
                    <th scope="col">NOMOR TELEPON</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM member");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_member'] ?></td>
                      <td><?php echo $row['nomor_telp'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td class="text-center">
                        <a href="index.php?page=member&act=edit&id=<?php echo $row['id_member'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="index.php?page=member&act=edit&id=<?php echo $row['id_member'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
