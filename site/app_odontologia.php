<?php 
require_once"conexao.php";
require_once"Classes/CriarSessionCliente.php";
$c1 = new CriarSessionCliente();
$c1->consultarSession();
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Odontologia</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <!-- Produtos -->
  <link href="css/product.css" rel="stylesheet">
  <!-- Main CSS -->
  <link rel="stylesheet" href="css/menu.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
  <!-- Jquery -->
  <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
  <!-- Bootstrap JS -->
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <!-- Main -->
  <script src="js/mainMenu.js"></script>
  <style>
  body{
    background-color: black;
  }
  main{
    background-color: #fff;
    margin-top: 47px;
  }
</style>
</head>
<body>
 <?php 
 $visivel = true;
 include"menu_rodape/menu.php" 
 ?>
  <main style="height: 700px">
    
  </main>
</body>
</html>