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
  <title>EZY 3D - EzyCure</title>
</head>
<body id="page-top">
 <?php
$pagina = "acessorio_ezycure";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
 <main>

  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom">
          <h1 class="display-4 text-center"><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead text-center"><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-5">
    <div class="container">
      <div class="row">
        <div class="px-md-5 col-md-8">
          <h1 class="mb-4 text-primary">
            <b><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
          </h1>
          <h3>
            <b><?php
echo $titulo2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
          </h3>
          <p class="mb-3">
          <?php
echo $txt2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </p>
        </div>

        <div class="col-md-4">
          <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg">
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 order-2 order-lg-1">
          <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-tablet.svg">
        </div>

        <div class="px-md-5 p-3 col-lg-6 d-flex flex-column align-items-start justify-content-center order-1 order-lg-2">
          <h1 class="mb-3">
            <?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </h1>
          <div class="row">

            <div class="col-6">
              <h5>
                <b><?php
echo $titulo3_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
              </h5>
              <p>
                <?php
echo $txt3_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
              </p>
            </div>

            <div class="col-6">
              <h5>
                <b><?php
echo $titulo3_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
              </h5>
              <p>
                <?php
echo $txt3_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
              </p>
            </div>

            <div class="col-6">
              <h5>
                <b><?php
echo $titulo3_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
              </h5>
              <p class="mb-0">
                <?php
echo $txt3_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
              </p>
            </div>

            <div class="col-6">
              <h5>
                <b><?php
echo $titulo3_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
              </h5>
              <p class="mb-0">
                <?php
echo $txt3_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>
            <?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-3">
          <img class="img-fluid d-block" src="https://static.pingendo.com/cover-bubble-light.svg">
        </div>
        <div class="col-md-4 p-3">
          <img class="img-fluid d-block" src="https://static.pingendo.com/cover-moon.svg">
        </div>
        <div class="col-md-4 p-3">
          <img class="img-fluid d-block" src="https://static.pingendo.com/cover-bubble-dark.svg">
        </div>
      </div>
    </div>
  </div>

  <div class="pt-5 pb-5 pb-md-0 text-center text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg); background-position: center center, center center;  background-size: 100%, 100%;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="ml-auto bg-white text-dark p-5 col-lg-6 col-md-8">
          <h1>
            <?php
echo $titulo5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </h1>
          <p class="mb-3">
            <?php
echo $txt5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </p>
          <a class="btn btn-primary" href="#"><?php
echo $button1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a>
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