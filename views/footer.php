
     
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= App::baseUrl('assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= App::baseUrl('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= App::baseUrl('assets') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= App::baseUrl('assets') ?>/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?= App::baseUrl('assets') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script >
  let error ="<?= @$_SESSION['error']; ?>"
  let sukses ="<?= @$_SESSION['sukses']; ?>"


  if (error) {
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: error,
  
});
  }
  if (sukses) {
    Swal.fire({
  title: "Good job!",
  text: sukses,
  icon: "success"
});

  }

<?php
//clear session
@$_SESSION['error'] = null;
@$_SESSION['sukses'] = null;

?>
</script>


</body>
</html>
