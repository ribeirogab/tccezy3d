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

    <div class="py-5 text-center text-md-right"
      style="background-image: linear-gradient(to bottom, #333, #fa5f32 );">
      <div class="container">
        <div class="row">
          <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
            <h3 class="display-3"><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h3>
            <p class="mb-3 lead"><?php
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

    <div class="py-5 text-center bg-white text-black">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-8">
            <i class="fa fa-stop-circle-o fa-4x mx-3 d-inline text-muted"></i>
            <i class="fa fa-circle fa-4x mx-3 d-inline text-muted"></i>
            <i class="fa fa-stop-circle fa-4x mx-3 d-inline text-muted"></i>
            <p class="mt-3 lead"><?php
echo $txt1_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-6 p-3 d-flex align-items-center">
            <h2><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h2>
          </div>

          <div class="col-md-6 col-6 p-3 text-center">
            <div class="row">

              <div class="col-md-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>
              <div class="col-md-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>
              <div class="col-4 p-2">
                <img class="img-fluid d-block mb-2 mx-auto rounded-circle" src="vendor/img/img-placeholder-1.svg"
                  width="100">
                <p class="mb-0 lead"> <a href="#"><?php
echo $titulo2_6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 bg-white text-black">
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
            <h1 class="mb-0"><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
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

    <div class="py-3 text-center bg-info">
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