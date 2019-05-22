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
  <title>EZY 3D - Joalheria</title>
</head>

<body>
<?php
$visivelm = true;
$pagina = "app_joalheria";
include "vendor/menu_rodape/menu.php";
?>
  <main class="pt-64px">

    <div class="py-5 text-center text-md-right"
      style="background-image: url(vendor/img/cover-bubble-dark.svg);  background-position: right bottom;  background-size: cover; background-repeat: repeat; background-attachment: fixed;">
      <div class="container">
        <div class="row">
          <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
            <h3 class="display-3"><?=$titulo1?></h3>
            <p class="mb-3 lead"><?=$txt1?></p>
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
          <div class="mx-auto col-md-8">
            <i class="fa fa-stop-circle-o fa-4x mx-3 d-inline text-muted"></i>
            <i class="fa fa-circle fa-4x mx-3 d-inline text-muted"></i>
            <i class="fa fa-stop-circle fa-4x mx-3 d-inline text-muted"></i>
            <p class="mt-3 lead"><?=$txt1_1?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-6 p-3 d-flex align-items-center">
            <h2><?=$titulo2?></h2>
          </div>

          <div class="col-md-6 col-6 p-3 text-center">
            <div class="row">

              <div class="col-md-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_1?></a> </p>
              </div>
              <div class="col-md-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_2?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_3?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_4?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_5?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?=$titulo2_6?></a> </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5">
      <div class="container">

        <div class="row">
          <div class="text-center mx-auto col-md-8">
            <h1 class="mb-3"><?=$titulo3?></h1>
            <p class="lead"><?=$txt3?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
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