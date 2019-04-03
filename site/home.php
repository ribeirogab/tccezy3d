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
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Produtos -->
  <link href="css/product.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="font/css/all.css">
  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.js"></script>
  <style>
  .w-55px{
    width: 55px;
  }
  html{
    font-size: 15px;
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
  #down{
    font-size: 21px;
    color: #f28918;
    position: fixed;
    z-index: 101;
    display: inline-block;
    left: 37%;
    transition: 1s;
    display: none;
  }
  #impressoras3d{
    width: 250px;
    height: 300px;
    border-top: solid 8px #f28918;
    background-color: #eee;
    left: 37%;
    position: fixed;
    z-index: 100;
    display: none
  }
  #acessorios{
    width: 250px;
    height: 300px;
    border-top: solid 8px #f28918;
    background-color: #eee;
    left: 44.7%;
    position: fixed;
    z-index: 100;
    display: none;
  }
  #aplicacoes{
    width: 250px;
    height: 300px;
    border-top: solid 8px #f28918;
    background-color: #eee;
    left: 51%;
    position: fixed;
    z-index: 100;
    display: none;
  }
  @media screen and (max-width: 1700px) {
    #impressoras3d, #down{
      left: 35.5%;
    }
    #acessorios{
      left: 44%;
    }
    #aplicacoes{
      left: 51%;
    }
  }
  @media screen and (max-width: 1500px) {
    #impressoras3d, #down{
      left: 32%;
    }
    #acessorios{
      left: 41.5%;
    }
    #aplicacoes{
      left: 49.7%;
    }
  }
  @media screen and (max-width: 1400px) {
    #impressoras3d, #down{
      left: 29%;
    }
    #acessorios{
      left: 39.5%;
    }
    #aplicacoes{
      left: 48%;
    }
  }
  @media screen and (max-width: 1300px) {
    #impressoras3d, #down{
      left: 26%;
    }
    #acessorios{
      left: 37%;
    }
    #aplicacoes{
      left: 46.5%;
    }
  }
  @media screen and (max-width: 1200px) {
    #impressoras3d, #down{
      left: 22%;
    }
    #acessorios{
      left: 33.5%;
    }
    #aplicacoes{
      left: 44%;
    }
  }
  @media screen and (max-width: 1100px) {
    #impressoras3d, #down{
      left: 15%;
    }
    #acessorios{
      left: 29%;
    }
    #aplicacoes{
      left: 41%;
    }
  }
  #conta{
    width: 250px;
    height: 300px;
    background-color: red;
    right: 25%;
    position: fixed;
    z-index: 100;
    display: none;
  }
  #lang{
    background-color: #494949;
    right: 1%;
    position: fixed;
    z-index: 100;
    display: none;
    font-size: 13px;
    color: #eee;
  }
  @media screen and (max-width: 1500px) {
    #conta{
      right: 15%;
    }
  }
  @media screen and (max-width: 1150px) {
    #conta{
      right: 3%;
    }
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
  .opcoes{
    font-size: 14px;
  }
  .item-lang{
    cursor: pointer;
  }
  .item-lang:hover{
    color: rgba(255,255,255,.6);
    transition: 0.3s;
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

    $("#btn-impressoras3d").hover(function(){
      $("#impressoras3d").stop().show('fast');
      $("#btn-impressoras3d").css({'color': '#fff', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().show('slow');
      let left = parseInt($('#impressoras3d').css('left')) + 60;
      $("#down").stop().css("left", left);
    });
    $("#btn-acessorios").hover(function(){
      $("#acessorios").stop().show('fast');
      $("#btn-acessorios").css({'color': '#fff', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#impressoras3d").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().show('fast');
      let left = parseInt($('#acessorios').css('left')) + 60;
      $("#down").stop().css("left", left);
    });
    $("#btn-aplicacoes").hover(function(){
      $("#aplicacoes").stop().show('fast');
      $("#btn-aplicacoes").css({'color': '#fff', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#down").stop().show('fast');
      let left = parseInt($('#aplicacoes').css('left')) + 60;
      $("#down").stop().css("left", left);
    });
    $("#btn-contato").hover(function(){
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().css({"display": "none", "left": "37%"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    });
    $("#btn-logar").hover(function(){
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().css({"display": "none", "left": "37%"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    });
    $("#btn-cadastrar").hover(function(){
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().css({"display": "none", "left": "37%"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    });
    $("#btn-lang").hover(function(){
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().css({"display": "none", "left": "37%"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    });
    $("main").hover(function(){
      $("#impressoras3d").stop().hide('fast');
      $("#acessorios").stop().hide('fast');
      $("#aplicacoes").stop().hide('fast');
      $("#down").stop().css({"display": "none", "left": "37%"});
      $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
      $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    });
  });
</script>
</head>
<body>

  <nav class="fixed-top d-lg-block d-md-block d-none" style="background-color: #212121;">
    <div id="desktop">
      <a class="ml-5 mt-2 float-left">
        <img src="img/logo/logo_orange.svg" height="35px">
      </a>
      <a class="opcoes mr-4 mt-2 float-right btn" id="btn-lang">Portugues <i class="fas fa-sort-down"></i></a>
      <a class="opcoes mr-3 mt-2 float-right btn btn-outline-warning" id="btn-cadastrar" onclick="window.location.href='form_cadastrar.php'">Cadastrar</a>
      <a class="opcoes mr-3 mt-2 float-right btn" id="btn-logar" data-toggle="modal" data-target="#modalLogin">Logar</a>
      <!-- <a class="mr-5 mt-3 float-right" id="btn-conta"><i class="fas fa-user-circle"></i> Conta <i class="fas fa-sort-down"></i></a> -->
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

    </div>
    <div id="acessorios">

    </div>
    <div id="aplicacoes">

    </div>
    <div id="conta">

    </div>
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
          <form action="" method="post">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">E-mail:</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Senha:</label>
              <input type="text" class="form-control" name="senha">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Entrar</button>
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
  </main>
</body>
</html>