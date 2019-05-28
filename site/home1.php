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
<style>
.col-left{
background-image: linear-gradient(to left, #eee, #aaa);
}
.row-left{
background-image: linear-gradient(to bottom, rgba(255,255,255,0.1) 75%, rgba(0,0,0,.0) 25% );
}
@media only screen and (max-width: 991.5px){
  .row-left .col-descricao{
background-image: linear-gradient(to left, rgba(0,0,0,.2), rgba(0,0,0,.6));
margin-top: 20px;
}
  .row-right .col-descricao{
background-image: linear-gradient(to left, rgba(255,255,255,.2), rgba(255,255,255,.6));
margin-top: 20px;
}

.col-left, .col-right{
  margin-top: 15px;
}
}

.col-right{
background-image: linear-gradient(to left, #414141, #313131);
}
.row-right{
background-image: linear-gradient(to bottom, rgba(255,255,255,.03) 75%, rgba(0,0,0,.0) 25% );
}
#background{
  height: 100vh;
  position: relative;
}
#background video{
  position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
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
<main>


  <div id="background" class="py-5 text-center text-white"> <video autoplay="" loop="" muted="" plays-inline="" style="position: absolute; right: 0; top: 0; min-width:100%; z-index: -100;">
      <source src="https://static.pingendo.com/video-placeholder.mp4" type="video/mp4"> </video>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h1 class="mb-4 display-3">Video</h1>
          <p class="lead mb-5">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
          <a href="#" class="btn btn-lg btn-primary mx-1">Your call to action</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="position:relative; top: -75px;">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-6 p-0 d-none d-lg-block"><img src="vendor/img/home/f1.jpg" width="100%" alt=""></div>
          <div class="col-lg-6 py-5 px-4 bg-danger">
            <h4 class="">Heading 4 <span class="badge badge-pill badge-warning">!</span></h4>
            <p class="lead">Lead paragraph. A wonderful serenity has taken possession of my entire soul.</p><a class="btn btn-outline-light" href="#">Light</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-lg-6 p-0 d-none d-lg-block"><img src="vendor/img/home/f2.jpg" width="100%" alt=""></div>
          <div class="col-lg-6 py-5 px-4 bg-info">
            <h4 class="">Heading 4 <span class="badge badge-pill badge-warning">!</span></h4>
            <p class="lead">Lead paragraph. A wonderful serenity has taken possession of my entire soul.</p><a class="btn btn-outline-light" href="#">Light</a>
          </div>
        </div>
      </div>
    </div>
  </div>




<div class="container">
<h1>Impressoras 3D</h1>
    <div class="row">
        <div>

        </div>
    </div>
</div>

<div class="container my-5">
<h1>Acessórios</h1>
    <div class="row">
        <div>

        </div>
    </div>
</div>


  <div class="pt-0 pt-lg-5" style="background-image: linear-gradient( to top, #353535 50%, #eaeaea 50% );">
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-0 m-0 bg-danger"><img src="vendor/img/home/f3.jpg" width="100%" alt=""></div>
        <div class="col-md-6 px-4 py-5 m-0 text-center bg-primary">
          <div>
          </div>
          <h3 class="text-white">Heading 3</h3>
          <h1 class="mt-4 border-top-0 text-white">Heading 1</h1>
          <p class="lead mt-4 text-white">Lead paragraph. A wonderful serenity has taken possession of my entire soul.</p><a class="mt-4 btn btn-outline-light w-75" href="#">Outline</a>
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