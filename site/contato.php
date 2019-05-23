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
<body>
 <?php
$pagina = "contato";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>
 <main>
  <div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <iframe width="100%" height="400" src="https://maps.google.com/maps?q=New%20York&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="py-4">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="col-md-12">
            <h4><?=$titulo1?><br></h4>
            <p class="lead"><?=$txt1?><br><br>
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa fa-cloud text-primary mr-2"></i><?=$txt1_1?>
              </li>
              <li class="list-group-item">
                <i class="fa fa-bookmark text-primary mr-2"></i><?=$txt1_2?>
              </li>
              <li class="list-group-item">
                <i class="fa fa-bell text-primary mr-2"></i><?=$txt1_3?>
              </li>
              <li class="list-group-item">
                <i class="fa fa-life-ring text-primary mr-2"></i><?=$txt1_4?>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-md-12">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="<?=$input1?>">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="<?=$input2?>">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="<?=$input3?>">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="<?=$input4?>"></textarea>
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