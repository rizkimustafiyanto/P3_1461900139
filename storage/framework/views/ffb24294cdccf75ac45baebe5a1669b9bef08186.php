<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('part/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
    <?php echo $__env->make('part/proses/opening', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Navbar -->
    <?php echo $__env->make('part/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php echo $__env->make('part/side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kelas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kelas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Kelas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nama Pengajar</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php $__currentLoopData = $jadwalkelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jkl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($no++); ?></td>
                      <td><?php echo e($jkl->namas); ?></td>
                      <td>Bpk/Ibu <?php echo e($jkl->namag); ?></td>
                      <td>
                        <a href="kelas.edit" class="btn btn-sm btn-danger">Edit</a>
                        |
                        <a href="#" class="btn btn-sm btn-info">Hapus</a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nama Pengajar</th>
                    <th><a href="<?php echo e(route('kelas.create')); ?>" class="btn btn-sm btn-danger">Tambah</a></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <?php echo $__env->make('part/foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=<?php echo e(asset("administrator/plugins/jquery/jquery.min.js")); ?>></script>
<!-- Bootstrap -->
<script src=<?php echo e(asset("administrator/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>></script>
<!-- overlayScrollbars -->
<script src=<?php echo e(asset("administrator/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")); ?>></script>
<!-- AdminLTE App -->
<script src=<?php echo e(asset("administrator/dist/js/adminlte.js")); ?>></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=<?php echo e(asset("administrator/plugins/jquery-mousewheel/jquery.mousewheel.js")); ?>></script>
<script src=<?php echo e(asset("administrator/plugins/raphael/raphael.min.js")); ?>></script>
<script src=<?php echo e(asset("administrator/plugins/jquery-mapael/jquery.mapael.min.js")); ?>></script>
<script src=<?php echo e(asset("administrator/plugins/jquery-mapael/maps/usa_states.min.js")); ?>></script>
<!-- ChartJS -->
<script src=<?php echo e(asset("administrator/plugins/chart.js/Chart.min.js")); ?>></script>

<!-- AdminLTE for demo purposes -->
<script src=<?php echo e(asset("administrator/dist/js/demo.js")); ?>></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=<?php echo e(asset("administrator/dist/js/pages/dashboard2.js")); ?>></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Praktikum\ketiga\resources\views/tampil/kelast.blade.php ENDPATH**/ ?>