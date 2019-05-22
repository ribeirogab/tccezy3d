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
  <title>EZY 3D - E1260T</title>
</head>
<body>
 <?php
$visivelm = true;
$pagina = "printer_e1260t";
include "vendor/menu_rodape/menu.php";
?>
<main class="pt-64px">
  <div class="py-3 bg-light">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-md-6 my-5 text-lg-left text-center align-self-center" style="">
          <h1 class="display-1"><?=$titulo1?></h1>
          <p class="lead"><?=$txt1?></p>
          <div class="row mt-5">
            <div class="col-6 col-lg-5"> <a class="btn btn-secondary btn-block" href="#"><?=$button1?></a> </div>
            <div class="col-6 col-lg-5"> <a href="#">
              </a><a class="btn btn-outline-secondary btn-block" href="#"><?=$button2?></a> </div>
          </div>
        </div>
        <div class="col-md-6 bg-dark" style=""></div>
      </div>
    </div>
  </div>
  <div class="pt-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-4 d-flex justify-content-center flex-column">
          <h1 class="mb-4"><?=$titulo2?></h1>
          <p class="lead"><?=$txt2?></p>
          <div class="row my-3">
            <div class="col-3"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
            <div class="col-8 d-flex align-items-center">
              <p class="mb-0"><?=$txt2_1?></p>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-3 order-1 order-md-2"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
            <div class="col-8 d-flex align-items-center order-2 order-md-1">
              <p class="mb-0"><?=$txt2_2?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-8 mx-auto d-flex justify-content-center flex-column"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light" style="">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-8">
          <h1 class="mb-3"><?=$titulo3?></h1>
          <p class="lead"><?=$txt3?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-3.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-3.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3"> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3"> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5" id="features" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="pb-4"><?=$titulo4?></h2>
        </div>
      </div>
      <div class="row">
        <div class="align-self-center text-md-right text-center col-lg-4 col-md-6">
          <h4 class="text-primary"><?=$titulo_especificacao1?></h4>
          <p class="mb-5"><?=$txt_especificacao1?></p>

          <h4 class="text-primary"><?=$titulo_especificacao2?></h4>
          <p class="mb-5"><?=$txt_especificacao2?></p>

          <h4 class="text-primary"><?=$titulo_especificacao3?></h4>
          <p class="mb-5"><?=$txt_especificacao3?></p>
        </div>
        <div class="my-3 col-md-4 d-none d-lg-block bg-dark" style=""></div>
        <div class="align-self-center text-md-left text-center col-lg-4 col-md-6">
          <h4 class="text-primary"><?=$titulo_especificacao4?></h4>
          <p class="mb-5"><?=$txt_especificacao4?></p>

          <h4 class="text-primary"><?=$titulo_especificacao5?></h4>
          <p class="mb-5"><?=$txt_especificacao5?></p>

          <h4 class="text-primary"><?=$titulo_especificacao6?></h4>
          <p class="mb-5"><?=$txt_especificacao6?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center bg-info">
    <div class="container">
      <div class="row">
        <div class="align-items-center d-flex justify-content-center col-md-3 p-3 order-2 order-md-1"> <a class="btn btn-primary btn-lg" href="#"><?=$button3?>
          </a> </div>
        <div class="col-md-9 p-3 order-1 order-md-2">
          <h1 class="mb-0"><?=$titulo5?></h1>
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