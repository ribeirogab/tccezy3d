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
  <title>EZY 3D - Entretenimento</title>
</head>

<body class="bg-dark">
  <?php
$pagina = "app_entretenimento";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
  <main>
    <div class="py-5 text-center" style="background-image: linear-gradient(to bottom, #333, #F28918 );">
      <div class="container">
        <div class="row">
          <div class="bg-white text-black p-5 mx-auto col-md-8 col-10">
            <h3 class="display-3">
              <?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
            </h3>
            <p class="mb-3 lead">
              <?php
echo $titulo1_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
            </p>
            <p class="mb-4">
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
            <i onclick="window.location.href='app_odontologia.php'" class="d-block fas fa-tooth fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_joalheria.php'" class="d-block fas fa-gem fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_engenharia.php'" class="d-block fas fa-cog fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_entretenimento.php'" class="d-block fas fa-theater-masks fa-3x icone-app" style="color: #f38919"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 bg-white text-black text-center">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-10">
            <i class="d-block fa fa-stop-circle fa-4x mb-3 text-muted"></i>
            <p><?php
echo $txt1_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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
                <h1>
                  <?php
echo $titulo2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </h1>
                <p class="mb-0">
                  <?php
echo $txt2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-3 col-md-6">
            <div class="card">
              <div class="card-body p-4">
                <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg" width="150">
                <h1>
                  <?php
echo $titulo2_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </h1>
                <p class="mb-0">
                  <?php
echo $txt2_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 p-3 col-md-6">
            <div class="card">
              <div class="card-body p-4">
                <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg" width="150">
                <h1>
                  <?php
echo $titulo2_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </h1>
                <p class="mb-0">
                  <?php
echo $txt2_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="py-5 bg-white text-black">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center">
            <h1>
              <?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
            </h1>
            <p class="mb-0">
              <?php
echo $txt3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
            </p>
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

    <div class="py-5 text-center border-top bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-9 p-3">
            <h1 class="mb-0">
              <?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
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
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 text-center bg-info">
      <div class="container">
        <div class="row text-muted">
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_odontologia.php'" class="d-block fas fa-tooth fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_joalheria.php'" class="d-block fas fa-gem fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_engenharia.php'" class="d-block fas fa-cog fa-3x icone-app"></i>
          </div>
          <div class="col-md-3 col-4 p-2">
            <i onclick="window.location.href='app_entretenimento.php'" class="d-block fas fa-theater-masks fa-3x icone-app" style="color: #f38919"></i>
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