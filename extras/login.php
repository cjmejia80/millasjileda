<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Iniciar Sesión</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dashboard-base/">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../dashboard-base/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard-base/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../css/estilos.css">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b></b></a>
  </div>

  <div class="login">
    <div class="card-login">
      <p class="login-box-msg"> <H2>INICIAR SESIÓN</H2></p>

      <form action="../../controller/iniciarSesion.php" method="post">
        <div class="input-group mb-3 col-14">
                 
               <div class="input-group mb-3">
                 <input type="email" class="form-control" required name='email' placeholder="Email">
                 <div class="input-group-append">
                   <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                   </div>
                 </div>
               </div>
               
               <div class="input-group mb-3">
                 <input type="password" class="form-control" required name='clave' placeholder="Clave">
                 <div class="input-group-append">
                   <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                   </div>
                 </div>
               </div>
                 <!-- /.col -->
                 <div class="col-12">
                   <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                 </div>
                  <!-- /.col -->
               </div>
               
      
      </form>
      <br>
  
<!--
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Usar Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Usar Google+
        </a>
      </div>
-->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <div class="Registrateaqui">
<p>¿Aún no tiene una cuenta? </p><a href="registro_user.php" class="text-center">Regístrese aquí</a>
</div>
</div>
<!-- /.register-box -->
<!-- Modal --> 


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
