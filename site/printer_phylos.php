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
  <title>EZY 3D - Phylos</title>
</head>
<body>
 <?php
$visivelm = true;
$pagina = "printer_phylos";
include "vendor/menu_rodape/menu.php";
?>
 <main class="pt-64px">
  <div class="py-5" style="background-image: url(&quot;https://static.pingendo.com/cover-stripes.svg&quot;); background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
            <div class="col-md-6" style="">
              <h1><?=$titulo1?></h1>
              <p><?=$txt1?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="px-md-5 p-3 col-md-6 d-flex flex-column align-items-start justify-content-center">
          <h1><?=$titulo2?></h1>
          <p class="mb-3 lead"><?=$txt2?></p>
          <p class="mb-2"><?=$txt2_1?></p>
          <div class="row">
            <div class="col-md-12"> <i class="fa fa-stop-circle fa-3x mr-3 text-muted d-inline"></i> <i class="fa fa-circle-o fa-3x mx-3 text-muted d-inline"></i> <i class="fa fa-stop-circle-o fa-3x mx-3 text-muted d-inline"></i> <i class="fa fa-circle fa-3x ml-3 text-muted d-inline"></i> </div>
          </div>
        </div>
        <div class="col-md-6"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-tablet.svg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-8">
          <h1 class="mb-3"><?=$titulo3?></h1>
          <p class="lead"><?=$txt3?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
        <div class="col-md-4"><img class="img-fluid d-block mt-3" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
      </div>
    </div>
  </div>
  <div class="pt-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="mb-4"><?=$titulo4?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-7 mx-auto order-2 order-lg-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
        <div class="col-lg-5 py-md-5 px-4 order-1 order-lg-2 d-flex flex-column justify-content-between">
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-stop-circle-o mb-1 text-muted fa-3x"></i>
              <p class="lead mb-1"> <b><?=$titulo4_1?></b> </p>
              <p><?=$txt4_1?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa mb-1 text-muted fa-circle-o fa-3x"></i>
              <p class="lead mb-1"> <b><?=$titulo4_2?></b> </p>
              <p><?=$txt4_2?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-circle mb-1 text-muted fa-3x"></i>
              <p class="lead mb-1"> <b><?=$titulo4_3?></b> </p>
              <p><?=$txt4_3?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center bg-info" data-pingendo-transient="">
    <div class="container">
      <div class="row">
        <div class="col-md-9 p-3">
          <h1 class="mb-0"><?=$titulo5?></h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-primary btn-lg" href="#"><?=$button1?></a> </div>
      </div>
    </div>
  </div>

  <?php
$visivelr = true;
include "vendor/menu_rodape/rodape.php";
?>
</main>
</body>
</html>