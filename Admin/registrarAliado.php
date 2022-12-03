<?php 
require_once("../../model/conexion.php");
require_once("../../model/validarSesion.php");
require_once("../../controller/seguridadadmin.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Aliados</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dashboard-base/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../dashboard-base/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../dashboard-base/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../dashboard-base/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard-base/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dashboard-base/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../dashboard-base/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../dashboard-base/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dashboard-base/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homeAdmin.php" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
     
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
   
      <!-- Notifications Dropdown Menu -->
   
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<?php
          include('menuAdmin.php');
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registrar Aliados</h1>
          </div><!-- /.col -->
      
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row"></div>
        <div class="col-md-6">         
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario de Registro</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="../../controller/regAliadoAdmin.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6">
                                <label for="Tipo_Documento">Tipo de Documento</label>
                                    <select id= "Tipo_Documento" name="Tipo_Documento"class="form-control" required>
                                          <option>Seleccione...</option>
                                          <option value="NIT">NIT</option>
                                          
                                    </select>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="identificacion">Nit</label>
                          <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Ej:123456" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="nombres">Razón Social</label>
                              <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ej:Supermecado Sas" required>
                      </div>                        
                      <div class="form-group col-md-6">
                              <label for="direccion">Dirección</label>
                              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="ciudad">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="telefono">Teléfono</label>
                              <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ej:3132564" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="Email" class="form-control" id="email" name="email" placeholder="Ej:ana@gmail.com" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="email">Valor por Punto</label>
                              <input type="number" class="form-control" id="valorpunto" name="valorpunto" placeholder="$0.25" required>
                      </div>                        
                      <div class="form-group col-md-6">
                              <label for="clave">Clave</label>
                              <input type="text" class="form-control" id="clave" name="clave" placeholder="Ej:An12m" required>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="estado">Estado</label>
                              <select id= "estado" name="estado" class="form-control" required>
                                          <option>Seleccione...</option>
                                          <option value="Activo">Activo</option>
                                          <option value="Pendiente">Pendiente</option>
                                          <option value="Inactivo">Inactivo</option>
                              </select>
                      </div>                        
                      <div class="form-group col-md-6">
                              <label for="foto">Foto perfil</label>
                              <input type="file" accept=".png, .jpg, .jpeg, .gif" class="form-control" id="foto" name="foto" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
           
 
     <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>


<!-- jQuery -->
<script src="../dashboard-base/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../dashboard-base/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../dashboard-base/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../dashboard-base/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../dashboard-base/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../dashboard-base/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../dashboard-base/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../dashboard-base/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../dashboard-base/plugins/moment/moment.min.js"></script>
<script src="../dashboard-base/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../dashboard-base/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../dashboard-base/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../dashboard-base/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard-base/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dashboard-base/dist/js/demo.js"></script>
<!-- AdminLTE /dashboard demo (This is only for demo purposes) -->
<script src="../dashboard-base/dist/js/pages/dashboard.js"></script>
</body>
</html>