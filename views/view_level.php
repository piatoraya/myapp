<div class="col-md-12">
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Daftar Level</h3>

       <div class="card-tools">
          <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button> -->
          </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <a href="<?= App::baseUrl("level/create") ?>" class="btn btn-success btn-sm"><i class="fa fa-plus">Tambah Data</i></a>
              <br>
              <br>
              <table id="tableLevel" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php $x= 1;
                  foreach ($level as $val) { ?>
                    
                  <tr>
                    <td><?= $x ?></td>
                    <td><?= $val['nama_level'] ?></td>
                    <td>
                      <a href="<?= App::baseUrl("level/update/" . $val['id']) ?>" class="btn btn-info btn-sm"><i class="fa fa-edit">Edit</i></a>
                      <a href="<?= App::baseUrl("level/delete/" . $val['id']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash">Delete</i></a>
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