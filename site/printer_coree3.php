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
  <title>EZY 3D - Core E3</title>
</head>
<body>
 <?php
$pagina = "printer_coree3";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
 <main class="pt-64px">

  <div class="py-3 text-center text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(&quot;https://static.pingendo.com/cover-bubble-dark.svg&quot;); background-position: center center, center center; background-size: cover, cover; background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h1 class="mb-3"><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead mb-2"><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p> <img class="img-fluid d-block mx-auto" src="https://static.pingendo.com/img-placeholder-tablet.svg" width="750" style="">
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
        <div class="px-md-5 p-3 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2"> <i class="d-block fa fa-stop-circle fa-4x mb-3 text-muted"></i>
          <h1><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="mb-3 lead"><?php
echo $txt2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
          <div class="row text-muted">
            <div class="col-12 p-2"> <i class="d-inline fa fa-apple fa-3x"></i> <i class="d-inline fa fa-android fa-3x mx-4"></i> <i class="d-inline fa fa-windows fa-3x"></i> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="background-image: url(&quot;https://static.pingendo.com/cover-bubble-dark.svg&quot;); background-position: right bottom; background-size: cover; background-repeat: repeat; background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-8 text-center">
          <h1><?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="mb-4"><?php
echo $txt3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"> <b><?php
echo $card_titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </h5>
              <p class="card-text"><?php
echo $card_p1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_p1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-2.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"> <b><?php
echo $card_titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </h5>
              <p class="card-text"><?php
echo $card_p2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_p2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-4.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"> <b><?php
echo $card_titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </h5>
              <p class="card-text"><?php
echo $card_p3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_p3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/img-placeholder-3.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"> <b><?php
echo $card_titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </h5>
              <p class="card-text"><?php
echo $card_p4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=card_p4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="mb-4"><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 py-md-4 px-4 order-1 order-lg-1 text-lg-right d-flex flex-column justify-content-between">
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-circle mb-1 text-muted fa-2x"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-stop-circle mb-1 text-muted fa-2x"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-circle-o mb-1 text-muted fa-2x"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mx-auto order-3 order-lg-2"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
        <div class="col-lg-3 col-md-6 py-md-4 px-4 order-2 order-lg-3 d-flex flex-column justify-content-between">
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-stop-circle-o mb-1 text-muted fa-2x"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa mb-1 text-muted fa-2x fa-circle-o"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-circle mb-1 text-muted fa-2x"></i>
              <p class="lead mb-1"> <b><?php
echo $titulo4_6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p><?php
echo $txt4_6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-5 pb-5 pb-md-0 text-center text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(&quot;https://static.pingendo.com/cover-bubble-dark.svg&quot;); background-position: center center, center center; background-size: 100%, 100%; background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="ml-auto bg-white text-dark p-5 col-lg-6 col-md-8">
          <h1><?php
echo $titulo5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="mb-3"><?php
echo $txt5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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