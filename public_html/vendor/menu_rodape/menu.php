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
<noscript>
  <meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
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

</style>

<nav class="navbar navbar-expand-lg p-0 fixed-top d-none d-lg-block">
  <div class="container">
    <a class="navbar-brand borda-topo text-white menu-item" href="home.php">
      <img id="logo" src="vendor/img/logo/logo_white.svg" height="40px">
    </a>
    <ul class="navbar-nav mr-auto">
      <li id="campo_1" class="nav-item ml-2 mr-3 campos-menu">
        <a id="item_1" class="nav-link hover-item menu-item" href="#"><?= $item1 ?></a>
      </li>
      <li id="campo_2" class="nav-item ml-2 mr-3 campos-menu">
        <a id="item_2" class="nav-link hover-item menu-item" href="#"><?= $item2 ?></a>
      </li>
      <li id="campo_3" class="nav-item ml-2 mr-3 campos-menu">
        <a id="item_3" class="nav-link hover-item menu-item" href="#"><?= $item3 ?></a>
      </li>
      <li id="campo_4" class="nav-item ml-2 mr-3 campos-menu">
        <a id="item_4" class="nav-link hover-item menu-item" href="contato.php"><?= $item4 ?></a>
      </li>
    </ul>
    <ul class="navbar-nav mr-right">
      <?php
      if (!isset($_SESSION['banana'])) { ?>
        <li class="nav-item">
          <a class="nav-link p-3 borda-top menu-item-right" id="btn-logar" data-toggle="modal" data-target="#modalLogin" href="#"><?= $logar ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 borda-top menu-item-right" href="form_cadastrar">
            <div id="btn-cadastrar" class="text-white p-2"><?= $cadastrar ?></div>
          </a>
        </li>
      <?php } else { ?>
        <li class="nav-item text-center">
          <a id="btn-conta" class="nav-link p-3 borda-top menu-item-right" href="#"><?= $nome ?> <i class="fas fa-caret-down"></i></a>
          <i id="seta-conta" class="fas fa-caret-up"></i>
        </li>
      <?php } ?>
      <li class="nav-item text-center">
        <a id="btn-lang" class="nav-link p-3 borda-top menu-item-right"><?= $idiomas ?> <i class="fas fa-caret-down"></i></a>
        <i id="seta-lang" class="fas fa-caret-up"></i>
      </li>
    </ul>
  </div>
</nav>
<div id="menu-toggle" class="fixed-top">

  <div class="container h-100 w-100">

    <div id="toggle_1">
      <div class="row pt-4 pb-50px">
        <div class="col-4 text-center">
          <a href="printer_e1260t.php" class="location-link">
            <div id="div-printer1" class="zoom-menu">
          </a>
          <img class="fotos-printers" id="foto-printer1" src="vendor/img/menu/e1260tmenu.png" height="100%">
        </div>
        <a href="printer_e1260t.php" id="nome-printer1" class="mt-2 nomes-printers"><?= $printer1 ?></a>
      </div>

      <div class="col-4 text-center">
        <a href="printer_phylos.php" class="location-link">
          <div id="div-printer2" class="zoom-menu">
        </a>
        <img class="fotos-printers" id="foto-printer2" src="vendor/img/menu/phylosmenu.png" height="100%">
      </div>
      <a href="printer_phylos.php" id="nome-printer2" class="mt-2 nomes-printers"><?= $printer2 ?></a>
    </div>

    <div class="col-4 text-center">
      <a href="printer_coree3.php" class="location-link">
        <div id="div-printer3" class="zoom-menu">
      </a>
      <img class="fotos-printers" id="foto-printer3" src="vendor/img/menu/coree3menu.png" height="100%">
    </div>
    <a href="printer_coree3.php" id="nome-printer3" class="mt-2 nomes-printers"><?= $printer3 ?></a>
  </div>
</div>
</div>

</div>

<div class="container h-100 w-100 pr-0 mr-0">

  <div id="toggle_2">
    <div class="row">
      <div id="menu-acessorios" class="col-3 div-acessorios pt-4 pb-50px pr-5" style="border-right: solid 1px rgba(0,0,0,.1);color:black">
        <div id="acessorios_1" class="menu1-acessorios py-1 px-2">
          <span>Câmara pós-cura</span><i id="seta-acessorios_1" class="fas fa-chevron-right seta-acessorios float-right"></i>
        </div>
      </div>

      <div id="lista-acessorios" class="col-3 div-acessorios pt-4 pb-50px" style="color: black">

        <div id="opcoes-acessorios_1" class="opcoes-acessorios">
          <a href="acessorio_ezycure.php" class="location-link">
            <div class="py-1 px-2 menu2-acessorios">
              <span>EzyCure</span>
            </div>
          </a>
        </div>

      </div>

      <div id="fotos-acessorios" class="div-acessorios text-center col-6">
        <div id="foto-acessorios_1" class="w-100 h-100 todas-fotos-aplicacoes">
          <img src="vendor/img/menu/ezycure.jpg" width="100%" height="100%">
        </div>
      </div>

    </div>
  </div>

</div>


<div class="container h-100 w-100 pr-0 mr-0">

  <div id="toggle_3">
    <div class="row">
      <div id="menu-aplicacoes" class="col-3 div-aplicacoes pt-4 pb-50px pr-5" style="border-right: solid 1px rgba(0,0,0,.1);color:black">
        <a href="app_odontologia.php">
          <div id="aplicacoes_1" class="menu1-aplicacoes py-1 px-2">
            <span>Odontologia</span><i id="seta-aplicacoes_1" class="fas fa-chevron-right seta-aplicacoes float-right"></i>
          </div>
        </a>
        <a href="app_joalheria.php">
          <div id="aplicacoes_2" class="menu1-aplicacoes py-1 px-2">
            <span>Joalheria</span><i id="seta-aplicacoes_2" class="fas fa-chevron-right seta-aplicacoes float-right"></i>
          </div>
        </a>
        <a href="app_entretenimento.php">
          <div id="aplicacoes_3" class="menu1-aplicacoes py-1 px-2">
            <span>Entretenimento</span><i id="seta-aplicacoes_3" class="fas fa-chevron-right seta-aplicacoes float-right"></i>
          </div>
        </a>
        <a href="app_engenharia.php">
          <div id="aplicacoes_4" class="menu1-aplicacoes py-1 px-2">
            <span>Engenharia</span><i id="seta-aplicacoes_4" class="fas fa-chevron-right seta-aplicacoes float-right"></i>
          </div>
        </a>
      </div>


      <div id="lista-aplicacoes" class="col-3 div-aplicacoes pt-4 pb-50px" style="color: black">

        <div id="opcoes-aplicacoes_1" class="opcoes-aplicacoes">
          <a href="app_odontologia.php">
            <div class="py-1 px-2 menu2-aplicacoes">
              <span>Odontologia</span>
            </div>
          </a>
        </div>

        <div id="opcoes-aplicacoes_2" class="opcoes-aplicacoes">
          <a href="app_joalheria.php">
            <div class="py-1 px-2 menu2-aplicacoes">
              <span>Joalheria</span>
            </div>
          </a>
        </div>

        <div id="opcoes-aplicacoes_3" class="opcoes-aplicacoes">
          <a href="app_entretenimento.php">
            <div class="py-1 px-2 menu2-aplicacoes">
              <span>Entretenimento</span>
            </div>
          </a>
        </div>

        <div id="opcoes-aplicacoes_4" class="opcoes-aplicacoes">
          <a href="app_engenharia.php">
            <div class="py-1 px-2 menu2-aplicacoes">
              <span>Engenharia</span>
            </div>
          </a>
        </div>
      </div>

      <div id="fotos-aplicacoes" class="div-aplicacoes text-center col-6">
        <div id="foto-aplicacoes_1" class="w-100 h-100 todas-fotos-aplicacoes">
          <img src="vendor/img/menu/odontologia.jpg" width="100%" height="100%">
        </div>
        <div id="foto-aplicacoes_2" class="w-100 h-100 todas-fotos-aplicacoes">
          <img src="vendor/img/menu/joalheria.jpg" width="100%" height="100%">
        </div>
        <div id="foto-aplicacoes_3" class="w-100 h-100 todas-fotos-aplicacoes ">
          <img src="vendor/img/menu/entretenimento.jpg" width="100%" height="100%">
        </div>
        <div id="foto-aplicacoes_4" class="w-100 h-100 todas-fotos-aplicacoes ">
          <img src="vendor/img/menu/engenharia.jpg" width="100%" height="100%">
        </div>
      </div>
    </div>
  </div>

</div>
</div>

</div>

<div id="lang" class="p-3">
  <form id='formEn' action='<?= $pagina ?>.php' method='get'>
    <input type='hidden' name='lang' value='en'>
    <a href='#' class="item-lang" onClick='document.getElementById("formEn").submit();'>English</a>
  </form>
  <form id='formEs' action='<?= $pagina ?>.php' method='get'>
    <input type='hidden' name='lang' value='es'>
    <a href='#' class="item-lang" onClick='document.getElementById("formEs").submit();'>Español</a>
  </form>
  <form id='formPt' action='<?= $pagina ?>.php' method='get'>
    <input type='hidden' name='lang' value='pt'>
    <a href='#' class="item-lang" onClick='document.getElementById("formPt").submit();'>Português (Brasil)</a>
  </form>
</div>

<?php
if (isset($_SESSION['banana'])) { ?>
  <div id="conta" class="pt-2 pb-2" style="width: 158px">
    <div>
      <a class="dropdown-item" href="perfil_cliente.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        <?= $perfil ?>
      </a>
    </div>
    <hr class="mt-2 mb-2">
    <div>
      <a class="dropdown-item" href="controle/logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        <?= $sair ?>
      </a>
    </div>
  </div>
<?php } ?>


<!-- MENU MOBILE -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-lg-none">
  <a class="navbar-brand" href="home.php"><img id="logo" src="vendor/img/logo/logo_orange.svg" height="35px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $item1 ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="printer_e1260t"><?= $printer1 ?></a>
          <a class="dropdown-item" href="printer_phylos"><?= $printer2 ?></a>
          <a class="dropdown-item" href="printer_coree3"><?= $printer3 ?></a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $item2 ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <h6 class="ml-2">Camâra pós-cura</h6>
          <a class="dropdown-item" href="acessorio_ezycure.php">EzyCure</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $item3 ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="app_odontologia">Odontologia</a>
          <hr class="mt-1 mb-1">
          <a class="dropdown-item" href="app_joalheria">Joalheria</a>
          <hr class="mt-1 mb-1">
          <a class="dropdown-item" href="app_engenharia">Engenharia</a>
          <hr class="mt-1 mb-1">
          <a class="dropdown-item" href="app_entretenimento">Entretenimento</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php"><?= $item4 ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="btn-logar" data-toggle="modal" data-target="#modalLogin" href="#"><?= $logar ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_cadastrar" style="color: orange;"><?= $cadastrar ?></a>
      </li>

      <?php
      if (isset($_SESSION['banana'])) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $nome ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="perfil_cliente.php"><?= $perfil ?></a>
            <a class="dropdown-item" href="controle/logout.php"><?= $sair ?></a>
          </div>
        </li>
      <?php } ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $idiomas ?>
        </a>
        <div class="dropdown-menu p-2" aria-labelledby="navbarDropdownMenuLink">
          <form id='formEn' action='<?= $pagina ?>.php' method='get'>
            <input type='hidden' name='lang' value='en'>
            <a href='#' class="item-lang" onClick='document.getElementById("formEn").submit();'>English</a>
          </form>
          <form id='formEs' action='<?= $pagina ?>.php' method='get'>
            <input type='hidden' name='lang' value='es'>
            <a href='#' class="item-lang" onClick='document.getElementById("formEs").submit();'>Español</a>
          </form>
          <form id='formPt' action='<?= $pagina ?>.php' method='get'>
            <input type='hidden' name='lang' value='pt'>
            <a href='#' class="item-lang" onClick='document.getElementById("formPt").submit();'>Português (Brasil)</a>
          </form>
      </li>
    </ul>
  </div>
</nav>




<!-- modal login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="vendor/images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--=================================s==============================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css/cadastro_util.css">
        <link rel="stylesheet" type="text/css" href="vendor/css/logar_main.css">
        <!--===============================================================================================-->

        <div class="wrap-login100" id="formLogar">
          <form id="form-modal-login" class="login100-form validate-form" action="controle/cliente.php" method="post">
            <input type="hidden" name="tipo" value="login">
            <span class="login100-form-title mt-0 pb-3">
              <img src="vendor/img/logo/logo_orange.svg" width="80px">
            </span>

            <div class="wrap-input100 validate-input">
              <input id="focus-email" class="input100 inputLogin" type="text" name="email_login">
              <span class="focus-input100" data-placeholder="<?= $loginmodal_email ?>"></span>
            </div>

            <div class="wrap-input100 validate-input mt-4">
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
              <input class="input100 inputLogin" type="password" name="senha_login">
              <span class="focus-input100" data-placeholder="<?= $loginmodal_senha ?>"></span>
            </div>
            <div id="loginIncorreto" class="w-100 bg-danger p-2 mt-3" style="display: none">
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="col-9">
                  <span><?= $loginmodal_erro1 ?></span>
                </div>
                <div class="col-2 text-right">
                  <i id="btnClose-loginIncorreto" class="fas fa-times" style="font-size: 12px;cursor: pointer;"></i>
                </div>
              </div>
            </div>

            <div id="infoIncorreta" class="w-100 bg-warning p-2 mt-3" style="display: none">
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="col-9">
                  <span><?= $loginmodal_erro2 ?></span>
                </div>
                <div class="col-2 text-right">
                  <i id="btnClose-loginIncorreto" class="fas fa-times" style="font-size: 12px;cursor: pointer;"></i>
                </div>
              </div>
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <div id="btn-login" class="login100-form-btn buttonLogin">
                  <?= $loginmodal_logar ?>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--===============================================================================================-->
        <script src="vendor/js/logar_main.js"></script>
        <script>
          <?php
          if (isset($_GET["email"])) {
            $getEmail = $_GET["email"];
          } else {
            $getEmail = 'null';
          }

          ?>
          if ('<?= $getEmail ?>' != 'null') {
            let email = '<?= $getEmail ?>'
            $(document).ready(function() {
              $('#modalLogin').modal('show')
              $("input[name=email_login]").val(email)
              $("#focus-email").addClass('has-val');
            })
          }

          $("#btn-login").on("click", function() {
            let email = $("input[name=email_login]").val()
            let senha = $("input[name=senha_login]").val()
            $.ajax({
              // url: "http://www.ezy3d.com.br/controle/cliente.php",
              url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
              method: "POST",
              data: {
                "tipo": "verificarLogin",
                "email": email,
                "senha": senha
              },
              success: function(resposta) {
                let requisicao = 0;
                var json = $.parseJSON(resposta)
                let verificarLogin = json[0][0]

                if (email.length == 0 || senha.length == 0) {
                  $("#loginIncorreto").hide()
                  $("#infoIncorreta").fadeIn('slow')
                } else {
                  $("#infoIncorreta").hide()

                  if (verificarLogin != 1)
                    $("#loginIncorreto").fadeIn('slow')
                  else {
                    $("#loginIncorreto").hide()
                    requisicao++
                  }

                  if (requisicao === 1) {
                    $("#form-modal-login").submit();
                  }
                }
              },
              error: function() {
                alert("Erro ao fazer a requisição")
              }
            });
          });

          $("#btnClose-loginIncorreto").click(function() {
            $("#loginIncorreto").hide()
          })
        </script>
        <!--===============================================================================================-->
      </div>

    </div>
  </div>
</div>