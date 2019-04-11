<?php 
require_once"conexao.php";
require_once"Classes/CriarSessionCliente.php";
$c1 = new CriarSessionCliente();
$c1->consultarSession();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>EZY 3D - Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <!-- Produtos -->
  <link href="css/product.css" rel="stylesheet">
  <!-- Main CSS -->
  <link rel="stylesheet" href="css/menu.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
  <!-- Jquery -->
  <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
  <!-- Bootstrap JS -->
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <!-- Main -->
  <script src="js/mainHome.js"></script>
  <style>
  body{
    background-color: black;
  }
  main{
    background-color: #fff;
  }
  .texto-banner{
    width: 30%;
    top: 10%;
  }
  @media screen and (max-width: 1650px) {
    .texto-banner{
      width: 50%;
      top: 7%;
    }
  }
  @media screen and (max-width: 1450px) {
    .texto-banner{
      width: 60%;
      top: 5%;
    }
  }
  @media screen and (max-width: 967px) {
    .texto-banner{
      width: 70%;
      top: 0;
      font-size: 14px;
    }
    .texto-banner h2{
      font-size: 20px;
    }
  }

</style>

<!-- Start of ezy3d Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7372f897-4674-494d-ade4-110122e4279b"> </script>
<!-- End of ezy3d Zendesk Widget script -->
</head>
<body>

  <nav class="fixed-top d-lg-block d-md-block d-none" style="background-color: #212121;">
    <div id="desktop">
      <a class="ml-5 mt-2 float-left">
        <img src="img/logo/logo_orange.svg" height="35px">
      </a>
      <a class="opcoes mr-4 mt-2 float-right btn" id="btn-lang">Portugues <i class="fas fa-sort-down"></i></a>
      <?php
      if (!isset($_SESSION['banana'])) {?>
        <a class="opcoes mr-3 mt-2 float-right btn btn-outline-warning" id="btn-cadastrar" onclick="window.open('http://localhost/tccezy3d/site/form_cadastrar.php', '_blank')">Cadastrar</a>
        <a class="opcoes mr-3 mt-2 float-right btn" id="btn-logar" data-toggle="modal" data-target="#modalLogin">Logar</a>
      <?php } 
      else {?>
        <a class="mr-5 mt-3 float-right" id="btn-conta"><i class="fas fa-user-circle"></i> <?= $c1->getCliente()?> <i class="fas fa-sort-down"></i></a>
      <?php }?>
      <div class="container text-center py-3">
        <a class="mr-5" id="btn-impressoras3d">Impressoras 3D</a>
        <a class="mr-5" id="btn-acessorios">Acessórios</a>
        <a class="mr-5" id="btn-aplicacoes">Aplicações</a>
        <a id="btn-contato">Contato</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <i class="fas fa-caret-down" id="down"></i>
    <div id="impressoras3d">
      <div class="row pr-5 pl-5">
        <div class="col-6 pt-3" style="height: 200px">
          <h6 class="text-left definicao">MSLA LCD - UV</h6>
          <div class="w-100" style="border-bottom: solid 1px black;"></div>
          <label class="mt-3" id="item1">E1260T<div id="borda1"></div></label><br>
          <label class="mt-3" id="item2">Phylos<div id="borda2"></div></label><br>
        </div>
        <div class="col-6 pt-3" style="height: 200px">
          <h6 class="text-left definicao">FDM - Filamento</h6>
          <div class="w-100 bg-dark" style="height: 1px;"></div>
          <label class="mt-3" id="item3">Core E3<div id="borda3"></div></label><br>
        </div>
      </div>
    </div>
    <div id="acessorios">
      <div class="row pr-5 pl-5">
        <div class="col-12 pt-3" style="height: 200px">
          <h6 class="text-left definicao">Camara pos-cura</h6>
          <div class="w-100" style="border-bottom: solid 1px black;"></div>
          <label class="mt-3" id="item4">Ezy Cure<div id="borda4"></div></label><br>
        </div>
      </div>
    </div>
    <div id="aplicacoes">
      <div class="row pr-5 pl-5">
        <div class="col-12 pt-3" style="height: 200px">
          <h6 class="text-left definicao">Por setor</h6>
          <div class="w-100" style="border-bottom: solid 1px black;"></div>
          <label class="mt-3" id="item5">Odontologia<div id="borda5"></div></label><br>
          <label class="mt-3" id="item6">Joalheria<div id="borda6"></div></label><br>
          <label class="mt-3" id="item7">Manufatura<div id="borda7"></div></label><br>
          <label class="mt-3" id="item8">Educacao<div id="borda8"></div></label><br>
        </div>
      </div>
    </div>
    <?php
    if (isset($_SESSION['banana'])) {?>
      <div id="conta" class="pt-2 pb-2" style="width: 158px">
        <div >
          <a class="dropdown-item" href="perfil.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Perfil
          </a>
        </div>
        <hr class="mt-2 mb-2">
        <div >
          <a class="dropdown-item" href="logout.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Sair
          </a>
        </div>
      </div>
    <?php } ?>
    <div class="p-3" id="lang">
      <label class="item-lang">Portugues (Brasil)</label><br>
      <label class="item-lang">English</label><br>
      <label class="item-lang">Español</label>
    </div>
  </div>

  <!-- modal login -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <label class="col-form-label">E-mail:</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label class="col-form-label">Senha:</label>
              <input type="text" class="form-control" name="senha">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <!-- menu mobile -->
  <nav id="nav-mobile" class="navbar p-0 d-block d-md-none fixed-top bg-dark">
    <div class="container pt-2 pb-2">
      <div class="w-55px">
        <a id="btn-openmenu" class="py-2" href="#"><i class="fas fa-bars"></i></a>
        <a id="btn-closemenu" style="display: none;" class="py-2 w-55px" href="#"><i class="fas fa-times"></i></a>
      </div>

      <div class="text-center">
        <a class="py-2" href="#"><img src="img/logo/logo_orange.svg" height="28px" alt="EZY 3D"></a>
      </div>

      <div class="text-right w-55px">
        <a id="btn-conta-mobile" class="py-2" href="#"><i class="fas fa-user-circle"></i> <i class="fas fa-sort-down"></i></a>
      </div>
    </div>
  </nav>

  <main>
    <div id="carouselExampleIndicators" class="carousel slide bg-danger" data-ride="carousel" style="margin-top: 47px;min-height: 300px">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/banner/banner1.jpg" style="min-height: 300px">
          <div class="text-left carousel-caption d-md-block texto-banner">
            <h2>3D Systems sob demanda: Criamos suas peças personalizadas</h2>
            <p>Obtenha sua cotação online instantânea ou fale com os nossos engenheiros de aplicação sobre nossa oferta de serviço completo de prototipagem a serviços de fabricação de produção.</p>
            <button class="btn btn-warning">Comecar</button>
            <button class="btn btn-warning">Comecar</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/banner2.jpg" style="min-height: 300px">
          <div class="text-left carousel-caption d-md-block texto-banner">
            <h2>3D Systems sob demanda: Criamos suas peças personalizadas</h2>
            <p>Obtenha sua cotação online instantânea ou fale com os nossos engenheiros de aplicação sobre nossa oferta de serviço completo de prototipagem a serviços de fabricação de produção.</p>
            <button class="btn btn-warning">Comecar</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/banner3.jpg" style="min-height: 300px">
          <div class="text-left carousel-caption d-md-block texto-banner">
            <h2>3D Systems sob demanda: Criamos suas peças personalizadas</h2>
            <p>Obtenha sua cotação online instantânea ou fale com os nossos engenheiros de aplicação sobre nossa oferta de serviço completo de prototipagem a serviços de fabricação de produção.</p>
            <button class="btn btn-warning">Comecar</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>




    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Phylos</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">E1260T</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Core E3</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
      <div class="bg-danger mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Ezy Cure</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
    </div>

    <footer class="bg-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <img src="img/logo/logo_orange.svg" height="35px">
            <small class="d-block mt-3 text-muted">&copy; 2017-2019</small>
          </div>
          <div class="col-6 col-md">
            <h5>Impressoras</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">E1260T</a></li>
              <li><a class="text-muted" href="#">Phylos</a></li>
              <li><a class="text-muted" href="#">Core E3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Acessórios</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Ezy Cure</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Aplicações</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Odontologia</a></li>
              <li><a class="text-muted" href="#">Joalheria</a></li>
              <li><a class="text-muted" href="#">Manufatura</a></li>
              <li><a class="text-muted" href="#">Educação</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Redes Sociais</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Facebook</a></li>
              <li><a class="text-muted" href="#">Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="bg-light w-100" style="height: 50px; border-top: solid 1px rgba(0,0,0,.1)"></div>
  </main>
</body>
</html>