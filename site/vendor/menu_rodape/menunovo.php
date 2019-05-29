<?php
if ($visivelm != true) {
    header("Location: ../../home.php");
}

require_once "Classes/TrocarIdioma.php";
if (!isset($_GET['lang'])) {
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    } else {
        $_SESSION['lang'] = 'pt';
        $lang = $_SESSION['lang'];
    }
} else {
    $_SESSION['lang'] = $_GET['lang'];
    $lang = $_SESSION['lang'];
}

$idioma = new TrocarIdioma($lang);

$langPag = $idioma->langPag($pagina);
foreach ($langPag as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}

$langMenu = $idioma->langMenu("menu");
foreach ($langMenu as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}

$langRodape = $idioma->langRodape("rodape");
foreach ($langRodape as $item) {
    $val = $item['apelido'];
    $$val = $item[$lang];
}
?>
<noscript><meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
<link rel="stylesheet" href="vendor/css/menu.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
<!-- Fontawesome -->
<link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
<!-- Jquery -->
<script type="text/javascript" src="vendor/jquery/jquery.js"></script>
<!-- MASK -->
<script type="text/javascript" src="vendor/jquery/jquery.mask.js"></script>
<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.js"></script>

<!-- Main JS -->
<script src="vendor/js/menu.js"></script>

<style>
#quadro {
  margin: 0 auto;
}
#quadro:hover {
  -moz-box-shadow: 0px 0px 5px 0px #222;
  -webkit-box-shadow: 0px 0px 5px 0px #222;
  box-shadow: 0px 0px 5px 0px #222;
}
#quadro-info {
  background-color: #f38919;
  width: 100%;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}
#quadro-btns {
  background-color: #f9420c;
  width: 100%;
  margin: 0 auto;
}
#btn-orcamento {
  border-right: solid 0.5px rgba(0, 0, 0, 0.2);
}
#btn-saibamias {
  border-left: solid 0.5px rgba(0, 0, 0, 0.2);
}
#btn-orcamento,
#btn-saibamais {
  cursor: pointer;
}
#btn-orcamento:hover,
#btn-saibamais:hover {
  opacity: 0.5;
}
.product-info {
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.8);
}
.btn-info-product {
  position: relative;
  z-index: 5;
  cursor: pointer;
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
.zoom-menu img {
  transition: all 0.2s linear;
  overflow: hidden;
}
.zoom-menu:hover img {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}
nav {
  width: 100%;
  color: #fff;
  border-bottom: solid 1px rgba(0, 0, 0, 0);
  z-index: 10;
}
nav li a {
  display: inline;
}
.borda-topo {
  border-top: solid 5px rgba(0, 0, 0, 0);
}
.borda-item {
  border-top: solid 5px rgba(0, 0, 0, 0);
  color: #fff;
}
.borda-item:hover {
  border-top: solid 5px orange;
}
.menu-item-right {
  color: #fff;
}
#menu-toggle {
  opacity: 0;
  top: 73px;
  width: 100%;
  background-color: #fff;
  display: none;
  z-index: 10;
}
#toggle_1,
#toggle_2,
#toggle_3 {
  display: none;
}
.nome-toggle {
  transition: 0.5s;
  color: #333;
  cursor: pointer;
  display: block;
  text-decoration: none !important;
  font-weight: 500;
  font-size: 15px;
}
.nome-toggle:hover {
  transition: 0.5s;
  color: orange;
}
.pb-50px {
  padding-bottom: 40px;
}
#foto-printer1 {
  height: 250px;
  width: 166px;
  margin: 0 auto;
}
</style>

  <nav class="navbar navbar-expand-lg p-0 fixed-top d-none d-lg-block">
    <div class="container">
      <a class="navbar-brand borda-topo text-white menu-item" href="#">
        <img id="logo" src="vendor/img/logo/logo_white.svg" height="40px">
      </a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a id="item_1" class="nav-link p-3 borda-item menu-item" href="#"><?=$item1?></a>
        </li>
        <li class="nav-item">
          <a id="item_2" class="nav-link p-3 borda-item menu-item" href="#"><?=$item2?></a>
        </li>
        <li class="nav-item">
          <a id="item_3" class="nav-link p-3 borda-item menu-item" href="#">Aplicações</a>
        </li>
        <li class="nav-item">
          <a id="item_4" class="nav-link p-3 borda-item menu-item" href="#">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-right">
        <li class="nav-item">
          <a class="nav-link p-3 borda-top menu-item-right" href="#">Logar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 borda-top menu-item-right" href="#"><div class="bg-primary text-white p-2">Cadastrar</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3 borda-top menu-item-right" href="#">Português <i class="fas fa-caret-down"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="menu-toggle" class="fixed-top">
    <div  class="container h-100 w-100 pt-4 pb-50px">

      <div id="toggle_1">
      <div class="row">
        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle"><?=$printer1?></a>
        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle"><?=$printer2?></a>
        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle"><?=$printer3?></a>
        </div>
      </div>
      </div>


       <div id="toggle_2">
       <div class="row">
        <div class="col-4 text-center bg-dark">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle"><?=$acessorio1?></a>
        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">

          </div>

        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">

          </div>

        </div>
      </div>
      </div>


       <div id="toggle_3">
       <div class="row">
        <div class="col-4 text-center bg-danger">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle">E1260T</a>
        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle">E1260T</a>
        </div>

        <div class="col-4 text-center">
          <div id="foto-printer1" class="zoom-menu">
           <img src="vendor/img/menu/e1260tmenu.png" height="100%">
          </div>
          <a href="#" class="mt-2 nome-toggle">E1260T</a>
        </div>
      </div>
      </div>

      </div>
    </div>

  </div>