 <?php 
 if ($visivelm != true) {
  header("Location: ../../home.php");
}
session_start();
if(isset($_SESSION["banana"])){
  $email = $_SESSION["banana"];
  $nome = $_SESSION["nome"];
}
?>
<link rel="stylesheet" href="vendor/css/menu.css">

<nav class="fixed-top d-lg-block d-md-block d-none" style="background-color: #212121;">
  <div id="desktop">
    <a href="home.php" class="ml-5 mt-2 float-left">
      <img src="vendor/img/logo/logo_orange.svg" height="35px">
    </a>
    <a class="opcoes mr-4 mt-2 float-right btn" id="btn-lang">Portugues <i class="fas fa-sort-down"></i></a>
    <?php
    if (!isset($_SESSION['banana'])) {?>
      <a class="opcoes mr-3 mt-2 float-right btn btn-outline-warning" id="btn-cadastrar" onclick="window.location.href='http://localhost/tccezy3d/site/form_cadastrar.php'">Cadastrar</a>
      <a class="opcoes mr-3 mt-2 float-right btn" id="btn-logar" data-toggle="modal" data-target="#modalLogin">Logar</a>
    <?php } 
    else {?>
      <a class="mr-5 mt-3 float-right" id="btn-conta"><i class="fas fa-user-circle"></i> <?=$nome?> <i class="fas fa-sort-down"></i></a>
    <?php }?>
    <div class="container text-center py-3">
      <a class="mr-5" id="btn-impressoras3d">Impressoras 3D</a>
      <a class="mr-5" id="btn-acessorios">Acessórios</a>
      <a class="mr-5" id="btn-aplicacoes">Aplicações</a>
      <a id="btn-contato" onclick="window.location.href='http://localhost/tccezy3d/site/contato.php'">Contato</a>
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
        <label class="mt-3" id="item1" onclick="window.location.href='printer_e1260t'">E1260T<div id="borda1"></div></label><br>
        <label class="mt-3" id="item2" onclick="window.location.href='http://localhost/tccezy3d/site/printer_phylos.php'">Phylos<div id="borda2"></div></label><br>
      </div>
      <div class="col-6 pt-3" style="height: 200px">
        <h6 class="text-left definicao">FDM - Filamento</h6>
        <div class="w-100 bg-dark" style="height: 1px;"></div>
        <label class="mt-3" id="item3" onclick="window.location.href='http://localhost/tccezy3d/site/printer_coree3.php'">Core E3<div id="borda3"></div></label><br>
      </div>
    </div>
  </div>
  <div id="acessorios">
    <div class="row pr-5 pl-5">
      <div class="col-12 pt-3" style="height: 200px">
        <h6 class="text-left definicao">Camara pos-cura</h6>
        <div class="w-100" style="border-bottom: solid 1px black;"></div>
        <label class="mt-3" id="item4" onclick="window.location.href='http://localhost/tccezy3d/site/acessorio_ezycure.php'">Ezy Cure<div id="borda4"></div></label><br>
      </div>
    </div>
  </div>
  <div id="aplicacoes">
    <div class="row pr-5 pl-5">
      <div class="col-12 pt-3" style="height: 200px">
        <h6 class="text-left definicao">Por setor</h6>
        <div class="w-100" style="border-bottom: solid 1px black;"></div>
        <label class="mt-3" id="item5" onclick="window.location.href='http://localhost/tccezy3d/site/app_odontologia.php'">Odontologia<div id="borda5"></div></label><br>
        <label class="mt-3" id="item6" onclick="window.location.href='http://localhost/tccezy3d/site/app_joalheria.php'">Joalheria<div id="borda6"></div></label><br>
        <label class="mt-3" id="item7" onclick="window.location.href='http://localhost/tccezy3d/site/app_manufatura.php'">Manufatura<div id="borda7"></div></label><br>
        <label class="mt-3" id="item8" onclick="window.location.href='http://localhost/tccezy3d/site/app_educacao.php'">Educacao<div id="borda8"></div></label><br>
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
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controle/cliente.php" method="post">
          <input type="hidden" name="tipo" value="login">
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