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
  <title>EZY 3D - Manufatura</title>
</style>
</head>
<body>
 <?php
$pagina = "app_manufatura";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>

 <main class="pt-64px">

  <div class="py-5" style="background-image: url(&quot;vendor/img/cover-stripes.svg&quot;); background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">

        <div class="p-5 bg-white ml-auto col-md-5 border">
          <h1><?=$titulo1?></h1>
          <p class="mb-3">Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite.</p>
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


  <div class="py-3">
    <div class="container">
      <div class="row">

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle mb-2 text-muted fa-3x"></i>
          <h4><?=$titulo2?></h4>
          <p><?=$txt2?></p>
        </div>

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle-o mb-2 text-muted fa-3x"></i>
          <h4><?=$titulo3?></h4>
          <p><?=$txt3?></p>
        </div>

      </div>
    </div>
  </div>

  <div class="py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h1><?=$titulo4?></h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_1?></b> </p>
              <p class="mb-0"><?=$txt4_1?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_2?></b> </p>
              <p class="mb-0"><?=$txt4_2?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_3?></b> </p>
              <p class="mb-0"><?=$txt4_3?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_4?></b> </p>
              <p class="mb-0"><?=$txt4_4?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_5?></b> </p>
              <p class="mb-0"><?=$txt4_5?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?=$titulo4_6?></b> </p>
              <p class="mb-0"><?=$txt4_6?></p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="py-5" >
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h1><?=$titulo5?></h1>
          <p class="lead mb-4"><?=$txt5?></p>
        </div>
      </div>

      <div class="row d-flex justify-content-between">
        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?=$titulo5_1?></b>
          </h4>
          <p><?=$txt5_1?></p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?=$titulo5_2?></b>
          </h4>
          <p><?=$txt5_2?></p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?=$titulo5_3?></b>
          </h4>
          <p><?=$txt5_3?></p>
        </div>
      </div>

    </div>
  </div>

  <div class="py-5 text-center border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-9 p-3">
          <h1 class="mb-0"><?=$titulo6?></h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
          <a class="btn btn-primary btn-lg" href="#"><?=$button1?></a>
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