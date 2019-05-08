<?php 
session_start();
if(!isset($_SESSION['banana']))
  header("Location:home.php");
else
  extract($_SESSION);
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Joalheria</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <!-- Produtos -->
  <link href="css/product.css" rel="stylesheet">
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
 $visivelm = true;
 include"vendor/menu_rodape/menu.php";
 ?>
 <main>
  
  <?php 
  $visivelr = true;
  include"vendor/menu_rodape/rodape.php";
  ?>
</main>
</body>
</html>