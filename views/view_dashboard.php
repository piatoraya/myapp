<div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php 
                  foreach ($status as $val)
                  if ($val['id']==$dataPengguna['id_status']) {?>
                 
                    <p><?= $val['nama'] ?> </p>
                  <?php }?>
              
                </div>