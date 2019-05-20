 <?php 
 if ($visivelm != true) 
  header("Location: ../../home.php");
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

<!-- ------------------------------------------------------------------------------------ -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar12" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar12">
      <div class="w-25">
        <a class="navbar-brand d-none d-md-block" href="home.php">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> BRAND</b>
        </a>
      </div>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Impressoras 3D</a>
          <div class="dropdown-menu" style="max-width: 140px">
            <a class="dropdown-item" href="printer_e1260t">E1260T</a>
            <a class="dropdown-item" href="printer_phylos">Phylos</a>
            <a class="dropdown-item" href="printer_coree3">Core E3</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Acessórios</a>
          <div class="dropdown-menu" style="max-width: 140px">
            <a class="dropdown-item" href="acessorio_ezycure.php">EzyCure</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Aplicações</a>
          <div class="dropdown-menu" style="max-width: 140px">
            <a class="dropdown-item" href="app_odontologia.php">Odontologia</a>
            <a class="dropdown-item" href="app_manufatura.php">Manufatura</a>
            <a class="dropdown-item" href="app_educacao.php">Educação</a>
            <a class="dropdown-item" href="app_joalheria.php">Joalheria</a>
          </div>
        </li>
        <li class="nav-item pl-1 pr-1"> <a class="nav-link" href="contato.php">Contato</a> </li>
      </ul>
      <div id="menu-left" class="w-25">
        <ul class="navbar-nav float-lg-right">
          <?php
          if (!isset($_SESSION['banana'])) {?>
            <li class="nav-item"> <a class="nav-link" id="btn-logar" data-toggle="modal" data-target="#modalLogin" href="#">Logar</a></li>
            <li class="nav-item"> <a class="nav-link text-primary" href="form_cadastrar">Cadastrar</a></li>
          <?php } 
          else {?>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="btn-conta" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?=$nome?></i></a>
            <div class="dropdown-menu d-lg-none">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another</a>
              <a class="dropdown-item" href="#">Something</a>
              <a class="dropdown-item" href="#">Separated</a>
            </div>
          </li>
        <?php }?>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="btn-lang" href="#" role="button" aria-haspopup="true" aria-expanded="false">Português</a>
          <div class="dropdown-menu d-lg-none">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another</a>
            <a class="dropdown-item" href="#">Something</a>
            <a class="dropdown-item" href="#">Separated</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</div>
</nav>

<?php
if (isset($_SESSION['banana'])) {?>
  <div id="conta" class="pt-2 pb-2" style="width: 158px">
    <div >
      <a class="dropdown-item" href="perfil_cliente.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Perfil
      </a>
    </div>
    <hr class="mt-2 mb-2">
    <div >
      <a class="dropdown-item" href="controle/logout.php">
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

            <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
              <input id="focus-email" class="input100 inputLogin" type="text" name="email_login">
              <span class="focus-input100" data-placeholder="Email"></span>
            </div>

            <div class="wrap-input100 validate-input mt-4" data-validate="Enter password">
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
              <input class="input100 inputLogin" type="password" name="senha_login">
              <span class="focus-input100" data-placeholder="Password"></span>
            </div>
            <div id="loginIncorreto" class="w-100 bg-warning p-2 mt-3" style="display: none">
              <div class="row">
                <div class="col-1">
                  <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="col-9">
                  <span>Senha ou e-mail incorreto(s).</span>
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
                  Login
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--===============================================================================================-->  
        <script src="vendor/js/logar_main.js"></script>
        <script>
          <?php 
          if(isset($_GET["email"]))
            $getEmail = $_GET["email"];
          else
            $getEmail = 'null';
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

                if(verificarLogin != 1)
                  $("#loginIncorreto").fadeIn('slow')
                else{
                  $("#loginIncorreto").hide()
                  requisicao++
                }

                if(requisicao === 1){
                  $("#form-modal-login").submit();
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