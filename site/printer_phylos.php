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
$pagina = "printer_phylos";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
 <main class="pt-64px">
  <div class="py-5" style="background-image: url(&quot;https://static.pingendo.com/cover-stripes.svg&quot;); background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6"><img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg"></div>
            <div class="col-md-6" style="">
              <h1><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
              <p><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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
          <p class="mb-2"><?php
echo $txt2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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
          <h1 class="mb-3"><?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead"><?php
echo $txt3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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
          <h1 class="mb-4"><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-7 mx-auto order-2 order-lg-1"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-mobile.svg"> </div>
        <div class="col-lg-5 py-md-5 px-4 order-1 order-lg-2 d-flex flex-column justify-content-between">
          <div class="row">
            <div class="col-9 col-md-12"> <i class="d-block fa fa-stop-circle-o mb-1 text-muted fa-3x"></i>
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
            <div class="col-9 col-md-12"> <i class="d-block fa mb-1 text-muted fa-circle-o fa-3x"></i>
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
            <div class="col-9 col-md-12"> <i class="d-block fa fa-circle mb-1 text-muted fa-3x"></i>
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
      </div>
    </div>
  </div>
  <div class="py-3 text-center bg-info" data-pingendo-transient="">
    <div class="container">
      <div class="row">
        <div class="col-md-9 p-3">
          <h1 class="mb-0"><?php
echo $titulo5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3"> <a class="btn btn-primary btn-lg" href="#"><?php
echo $button1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </div>
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