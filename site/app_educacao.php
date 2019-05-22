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
  <title>EZY 3D - Educação</title>
</head>
<body>
 <?php
$visivelm = true;
$pagina = "app_educacao";
include "vendor/menu_rodape/menu.php";
?>
 <div class="py-5 text-center" style="background-image: url('https://static.pingendo.com/cover-bubble-dark.svg');background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="bg-white p-5 mx-auto col-md-8 col-10">
        <h3 class="display-3"><?=$titulo1?></h3>
        <p class="mb-3 lead"><?=$titulo1_1?></p>
        <p class="mb-4"><?=$txt1?></p>
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
      <div class="mx-auto col-md-10">
        <i class="d-block fa fa-stop-circle fa-4x mb-3 text-muted"></i>
        <p><?=$txt1_1?></p>
      </div>
    </div>
  </div>
</div>

<div class="py-4 text-center bg-light">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 p-3">
        <div class="card">
          <div class="card-body p-4">
            <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg" width="150">
            <h1><?=$titulo2_1?></h1>
            <p class="mb-0"><?=$txt2_1?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 p-3 col-md-6">
        <div class="card">
          <div class="card-body p-4">
            <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg" width="150">
            <h1><?=$titulo2_2?></h1>
            <p class="mb-0"><?=$txt2_2?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 p-3 col-md-6">
        <div class="card">
          <div class="card-body p-4">
            <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg" width="150">
            <h1><?=$titulo2_3?></h1>
            <p class="mb-0"><?=$txt2_3?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="py-5" >
  <div class="container">
    <div class="row">

      <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
        <h1><?=$titulo3?></h1>
        <p class="mb-0"><?=$txt3?></p>
      </div>

      <div class="col-lg-4 p-3">
        <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="vendor/img/img-placeholder-1.svg">
            </div>
          </div>

          <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="py-5 text-center border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-9 p-3">
        <h1 class="mb-0"><?=$titulo4?></h1>
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
$visivelr = true;
include "vendor/menu_rodape/rodape.php";
?>
</main>
</body>
</html>