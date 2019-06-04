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
  <title>EZY 3D - E1260T</title>
</head>
<style>
#menu{
  background-color: #232323;
}
</style>
<body class="bg-dark">
<body id="page-top">
 <?php
$pagina = "printer_e1260t";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
<main>
  <div class="py-3" style="background-image: linear-gradient(-180deg, #333 17%, #db6f79 );">
    <div class="container pt-md-5">
      <div class="row">
        <div class="col-md-6 my-5 text-lg-left text-center align-self-center" style="">
          <h1 class="display-1"><?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead"><?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
          <div class="row mt-5">
            <div class="col-6 col-lg-3"> <a class="ezy-lg ezy-orange ezy-button" href="#"><?php
echo $button1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </div>
            <div class="col-6 col-lg-3"><a class="ezy-lg ezy-orange ezy-button" href="#"><?php
echo $button2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></a> </div>
          </div>
        </div>
        <div class="col-md-6 d-none d-md-block text-center"><img src="vendor/img/e1260t/e1260t2.png"></div>
      </div>
    </div>
  </div>
  <div class="pt-5 bg-white text-black" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-4 d-flex justify-content-center flex-column">
          <h1 class="mb-4"><?php
echo $titulo2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
          <p class="lead"><?php
echo $txt2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
          <div class="row my-3">
            <div class="col-3"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
            <div class="col-8 d-flex align-items-center">
              <p class="mb-0"><?php
echo $txt2_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-3 order-1 order-md-2"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
            <div class="col-8 d-flex align-items-center order-2 order-md-1">
              <p class="mb-0"><?php
echo $txt2_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-8 mx-auto d-flex justify-content-center flex-column">
        <img class="img-fluid d-block" src="vendor/img/e1260t/e1260t1.png" width="100%">
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light" style="">
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
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-3.svg"> </div>
        <div class="col-lg-3 col-md-1 p-3" style=""> <img class="img-fluid d-block shadow-lg" src="https://static.pingendo.com/img-placeholder-4.svg"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-white text-black" id="features" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="pb-4"><?php
echo $titulo4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h2>
        </div>
      </div>
      <div class="row">
        <div class="align-self-center text-md-right text-center col-lg-4 col-md-6">
          <h4 class="text-primary"><?php
echo $titulo_especificacao1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>

          <h4 class="text-primary"><?php
echo $titulo_especificacao2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>

          <h4 class="text-primary"><?php
echo $titulo_especificacao3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>

        <div class="my-3 col-md-4 d-none d-lg-block text-center"><img src="vendor/img/e1260t/e1260t4.png"></div>
        <div class="align-self-center text-md-left text-center col-lg-4 col-md-6">
          <h4 class="text-primary"><?php
echo $titulo_especificacao4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>

          <h4 class="text-primary"><?php
echo $titulo_especificacao5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>

          <h4 class="text-primary"><?php
echo $titulo_especificacao6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h4>
          <p class="mb-5"><?php
echo $txt_especificacao6;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center bg-info">
    <div class="container">
      <div class="row">
        <div class="align-items-center d-flex justify-content-center col-md-3 p-3 order-2 order-md-1"> <a class="btn btn-primary btn-lg" href="#"><?php
echo $button3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
          </a> </div>
        <div class="col-md-9 p-3 order-1 order-md-2">
          <h1 class="mb-0"><?php
echo $titulo5;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?></h1>
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