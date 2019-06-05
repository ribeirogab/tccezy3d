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
  <title>EZY 3D - Engenharia</title>
  </style>
</head>

<body class="bg-dark">
  <?php
  $pagina = "app_engenharia";
  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
  } else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
  }
  ?>

  <main>

    <div class="py-5" style="background-image: linear-gradient(30deg, #bc5453, #333 );">
      <div class="container">
        <div class="row">

          <div class="p-md-5 p-3 bg-white text-black ml-auto col-md-5 border">
            <h1>
              <?php
              echo $titulo1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h1>
            <p class="mb-3">
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
            <a href="app_joalheria.php" class="location-link"><i class="d-block fas fa-gem fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="#" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app" style="color: #f38919"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="app_entretenimento.php" class="location-link"><i class="d-block fas fa-theater-masks fa-3x icone-app"></i></a>
          </div>
        </div>
      </div>
    </div>


    <div class="py-5 bg-white text-black">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <img class="img-fluid d-block" src="vendor/img/app_engenharia/ft1.jpg"> </div>
          <div class="px-md-5 p-3 col-md-6 d-flex flex-column justify-content-center">
            <h2>
              <?php
              echo $titulo2;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h2>
            <p class="mb-3 lead">
              <?php
              echo $txt2;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5 pb-3 text-center bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3">
              <?php
              echo $titulo3;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h2>
            <p class="lead">
              <a href="#">
                <?php
                echo $txt3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </a> <br> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft2.jpg" width="1500">
            <h4 class="mt-3 mb-0">
              <b>
                <?php
                echo $titulo3_1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h4>
          </div>
          <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft3.jpg" width="1500">
            <h4 class="mt-3 mb-0">
              <b>
                <?php
                echo $titulo3_2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h4>
          </div>
          <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft4.jpg" width="1500">
            <h4 class="mt-3 mb-0">
              <b>
                <?php
                echo $titulo3_3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h4>
          </div>
          <div class="col-md-3 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft5.jpg" width="1500">
            <h3 class="mt-3 mb-0">
              <b>
                <?php
                echo $titulo3_4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="py-md-5 py-3 text-center bg-white text-black">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mb-3">
              <?php
              echo $titulo4;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h1>
            <p>
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
    <div class="py-4 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-3"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft6.jpg"> </div>
          <div class="col-md-6 p-3"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft7.jpg"> </div>
        </div>
      </div>
    </div>
    <div class="py-5 bg-white text-black">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              <?php
              echo $titulo5;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h2>
            <p class="lead mb-4">
              <?php
              echo $txt5;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-md-6 col-lg-5 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft8.jpg" width="1500">
            <h4 class="my-3">
              <b>
                <?php
                echo $titulo5_1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h4>
            <p>
              <?php
              echo $txt5_1;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
          </div>
          <div class="col-md-6 col-lg-5 p-4"> <img class="img-fluid d-block box-shadow" src="vendor/img/app_engenharia/ft9.jpg" width="1500">
            <h4 class="my-3">
              <b>
                <?php
                echo $titulo5_2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </b>
            </h4>
            <p>
              <?php
              echo $txt5_2;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
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
              echo $titulo6;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h3>
          </div>
          <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
            <a class="ezy-button ezy-lg ezy-orange w-75" href="contato.php">
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
            <a href="app_joalheria.php" class="location-link"><i class="d-block fas fa-gem fa-3x icone-app"></i></a>
          </div>
          <div class="col-md-3 col-4 p-2">
            <a href="#" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app" style="color: #f38919"></i></a>
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