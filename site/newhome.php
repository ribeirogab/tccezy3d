<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Product example · Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="docs/bootstrap.css">
  <!-- Bootstrap core CSS -->
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Fontawesome -->
  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="font/css/all.css">
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.js"></script>
  <link href="docs/product.css" rel="stylesheet">
  <style>
  .w-55px{
    width: 55px;
  }
  html{
    font-size: 14px;
  }
  nav #desktop a{
    color: rgba(255,255,255,.6);
    cursor: pointer;
    transition: 0.3s;
  }
  nav #desktop a:hover{
    color: #fff;
    transition: 0.3s;
  }

  #conta{
    width: 250px;
    height: 300px;
    background-color: red;
    right: 25%;
    position: absolute;
    z-index: 1;
    display: none;
  }
  #lang{
    width: 250px;
    height: 300px;
    background-color: blue;
    opacity: 0.3;
    right: 20%;
    position: absolute;
    z-index: 1;
    display: none;
  }
  @media screen and (max-width: 1500px) {
    #conta{
      right: 15%;
    }
    #lang{
      right: 10%;
    }
  }
  @media screen and (max-width: 1150px) {
    #conta{
      right: 3%;
    }
    #lang{
      right: 0;
    }
  }
</style>

<script>
  $(document).ready(function(){
    $("#btn-conta").click(function(){
      $("#conta").toggle();
    });
    $("#btn-conta-mobile").click(function(){
      $("#conta").toggle();
    });
    $("#btn-lang").click(function(){
      $("#conta").hide();
    });
    $("#btn-lang").click(function(){
      $("#lang").toggle();
    });
    $("#btn-conta").click(function(){
      $("#lang").hide();
    });
    $("#btn-conta-mobile").click(function(){
      $("#lang").hide();
    });
    $("main").click(function(){
      $("#lang").hide();
      $("#conta").hide();
    });

    $("#btn-openmenu").click(function(){
      $("#btn-openmenu").stop().hide();
      $("#btn-closemenu").stop().show();
    });
    $("#btn-closemenu").click(function(){
      $("#btn-openmenu").stop().show();
      $("#btn-closemenu").stop().hide();
    });
  });
</script>
</head>
<body>


  <nav class="fixed-top d-lg-block d-md-block d-none" style="background-color: #212121;">
    <div class="container" id="desktop">
      <a class="py-2 mr-5 float-left">
        <img src="img/logo/logo_orange.svg" height="35px">
      </a>
      <a class="py-3 mr-5 float-left">Impressoras 3D</a>
      <a class="py-3 mr-5 float-left">Acessórios</a>
      <a class="py-3 mr-5 float-left">Aplicações</a>
      <a class="py-3 mr-5 float-left">Contato</a>
      <a class="py-3 float-right" id="btn-lang"><i class="fas fa-globe"></i> PT <i class="fas fa-sort-down"></i></a>
      <a class="py-3 mr-5 float-right" id="btn-conta"><i class="fas fa-user-circle"></i> Conta <i class="fas fa-sort-down"></i></a>
    </div>
  </nav>
  <div class="container">
    <div id="conta">

    </div>
    <div id="lang">

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
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark" style="margin-top: 47px;">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Punny headline</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
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
      <div class="bg-warning mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Ezy Cure</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Odontologia</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Joalheria</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Manufatura</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Educação</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px;"></div>
      </div>
    </div>

    <footer class="bg-light">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
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
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="bg-light w-100" style="height: 50px; border-top: solid 1px rgba(0,0,0,.1)"></div>
    <script src="docs/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </main>
</body>
</html>