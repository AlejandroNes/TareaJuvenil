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
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand nestor">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    <div class="d-flex justify-content-around align-items-center w-100">
      <p class="text-info font-weight-light ">Nombre: <span class="text-white">Nestor Alejandro Mamani Condori</span></p>
      <p class="text-info font-weight-light ">Gestion: <span class="text-white">2021</span></p>
      <p class="text-info font-weight-light ">Año: <span class="text-white">3 <sup>er</sup> año</span></p>
    </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4 nes">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link text-center">
      <span class="border border-info text-info text-center p-2">Sistemas Informaticos</span>
    </a>
    <a href="../index/index.php" class="brand-link text-center">
      <span class="brand-text font-weight-light ">AlejandroNes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <!-- CLIENTESs  -->
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-users mr-2 text-info"></i>
              <p class="text-white">
                Cliente
                <i class="fas fa-angle-left right text-info"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Cliente/registroCliente.php" class="nav-link">
                <i class="far fa-clipboard text-info mr-3"></i>
                  <p>Registro cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Cliente/listarCliente.php" class="nav-link">
                <i class="fas fa-list-ol text-info mr-3"></i>
                  <p>Listar cliente</p>
                </a>
              </li>  
            </ul>
          </li>

          <!-- EMPLEADOS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-user nav-icon mr-2 text-primary"></i> 
              <p class="text-white ">
                Empleados
                <i class="fas fa-angle-left right text-primary"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Empelado/registroEmpleado.php" class="nav-link">
                <i class="far fa-clipboard text-primary mr-3"></i>
                  <p>Registrar empleado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Empelado/listarEmpleado.php" class="nav-link">
                <i class="fas fa-list-ol text-primary mr-3"></i>
                  <p>Listar empleado</p>
                </a>
              </li>
            </ul>
          </li>


          <!-- CARGOS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-address-card mr-2 text-danger"></i>
              <p class="text-white">
                Cargos
                <i class="fas fa-angle-left right text-danger"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Cargo/registroCargo.php" class="nav-link">
                <i class="far fa-clipboard text-danger mr-3"></i>
                  <p>Registrar Cargo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Cargo/listarCargo.php" class="nav-link">
                <i class="fas fa-list-ol text-danger mr-3"></i>
                  <p>Listar Cargo</p>
                </a>
              </li>
            </ul>
          </li>


          <!-- PROVEEDOR -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-walking mr-2 text-warning"></i>
              <p class="text-white">
                Proveedor
                <i class="fas fa-angle-left right text-warning"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Proveedor/registroProveedor.php" class="nav-link">
                <i class="far fa-clipboard text-warning mr-3"></i>
                  <p>Registro proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Proveedor/listarProveedor.php" class="nav-link">
                <i class="fas fa-list-ol text-warning mr-3"></i>
                  <p>Listar proveedor</p>
                </a>
              </li>   
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-success"></i>
              <p class="text-white">
                Producto
                <i class="fas fa-angle-left right text-success"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Producto/registroProducto.php" class="nav-link">
                <i class="far fa-clipboard text-success mr-3"></i>
                  <p>Registrar producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Producto/listarProducto.php" class="nav-link">
                <i class="fas fa-list-ol text-success mr-3"></i>
                  <p>Listar producto</p>
                </a>
              </li>
            </ul>
          </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
<!-- fin de la cabezera -->
<div class="main-header cuerpo my-4">