<?php
session_start();
if (isset($_SESSION["banana"])) {
    extract($_SESSION);
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Odontologia</title>
</head>
<body>
 <?php
$pagina = "app_odontologia";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
  <main class="pt-64px">
   <div class="py-3 text-center align-items-center d-flex" style="background-image: linear-gradient(to left bottom, rgba(189, 195, 199, .75), rgba(44, 62, 80, .75)); background-size: 100%;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8 mx-auto"> <i class="d-block fa fa-stop-circle mb-3 text-muted fa-5x"></i>
          <h1 class="display-3 mb-4"><?=$titulo1?></h1>
          <p class="lead mb-5"><?=$txt1?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-3 text-center bg-light">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-tooth fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-gem fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-cog fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-graduation-cap fa-3x"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3"><?=$titulo2?></h1>
          <p><?=$txt2?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light" >
    <div class="container">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h1><?=$titulo3?></h1>
          <p class="mb-3 lead"><?=$txt3?></p>
        </div>
        <div class="col-lg-6"> <img class="img-fluid d-block" src="https://static.pingendo.com/cover-moon.svg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-8 order-2 order-lg-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
        <div class="col-lg-2 col-4 d-flex flex-column justify-content-between order-3 order-lg-2"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
        <div class="px-md-5 p-3 d-flex flex-column justify-content-center col-lg-6 order-1 order-lg-3">
          <i class="d-block fa fa-circle fa-3x mb-2 text-muted"></i>
          <h1><?=$titulo4?></h1>
          <p class="lead"><?=$txt4?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?=$titulo5?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-3 pb-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="vendor/img/img-placeholder-1.svg"></div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-9 p-3">
          <h1 class="mb-0"><?=$titulo6?></h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-primary btn-lg" href="#"><?=$button1?></a> </div>
      </div>
    </div>
  </div>

  <div class="py-3 text-center bg-light">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-tooth fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-gem fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-cog fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-graduation-cap fa-3x"></i>
        </div>
      </div>
    </div>
  </div>


  <?php
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/rodapeAlterarTexto.php";
} else {
    $visivelr = true;
    include "vendor/menu_rodape/rodape.php";
}
?>
</main>
</body>
</html>