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

<body class="bg-dark">
  <?php
  $pagina = "app_odontologia";
  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
  } else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
  }
  ?>
  <main>
    <div class="py-3 text-center align-items-center d-flex" style="background-image: linear-gradient(to bottom, #333, #7e98ae );">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-8 mx-auto"> <i class="d-block fas fa-tooth mb-3 text-white fa-5x"></i>
            <h1 class="display-3 mb-4">
              <?php
              echo $titulo1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h1>
            <p class="lead mb-5">
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
            <i onclick="window.location.href='app_odontologia.php'" class="d-block fas fa-tooth fa-3x icone-app" style="color: #f38919"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_joalheria.php'" class="d-block fas fa-gem fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_engenharia.php'" class="d-block fas fa-cog fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_entretenimento.php'" class="d-block fas fa-theater-masks fa-3x icone-app"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 bg-white text-black text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-3"><?php
                              echo $titulo2;
                              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                              }
                              ?></h1>
            <p><?php
                echo $txt2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
            <h1><?php
                echo $titulo3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?></h1>
            <p class="mb-3 lead"><?php
                                  echo $txt3;
                                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                                  }
                                  ?></p>
          </div>
          <div class="col-lg-6"> <img class="img-fluid d-block" src="vendor/img/app_odontologia/f1.jpg"> </div>
        </div>
      </div>
    </div>
    <div class="py-5 bg-white text-black text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-8 order-2 order-lg-1"> <img class="img-fluid d-block" src="vendor/img/app_odontologia/f2.jpg"> </div>
          <div class="col-lg-2 col-4 d-flex flex-column justify-content-between order-3 order-lg-2"> <img class="img-fluid d-block" src="vendor/img/app_odontologia/f3.jpg"> <img class="img-fluid d-block" src="vendor/img/app_odontologia/f4.jpg"> </div>
          <div class="px-md-5 p-3 d-flex flex-column justify-content-center col-lg-6 order-1 order-lg-3">
            <i class="d-block fas fa-tooth fa-3x"></i>
            <h1><?php
                echo $titulo4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?></h1>
            <p class="lead">
              <?php
              echo $txt4;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 text-center bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php
                echo $titulo5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="py-3 bg-white text-black pb-1" style="">
      <div class="container">
        <div class="row">
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f5.jpg"></div>
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f6.jpg"></div>
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f7.jpg"></div>
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f8.jpg"></div>
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f10.jpg"></div>
          <div class="col-md-4"><img class="img-fluid d-block mt-3 box-shadow" src="vendor/img/app_odontologia/f9.jpg"></div>
        </div>
      </div>
    </div>
    <div class="py-5 bg-light text-center border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-9 p-3">
            <h1 class="mb-0">
              <?php
              echo $titulo6;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h1>
          </div>
          <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
            <a class="btn btn-primary btn-lg" href="#">
              <?php
              echo $button1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </a> </div>
        </div>
      </div>
    </div>

    <div class="py-3 text-center bg-info">
      <div class="container">
        <div class="row text-muted">
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_odontologia.php'" class="d-block fas fa-tooth fa-3x icone-app" style="color: #f38919"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_joalheria.php'" class="d-block fas fa-gem fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_engenharia.php'" class="d-block fas fa-cog fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_entretenimento.php'" class="d-block fas fa-theater-masks fa-3x icone-app"></i>
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