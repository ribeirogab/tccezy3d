<?php 
session_start();
if(isset($_SESSION["banana"]))
  extract($_SESSION);
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
 $visivelm = true;
 include"vendor/menu_rodape/menu.php"; 
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

        <div class="col-md-6" style="">
          <div class="col-md-12">
            <h4 class="">Contate-nos!<br></h4>
            <p class="lead" style="">Se você gostaria de saber mais sobre nossos produtos ou tem alguma dúvida nos contate e logo responderemos.<br><br>
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa fa-cloud text-primary mr-2"></i>(11) 95245-3334 - (15) 4101-0014
              </li>
              <li class="list-group-item">
                <i class="fa fa-bookmark text-primary mr-2"></i>contato@ezy3d.com.br
              </li>
              <li class="list-group-item">
                <i class="fa fa-bell text-primary mr-2"></i>R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010
              </li>
              <li class="list-group-item">
                <i class="fa fa-life-ring text-primary mr-2"></i> Horário de atendimento: Segunda a Sexta das 08h15 às 17h45
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-md-12">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Nome"> 
              </div>
              <div class="form-group">
                <label></label> <input type="email" class="form-control" placeholder="E-mail"> 
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Sua Mensagem"></textarea>
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
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