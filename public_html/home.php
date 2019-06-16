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
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">

</head>
<style>
  .col-left {
    background-image: linear-gradient(to left, #eee, #aaa);
  }

  .row-left {
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 75%, rgba(0, 0, 0, .0) 25%);
  }

  @media only screen and (max-width: 991.5px) {
    .row-left .col-descricao {
      background-image: linear-gradient(to left, rgba(0, 0, 0, .2), rgba(0, 0, 0, .6));
      margin-top: 20px;
    }

    .row-right .col-descricao {
      background-image: linear-gradient(to left, rgba(255, 255, 255, .2), rgba(255, 255, 255, .6));
      margin-top: 20px;
    }

    .col-left,
    .col-right {
      margin-top: 15px;
    }
  }

  .col-right {
    background-image: linear-gradient(to left, #414141, #313131);
  }

  .row-right {
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, .03) 75%, rgba(0, 0, 0, .0) 25%);
  }

  #background {
    height: 100vh;
    position: relative;
  }

  #background video {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #quadro {
    margin: 0 auto;
    cursor: pointer;
  }

  #quadro-info {
    background-color: #F38919;
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  #quadro-btns {
    background-color: #F9420C;
    width: 100%;
    margin: 0 auto;
  }

  #btn-orcamento {
    border-right: solid 0.5px rgba(0, 0, 0, .2);
  }

  #btn-saibamias {
    border-left: solid 0.5px rgba(0, 0, 0, .2);
  }

  #btn-orcamento,
  #btn-saibamais {
    cursor: pointer;
  }

  #btn-orcamento:hover,
  #btn-saibamais:hover {
    opacity: 0.5;
  }

  .btn-info-product {
    position: relative;
    z-index: 5;
    cursor: pointer;
    opacity: 0;
  }

  #btn-info-product:hover {
    color: blue;
  }

  .zoom img {
    transition: all 0.2s linear;
    overflow: hidden;
  }

  .zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }



  .slider {
    width: 100%;
    margin: 30px auto;
  }

  .slick-slide {
    margin: 0px 20px;
  }

  .slick-slide img {
    width: 100%;
  }

  .slick-prev:before,
  .slick-next:before {
    color: black;
  }

  #slider-acessorios {
    position: relative;
    left: -112%;
  }

  @media only screen and (max-width: 768px) {
    #slider-acessorios {
      position: relative;
      left: 0;
    }
  }

  #background {
    height: 100vh;
    position: relative;
    background-image: url(vendor/img/home/bg.jpg);
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .d3 {
    border-top: solid 3px;
    border-bottom: solid 3px;
    border-left: solid 3px;
    border-right: solid 3px;
    border-color: #fff #fff #f28918 #fff;
  }

  #cards {
    position: relative;
    top: -75px;
  }

  @media only screen and (max-width: 767px) {
    #cards {
      top: 0px;
    }
  }
</style>

<body id="page-top" class="bg-dark">
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

  <main>

    <div id="background" class="py-3 p-sm-4 py-md-5 text-center text-white">
      <img src="vendor/img/home/bg.jpg" style="position: absolute; right: 0; top: 0; min-width:100%; z-index: -100;">
      <div class="container py-5">
        <div class="row" style="margin-top:5%">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="mb-2 mb-md-4 display-3">
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
            <a href="printer_e1260t.php" class="mx-1 ezy-lg ezy-orange ezy-button">
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

    <div class="bg-white">

      <div id="cards" class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-6 p-0 d-none d-lg-block"><img src="vendor/img/home/f1.jpg" width="100%" height="100%"></div>
              <div class="col-lg-6 py-4 px-4 bg-info" style="min-height: 269px;">
                <h4 class="">
                  <?php
                  echo $titulo2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                  <span class="badge badge-pill badge-warning"><i class="fas fa-tooth"></i></span>
                </h4>
                <p class="lead">
                  <?php
                  echo $txt2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </p>
                <a class="ezy-lg ezy-orange ezy-button" href="app_odontologia.php">
                  <?php
                  echo $button2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-lg-6 p-0 d-none d-lg-block"><img src="vendor/img/home/f2.jpg" width="100%" height="100%"></div>
              <div class="col-lg-6 py-4 px-4 bg-info" style="min-height: 269px;">
                <h4>
                  <?php
                  echo $titulo3;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                  <span class="badge badge-pill badge-warning"><i class="fas fa-gem"></i></span>
                </h4>
                <p class="lead">
                  <?php
                  echo $txt3;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </p>
                <a class="ezy-lg ezy-orange ezy-button" href="app_joalheria.php">
                  <?php
                  echo $button3;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="container">
        <h1 class="mb-3 d3" style="color: #000">
          <?php
          echo $titulo4;
          if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
            echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
          }
          ?>
        </h1>
        <section class="center slider">
          <div class="">

            <div id="quadro" class="zoom" onclick="window.location.href='http://ezy3d.com.br/printer_e1260t.php'" style="background-image: linear-gradient(30deg, #eee, #bbb);">
              <i id="btn-info-product1" class="btn-info-product fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <img src="vendor/img/home/e1260t2.png" width="100%" alt="">
            </div>

            <div id="quadro-info" class="p-1 text-center">
              <h5>
                <b>
                  <?php
                  echo $produto1;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=produto1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </b>
              </h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/como_comprar.php'">
                  <?php
                  echo $btnproduto1_1;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
                <div id="btn-saibamais" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/printer_e1260t.php'">
                  <?php
                  echo $btnproduto1_2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto1_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>


          <div class="">

            <div id="quadro" class="zoom" onclick="window.location.href='http://ezy3d.com.br/printer_phylos.php'" style="background-image: linear-gradient(30deg, #eee, #bbb);">
              <i id="btn-info-product2" class="btn-info-product fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <img src="vendor/img/home/phylos1.png" width="100%" alt="">
            </div>

            <div id="quadro-info" class="p-1 text-center">
              <h5>
                <b>
                  <?php
                  echo $produto2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=produto2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </b>
              </h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/como_comprar.php'">
                  <?php
                  echo $btnproduto2_1;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
                <div id="btn-saibamais" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/printer_phylos.php'">
                  <?php
                  echo $btnproduto2_2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>


          <div class="">

            <div id="quadro" class="zoom" onclick="window.location.href='http://ezy3d.com.br/printer_coree3.php'" style="background-image: linear-gradient(30deg, #eee, #bbb);">
              <i id="btn-info-product3" class="btn-info-product fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <img src="vendor/img/home/coree3.png" width="100%" alt="">
            </div>
            <div id="quadro-info" class="p-1 text-center">
              <h5>
                <b>
                  <?php
                  echo $produto3;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=produto3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </b>
              </h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/como_comprar.php'">
                  <?php
                  echo $btnproduto3_1;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto3_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
                <div id="btn-saibamais" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/printer_coree3.php'">
                  <?php
                  echo $btnproduto3_2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto3_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>


      <div class="container pt-4 pb-5">
        <h1 class="d3" style="color: #000">
          <?php
          echo $titulo5;
          if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
            echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
          }
          ?>
        </h1>
        <section class="center slider">
          <div id="slider-acessorios">

            <div id="quadro" class="zoom" onclick="window.location.href='http://ezy3d.com.br/acessorio_ezycure.php'" style="background-image: linear-gradient(30deg, #eee, #bbb);">
              <i id="btn-info-product1" class="btn-info-product fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <img src="vendor/img/home/ezycure.png" width="100%" alt="">
            </div>

            <div id="quadro-info" class="p-1 text-center">
              <h5>
                <b>
                  <?php
                  echo $produto4;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=produto4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </b>
              </h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/como_comprar.php'">
                  <?php
                  echo $btnproduto4_1;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto4_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
                <div id="btn-saibamais" class="col-6 text-center py-2" onclick="window.location.href='http://ezy3d.com.br/acessorio_ezycure.php'">
                  <?php
                  echo $btnproduto4_2;
                  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=btnproduto4_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>
        </section>
      </div>



    </div>

    <div class="pt-0 pt-lg-5" style="background-image: linear-gradient( to top, #353535 50%, #eaeaea 50% );">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-0 m-0 bg-danger">
            <img src="vendor/img/home/f4.jpg" width="100%" height="100%">
          </div>
          <div class="col-md-6 px-4 py-5 m-0 text-center bg-primary">
            <div>
            </div>
            <h3 class="text-white">
              <?php
              echo $titulo6;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </h3>
            <p class="lead mt-4 text-white">
              <?php
              echo $txt6;
              if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
              }
              ?>
            </p>
            <i class="fas fa-chevron-down fa-2x text-white"></i>
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
            <a href="app_engenharia.php" class="location-link"><i class="d-block fas fa-cog fa-3x icone-app"></i></a>
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

    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->

  </main>
</body>

</html>