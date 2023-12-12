<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Level</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?= App::baseUrl('level/update_action') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_level" class="col-sm-2 col-form-label">Nama level</label>
                    <div class="col-sm-10">
                      <input hidden type="text" name="id" value=" <?= $dataLevel['id'] ?> " >
                      <input type="text" class="form-control" id="nama_level" name="nama_level" placeholder="Nama level" value=" <?= $dataLevel['nama_level'] ?> ">
                    </div>
                  </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->