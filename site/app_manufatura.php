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
  <title>EZY 3D - Manufatura</title>
</style>
</head>
<body class="bg-dark">
 <?php
$pagina = "app_manufatura";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>

 <main>

  <div class="py-5" style="background-image: url(&quot;vendor/img/cover-stripes.svg&quot;); background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">

        <div class="p-5 bg-white ml-auto col-md-5 border">
          <h1><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="mb-3"><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
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


  <div class="py-3">
    <div class="container">
      <div class="row">

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle mb-2 text-muted fa-3x"></i>
          <h4><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p><?php
echo $txt2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle-o mb-2 text-muted fa-3x"></i>
          <h4><?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p><?php
echo $txt3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>

      </div>
    </div>
  </div>

  <div class="py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h1><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
echo $txt4_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
echo $txt4_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
echo $txt4_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
echo $txt4_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
echo $txt4_5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4_5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b><?php
echo $titulo4_6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4_6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b> </p>
              <p class="mb-0"><?php
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

  <div class="py-5" >
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h1><?php
echo $titulo5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead mb-4"><?php
echo $txt5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>
      </div>

      <div class="row d-flex justify-content-between">
        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?php
echo $titulo5_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
          </h4>
          <p><?php
echo $txt5_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?php
echo $titulo5_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
          </h4>
          <p><?php
echo $txt5_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b><?php
echo $titulo5_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
          </h4>
          <p><?php
echo $txt5_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt5_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>
      </div>

    </div>
  </div>

  <div class="py-5 text-center border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-9 p-3">
          <h1 class="mb-0"><?php
echo $titulo6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
          <a class="btn btn-primary btn-lg" href="#"><?php
echo $button1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a>
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