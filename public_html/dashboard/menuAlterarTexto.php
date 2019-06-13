<?php
if (!isset($_SESSION['idadmin'])) {
    header("Location:../pa-admin.php");
} else {
    extract($_SESSION);
}
require_once "Classes/TrocarIdioma.php";
if (!isset($_GET['lang'])) {
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    } else {
        $_SESSION['lang'] = 'pt';
        $lang = $_SESSION['lang'];
    }
} else {
    $_SESSION['lang'] = $_GET['lang'];
    $lang = $_SESSION['lang'];
}

$idioma = new TrocarIdioma($lang);

$langPag = $idioma->langPag($pagina);
foreach ($langPag as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}

$langMenu = $idioma->langMenu("menu");
foreach ($langMenu as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}

$langRodape = $idioma->langRodape("rodape");
foreach ($langRodape as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}
?>

<noscript>
  <meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
<link rel="stylesheet" href="vendor/css/menu.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
<!-- Fontawesome -->
<link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">

<link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Sidebar -->
<!-- Page Wrapper -->
<div id="wrapper">
  <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard/index.php">
      <div class="sidebar-brand-icon">
        <img src="dashboard/img/logo_white.svg" width="35px" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">EZY3D</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php if ($permissao == "@571824" || $permissao == "&43642" || $permissao == "$3590" || $permissao == "*271" || $permissao == "#11") {?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    <?php }?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if ($permissao == "@571824") {?>
      <div>
        <!-- Heading -->
        <div class="sidebar-heading">
          master
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configurações</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="configusuarios.php">Usuários</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
      </div>
    <?php }?>


    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <?php if ($permissao == "@571824" || $permissao == "&43642") {?>
      <li class="nav-item">
        <a class="nav-link" href="textos.php">
          <i class="fas fa-pen"></i>
          <span>Alterar textos</span></a>
      </li>
    <?php }?>
    <!-- Troca de texto -->


    <!-- Nav Item - Charts -->


    <?php if ($permissao == "@571824" || $permissao == "&43642" || $permissao == "$3590 " || $permissao == "*271 ") {?>
      <li class="nav-item">
        <a class="nav-link" href="clientes.php">
          <i class="fas fa-users"></i>
          <span>Clientes</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-mobile"></i>
          <span>Atendimento</span></a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="customBanners.php">Suporte</a>
            <a class="collapse-item" href="customImagens.php">Orçamento</a>
            <a class="collapse-item" href="customLogotipo.php">Contato</a>
          </div>
        </div>
      </li>
    <?php }?>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$nome_admin?></span>
              <img class="img-profile rounded-circle" src="dashboard/img/user.png" width="60px">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Sair
              </a>
            </div>
          </li>

        </ul>

      </nav>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Clique em "Sair" abaixo para terminar sua sessão atual.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-danger" href="../controle/logout.php?log=adm">Sair</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">
          <a href="dashboard/textos.php"><i class="fas fa-long-arrow-alt-left"></i></a>
        </h1>
        <!-- Page Heading -->
        <h1 class="h5 mb-4 text-gray-800">
          <a href="dashboard/textos.php">Alterar textos</a> <i class="fas fa-chevron-right mr-2 ml-2"></i>
          <?=$pagina?>
        </h1>
        <hr>