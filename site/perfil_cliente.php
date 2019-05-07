<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Core E3</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <!-- Main CSS -->

  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
  <!-- Jquery -->
  <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
  <!-- Bootstrap JS -->
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <!-- Main -->
  <script src="vendor/js/mainMenu.js"></script>
  <style>
  body{
    background-color: #000;
  }
  main{
    background-color: #fafafa;
    margin-top: 47px;
  }
  #painel{
    top: 100;
    border: solid 0.5px rgb(0,0,0,.2);
  }
  #painel .col-3{
    border-right: solid 0.5px rgba(0,0,0,.2);
  }
  .item{
    display: block;
    padding-left: 45px;
    border-left: solid 5px rgba(0,0,0,.0);
  }
  .item:hover{
    background-color: rgba(0,0,0,.1);
    border-left: solid 5px rgba(0,0,0,.2);
  }
</style>
<script>

</script>
</head>
<body>
 <?php 
 $visivelm = true;
 include"vendor/menu_rodape/menu.php";
 ?>
 <main>
  <div style="height: 50px;background-color: #fafafa;"></div>
  <div class="container mb-5">
    <div id="painel" class="bg-white">
      <div class="row">
        <div class="col-3 pr-0 mr-0" style="height: 300px;">
          <label id="item1" class="item m-0 pt-3 pb-3">Editar perfil</label>
          <label id="item2" class="item m-0 pt-3 pb-3">Solicitar orçamento</label>
          <label id="item3" class="item m-0 pt-3 pb-3">Suporte técnico</label>
        </div>
        <div class="col-9" style="height: 300px;">

        </div>
      </div>
    </div>
  </div>
  <?php 
  $visivelr = true;
  include"vendor/menu_rodape/rodape.php";
  ?>
</main>
</body>
</html>