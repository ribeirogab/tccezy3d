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

<body class="bg-dark">
  <?php
  $pagina = "app_joalheria";
  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
  } else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
  }
  ?>
  <main>

    <div class="pt-5 text-center text-md-right" style="background-image: linear-gradient(to bottom, #333, #fa5f32 );">
      <div class="container">
        <div class="row">
          <div class="p-md-5 p-2 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
            <h2 class="display-3">
              <?php
              echo $titulo1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h2>
            <p>
              <?php
              echo $txt1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 text-center bg-light">
      <div class="container">
        <div class="row text-muted">
          <div class="col-md-3 col-4 p-2">
            <a href="app_odontologia.php" class="location-link"><i class="d-block fas fa-tooth fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="#" class="location-link"><i class="d-block fas fa-gem fa-3x icone-app" style="color: #f38919"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="app_engenharia.php" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="app_entretenimento.php" class="location-link"><i class="d-block fas fa-theater-masks fa-3x icone-app"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 text-center bg-white text-black">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-8">
            <p class="mt-3 lead">
              <?php
              echo $txt1_1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-8 order-2 order-lg-1"> <img class="img-fluid d-block" src="vendor/img/app_joalheria/f1.jpg"> </div>
          <div class="col-lg-2 col-4 d-flex flex-column justify-content-between order-3 order-lg-2">
            <img class="img-fluid d-block" src="vendor/img/app_joalheria/f2.jpg">
            <img class="img-fluid d-block" src="vendor/img/app_joalheria/f3.jpg">
          </div>
          <div class="px-md-5 p-3 d-flex flex-column justify-content-center col-lg-6 order-1 order-lg-3">
            <i class="d-block fas fa-gem fa-3x mb-3"></i>
            <h2>
              <?php
              echo $titulo2;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h2>
            <p class="lead">
              <?php
              echo $titulo2_1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>


    <div class="py-5 bg-white text-black">
      <div class="container">

        <div class="row">
          <div class="text-center mx-auto col-md-8">
            <h1 class="mb-3">
              <?php
              echo $titulo3;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h1>
            <p class="lead">
              <?php
              echo $txt3;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f1.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f2.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f3.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f4.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f5.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f6.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f7.jpg">
          </div>
          <div class="col-lg-3 col-md-1 p-3">
            <img class="img-fluid d-block box-shadow" src="vendor/img/app_joalheria/f8.jpg">
          </div>
        </div>

      </div>
    </div>

    <div class="py-5 text-center border-top bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-9 p-3">
            <h3 class="mb-0">
              <?php
              echo $titulo4;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h3>
          </div>

          <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
            <a class="ezy-button ezy-orange ezy-lg w-75" href="contato.php">
              <?php
              echo $button1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="py-3 text-center bg-info">
      <div class="container">
        <div class="row text-muted">
          <div class="col-md-3 col-4 p-2">
            <a href="app_odontologia.php" class="location-link"><i class="d-block fas fa-tooth fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="#" class="location-link"><i class="d-block fas fa-gem fa-3x icone-app" style="color: #f38919"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="app_engenharia.php" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="app_entretenimento.php" class="location-link"><i class="d-block fas fa-theater-masks fa-3x icone-app"></i></a>
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