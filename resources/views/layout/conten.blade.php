<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">
</head>


<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('lte/dist/img/Avatar.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ade Ilya H.A</a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin" class="nav-link">
                  <i class="fa fa-regular fa-user"></i>
                  <p>  Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/barang" class="nav-link">
                  <i class="fa fa-solid fa-box"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jenis" class="nav-link">
                <i class="fa fa-duotone fa-circle"></i>
                  <p>Jenis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/supplier" class="nav-link">
                  <i class="fa fa-solid fa-truck"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </aside>
    <!-- /.sidebar -->
    <div class="content-wrapper">

        @yield('content')
    </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset ('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset ('lte/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset ('lte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('lte/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('lte/dist/js/pages/dashboard3.js') }}"></script>



<!-- jQuery -->
<script src="{{ URL::asset ('lte/plugins/jquery/jquery.min.js'); }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ URL::asset ('lte/plugins/datatables/jquery.dataTables.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/jszip/jszip.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/pdfmake/pdfmake.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/pdfmake/vfs_fonts.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-buttons/js/buttons.html5.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-buttons/js/buttons.print.min.js'); }}"></script>
<script src="{{ URL::asset ('lte/plugins/datatables-buttons/js/buttons.colVis.min.js'); }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset ('lte/dist/js/adminlte.min.js'); }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset ('lte/dist/js/demo.js'); }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
