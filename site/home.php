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
  <title>EZY 3D - Home</title>
</head>
<body id="page-top">
 <?php
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    $pagina = "home";
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    $pagina = "home";
    include "vendor/menu_rodape/menu.php";
}
?>
 <main class="pt-64px">
    <div class="text-center">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" id="carousel">
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img class="d-block w-100 img-fluid" src="vendor/img/banner/banner1.jpg">
                  <div class="carousel-caption d-none d-sm-block">
                    <h5 class="m-0">Carousel</h5>
                    <p>with controls</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid w-100" src="vendor/img/banner/banner1.jpg">
                  <div class="carousel-caption d-none d-sm-block">
                    <h5 class="m-0">Carousel</h5>
                    <p>with controls</p>
                  </div>
                </div>
                <div class="carousel-item active">
                  <img class="d-block w-100 img-fluid" src="vendor/img/banner/banner1.jpg">
                  <div class="carousel-caption d-none d-sm-block">
                    <h5 class="m-0">Carousel</h5>
                    <p>with controls</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row px-2">
          <div class="col mx-2 bg-dark pt-5 px-5 mb-3">
            <h2 class="mt-3">
              <b><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
            </h2>
            <p class="lead mb-5"><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}

?></p>
            <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="">
          </div>
          <div class="col mx-2 pt-5 px-5 mb-3 bg-light">
            <h2 class="mt-3">
            <b><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></b>
            </h2>
            <p class="lead mb-5"><?php
echo $txt2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}

?></p>
            <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="">
          </div>
        </div>
        <div class="row px-2 border-bottom">
          <div class="col mx-2 pt-5 px-5 mb-3 bg-light">
            <h2 class="mt-3"><b><?php
echo $titulo3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}

?></b></h2>
            <p class="lead mb-5"><?=$txt3?></p>
            <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="">
          </div>
          <div class="col mx-2 pt-5 px-5 mb-3 bg-info" style="">
            <h2 class="mt-3"><b><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}

?></b></h2>
            <p class="lead mb-5"><?php
echo $txt4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}

?></p>
            <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="">
          </div>
        </div>
      </div>
    </div>

  <div class="py-2 pt-3 text-center">
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

  <div class="py-4 text-center bg-light">
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