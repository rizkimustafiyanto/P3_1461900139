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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->

         <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Selamat Datang Semuanya</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="#" class="btn btn-sm btn-info float-left">Lihat</a>
                <a href="#" class="btn btn-sm btn-secondary float-right">Dengar</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
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
<?php /**PATH C:\xampp\htdocs\Praktikum\ketiga\resources\views/dashboard0139.blade.php ENDPATH**/ ?>