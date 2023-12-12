<div class="col-md-12">
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Daftar Pengguna</h3>

       <div class="card-tools">
          <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button> -->
          </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <a href="<?= App::baseUrl("pengguna/create") ?>" class="btn btn-success btn-sm"><i class="fa fa-plus">Tambah Pengguna</i></a>
              <br>
              <br>
              <table id="tablePengguna" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php $x= 1;
                  foreach ($pengguna as $val) { ?>
                    
                  <tr>
                    <td><?= $x ?></td>
                    <td><?= $val['nama'] ?></td>
                    <td><?= $val['email'] ?></td>
                    <td><?= $val['nama_level'] ?></td>
                    <td><?= $val['nama_status'] ?></td>
                    <td>
                      <a href="<?= App::baseUrl("pengguna/update/" . $val['id']) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit">Edit</i></a>
                      <a href="<?= App::baseUrl("pengguna/delete/" . $val['id']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash">Delete</i></a>
                    </td>
                  </tr>
                    



                <?php $x++;
                  } ?>



                 
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>