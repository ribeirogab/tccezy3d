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
  <title>EZY 3D - Contato</title>
</head>
<style>
#fundo-menu {
      position: absolute;
      width: 100%;
      height: 78px;
      background-color: #232323;
    }
</style>
<body style="background-color:#232323;">
  <?php
$pagina = "contato";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
  <div id="fundo-menu">
  </div>
  <main>
    <div>
      <div class="container-fluid bg-white" style="margin-top: 78px;border-bottom: solid 1px rgba(0,0,0,.2)">
        <div class="row">
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.454484618452!2d-47.86271848538968!3d-23.335543459176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8c25732cd5b%3A0xb31a9291a589ffa0!2sR.+Lu%C3%ADs+de+Camargo+Barros%2C+20+-+Vila+Sao+Cristovao%2C+Tatu%C3%AD+-+SP%2C+18280-010!5e0!3m2!1spt-BR!2sbr!4v1558876350093!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="py-4 bg-white text-black">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="col-md-12">
              <h4>
                <?php
echo $titulo1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?><br>
              </h4>
              <p class="lead">
                <?php
echo $txt1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?><br><br>
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <i class="fa fa-cloud text-primary mr-2"></i>
                  <?php
echo $txt1_1;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-bookmark text-primary mr-2"></i>
                  <?php
echo $txt1_2;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-bell text-primary mr-2"></i>
                  <?php
echo $txt1_3;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-life-ring text-primary mr-2"></i>
                  <?php
echo $txt1_4;
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1_4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
}
?>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="col-md-12">
              <form method="post" action="cadastro_contato">
                <div class="form-group">
                  <input type="text" class="form-control" name="nome" placeholder="<?=$input1?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="destinatario" placeholder="<?=$input2?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="assunto" placeholder="<?=$input3?>">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mensagem" placeholder="<?=$input4?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?=$button1?></button>
              </form>
            </div>
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