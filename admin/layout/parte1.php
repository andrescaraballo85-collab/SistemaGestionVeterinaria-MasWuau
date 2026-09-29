<?php
session_start();
if(isset($_SESSION['sesion_email'])){
    //echo "ha pasado por el login";
}else{
    //echo "no ha pasado por el login";
    header ('Location: '.$url.'/login');
}

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  
  <!-- jQuery -->
  <script src="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

  <!-- Libreria de mensajes Sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>

/* ======= IDENTIDAD MASWUAW ======= */

/* Barra superior */
.main-header{
    background:#31C4F3 !important;
}

/* Texto barra superior */
.main-header .nav-link{
    color:white !important;
}

/* Sidebar */
.main-sidebar{
    background:#2F3B45 !important;
}

/* Logo */
.brand-link{
    background:#FFFFFF !important;
    text-align:center;
    padding:12px;
    border-bottom:3px solid #31C4F3;
}

.brand-text{
    color:#2F2F2F !important;
    font-weight:bold;
}

/* Menú activo */
.nav-sidebar .nav-link.active{
    background:#31C4F3 !important;
}

/* Hover */
.nav-sidebar .nav-link:hover{
    background:#1AAFE0 !important;
}

/* Botón Exportar */
.btn-maswuaw{
    background:#31C4F3 !important;
    color:white !important;
    border:none;
    border-radius:8px;
}

.btn-maswuaw:hover{
    background:#0B88B8 !important;
}

/* Panel de usuario */
.user-panel .info{
    width: auto !important;
    max-width: 180px !important;
    overflow: visible !important;
}

.user-panel .info strong{
    display: block;
    white-space: normal !important;
    word-break: break-word;
    line-height: 18px;
    font-size: 18px;
}

/* ==========================
   BOTÓN MASWUAW
========================== */

.dt-buttons .btn-maswuaw{
    background:#0d6efd !important;
    border:1px solid #0d6efd !important;
    color:#fff !important;
    font-weight:600;
    border-radius:6px;
}

.dt-buttons .btn-maswuaw:hover{
    background:#0b5ed7 !important;
    border-color:#0a58ca !important;
    color:#fff !important;
}

.dt-buttons .btn-maswuaw:focus{
    box-shadow:none !important;
}

</style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $url;?>/admin" class="nav-link"><?php echo APP_NAME;?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $url;?>/admin" class="brand-link text-center">

    <img src="<?php echo $url;?>/Public/img/login.png"
         alt="MasWuaw Logo"
         style="width:160px; height:auto; margin-top:5px; margin-bottom:5px;">

</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">

    <div class="image mr-3">
        <img src="<?php echo $url;?>/Public/img/veterinario.jpeg"
             class="img-circle elevation-3"
             style="
                width:60px;
                height:70px;
                object-fit:cover;
                border:2px solid #31C4F3;
             ">
    </div>
        <div class="info">
    <span style="color:white;font-size:12px;color:#d8d8d8;letter-spacing:.5px;">
        Bienvenido
    </span>
    <br>
    <strong style="color:#31C4F3;font-size:16px;font-weight:700;line-height:20px;">
        Alfonso Olarte Salamanca
    </strong>
</div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $url;?>/admin/usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $url?>/admin/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-">
                <i class="bi bi-clipboard2-check-fill"></i>
              </i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $url;?>/admin/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $url?>/admin/productos/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Producto</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo $url;?>/app/controllers/login/cerrar_sesion.php" class="nav-link active" style="background-color: red">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Cerrar Sesión
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">