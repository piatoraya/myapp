<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?= App::baseUrl('pengguna/create_action') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group row">
                  <label for="id_level" class="col-sm-2 col-form-label">Pilih Level</label>
                  <div class="col-sm-10">
                  <select class="custom-select form-select-border" name="id_level" id="id_level">
                  <?php 
                  foreach ($level as $val) { ?> 
                    <option value="<?= $val['id'] ?>"><?= $val['nama_level'] ?></option>
                    <?php 
                  } ?>
                  </select>
                  </div>
                  </div>

                  <div class="form-group row">
                  <label for="id_status" class="col-sm-2 col-form-label">Pilih Status</label>
                  <div class="col-sm-10">
                  <select class="custom-select form-select-border" name="id_status" id="id_status">
                    <option value="1">Aktif</option>
                    <option value="2">Nonaktif</option>
                  </select>
                  </div>
                </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->