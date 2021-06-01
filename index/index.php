<?php include 'sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Juvenil</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <style>
    .nes{
      background-color: #2c3e50;
    }
    body{
      background-color: #34495e;
    }
    .nestor{
      background-color: #2c3e50;
      border-bottom: none;
    }
    .cuerpo{
      border-bottom: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

            <div class="text-center">
            <h1 class="text-center text-info m-5 font-weight-light p-2">Proyecto Juvenil</h1>
           <?php if(isset($_SESSION['usuario'])):  ?>
           <h4 class="text-secondary">Iniciaste sesion con: 
           <span class="text-white"><?php echo $_SESSION['usuario'] ?></span>
           <span><a href="principal.php" class="border border-primary p-1">ingresar</a></span>
            </h4>
           <?php else: ?>
           <p class="text-danger">No iniciaste sesion</p>
           <?php endif; ?>
            </div>
           
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 ">
        </div>
    </div>
    <div>
    <div class="row">
    <div class="col-6">
    <img src="../images/Online presentation_Two Color.png" class="" alt="..." height="350px">
    </div>
    <div class="col-6">
    <form action="" method="post" class="p-3 border border-info mt-4">
            <h3 class="text-center text-info">Iniciar Sesion</h3>
            <label for="usuario" class="text-white" >Ingrese usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control">
            <label for="password" class="text-white" >Ingrese contraseña</label>
            <input type="text" name="password" id="password" class="form-control">
            <input type="submit" value="INGRESAR" name="submit" class="btn btn-info btn-block mt-4">
            <?php if(!empty($errores)): ?>
            <div class="alert alert-danger my-2 text-center">
                <?php echo $errores ?>
            </div>
            <?php endif ?>
    </form>
    </div>
    </div>
    </div>
</div>


<?php include '../HeaderYFooter/footer.php' ?>