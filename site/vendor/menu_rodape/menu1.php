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

<script>

</script>
<!-- ------------------------------------------------------------------------------------ -->
<nav id="menu" class="navbar navbar-expand-lg navbar-dark p-1 bg-dark fixed-top">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <img src="vendor/img/logo/logo_orange.svg" height="40px" alt="">
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar5">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown" style="">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$item1?></a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
              <a class="dropdown-item" href="printer_e1260t"><?=$printer1?></a>
              <a class="dropdown-item" href="printer_phylos"><?=$printer2?></a>
              <a class="dropdown-item" href="printer_coree3"><?=$printer3?></a>
            </div>
          </li>
          <li class="nav-item dropdown" style="">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$item2?></a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
              <a class="dropdown-item" href="acessorio_ezycure"><?=$acessorio1?></a>
            </div>
          </li>
          <li class="nav-item dropdown" style="">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$item3?></a>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
              <a class="dropdown-item" href="#"><?=$aplicacao1?></a>
              <a class="dropdown-item" href="#"><?=$aplicacao2?></a>
              <a class="dropdown-item" href="#"><?=$aplicacao3?></a>
              <a class="dropdown-item" href="#"><?=$aplicacao4?></a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link text-white" href="#"><?=$item4?></a> </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <?php
if (!isset($_SESSION['banana'])) {?>
          <li class="nav-item"> <a class="nav-link text-white" id="btn-logar" data-toggle="modal" data-target="#modalLogin" href="#"><?=$logar?></a> </li>
          <li class="nav-item btn-outline-primary"> <a class="nav-link text-white" href="form_cadastrar"><?=$cadastrar?></a> </li>
          <?php } else {?>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="btn-conta" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?=$nome?></i></a>
            <div class="dropdown-menu d-lg-none">
              <a class="dropdown-item" href="#"><?=$perfil?></a>
              <a class="dropdown-item" href="#"><?=$sair?></a>
            </div>
          </li>
        <?php }?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" id="btn-lang" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$idiomas?></a>
            <div class="dropdown-menu d-lg-none" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
              <a class="dropdown-item" href="#">English</a>
              <a class="dropdown-item" href="#">Español</a>
              <a class="dropdown-item" href="#">Português (Brasil)</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
if (isset($_SESSION['banana'])) {?>
  <div id="conta" class="pt-2 pb-2" style="width: 158px">
    <div >
      <a class="dropdown-item" href="perfil_cliente.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        <?=$perfil?>
      </a>
    </div>
    <hr class="mt-2 mb-2">
    <div >
      <a class="dropdown-item" href="controle/logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        <?=$sair?>
      </a>
    </div>
  </div>
<?php }?>

<div class="p-3" id="lang">
  <form  id='formEn' action='<?=$pagina?>.php' method='get'>
    <input type='hidden' name='lang' value='en'>
    <a href='#' class="item-lang"  onClick='document.getElementById("formEn").submit();'>English</a>
  </form>
  <form id='formEs' action='<?=$pagina?>.php' method='get'>
    <input type='hidden' name='lang' value='es'>
    <a href='#' class="item-lang" onClick='document.getElementById("formEs").submit();'>Español</a>
  </form>
  <form id='formPt' action='<?=$pagina?>.php' method='get'>
    <input type='hidden' name='lang' value='pt'>
    <a href='#' class="item-lang" onClick='document.getElementById("formPt").submit();'>Português (Brasil)</a>
  </form>
</div>

</div>

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
        <link rel="icon" type="image/png" href="vendor/images/icons/favicon.ico"/>
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
              <span class="focus-input100" data-placeholder="<?=$loginmodal_email?>"></span>
            </div>

            <div class="wrap-input100 validate-input mt-4">
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
              <input class="input100 inputLogin" type="password" name="senha_login">
              <span class="focus-input100" data-placeholder="<?=$loginmodal_senha?>"></span>
            </div>
            <div id="loginIncorreto" class="w-100 bg-danger p-2 mt-3" style="display: none">
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="col-9">
                  <span><?=$loginmodal_erro1?></span>
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
                  <span><?=$loginmodal_erro2?></span>
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
                  <?=$loginmodal_logar?>
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
          if('<?=$getEmail?>' != 'null'){
            let email = '<?=$getEmail?>'
            $(document).ready(function() {
              $('#modalLogin').modal('show')
              $("input[name=email_login]").val(email)
              $("#focus-email").addClass('has-val');
            })
          }

          $("#btn-login").on("click", function(){
            let email = $("input[name=email_login]").val()
            let senha = $("input[name=senha_login]").val()
            $.ajax({
              url: "http://localhost/tccezy3d/site/controle/cliente.php",
              method: "POST",
              data: {"tipo": "verificarLogin", "email": email, "senha": senha},
              success: function(resposta){
                let requisicao = 0;
                var json = $.parseJSON(resposta)
                let verificarLogin = json[0][0]

                if(email.length == 0 || senha.length == 0){
                  $("#loginIncorreto").hide()
                  $("#infoIncorreta").fadeIn('slow')
                }
                else{
                  $("#infoIncorreta").hide()

                  if(verificarLogin != 1)
                    $("#loginIncorreto").fadeIn('slow')
                  else{
                    $("#loginIncorreto").hide()
                    requisicao++
                  }

                  if(requisicao === 1){
                    $("#form-modal-login").submit();
                  }
                }
              },
              error: function(){
                alert("Erro ao fazer a requisição")
              }
            });
          });

          $("#btnClose-loginIncorreto").click(function(){
            $("#loginIncorreto").hide()
          })

          // troca de lingua
          $("#btn-lang").click(function(){
            $("#lang").toggle();
            $("#conta").hide();
          });

          // conta
          $("#btn-conta").click(function(){
            $("#lang").hide();
            $("#conta").toggle();
          });
        </script>
        <!--===============================================================================================-->
      </div>

    </div>
  </div>
</div>