<?php 
session_start();
if(!isset($_SESSION['banana']))
  header("Location:home.php");
else
  extract($_SESSION);

if(isset($_GET["status"]))
  $status = $_GET["status"];
else
  $status = "off";
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Core E3</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
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
#alert{
  position: fixed;
  width: 100%;
  display: none;
  color: rgba(255,255,255,0.7);
  height: 50px;
  padding-top: 15px;
  z-index: 100;
}
#close-alert:hover{
  color: #fff;
  cursor: pointer;
}
#painel{
  top: 100;
  border: solid 0.5px rgb(0,0,0,.2);
}
#painel .col-lg-3{
  border-right: solid 0.5px rgba(0,0,0,.2);
  min-height: 500px;
}
@media only screen and (max-width: 991.5px) {
  #painel .col-lg-3{
    border-right: solid 0.5px rgba(0,0,0,.0);
    min-height: 0px;
  }
  .item{
    background-color: rgba(0,0,0,.05);
  }
  .item-selected{
    background-color: rgba(0,0,0,.01);
  }
}

.item{
  display: block;
  cursor: pointer;
  padding-left: 45px;
  border-left: solid 3px rgba(0,0,0,.0);
}
.item-selected{
  display: block;
  cursor: pointer;
  padding-left: 45px;
  border-left: solid 3px #000;
}
.item:hover{
  background-color: rgba(0,0,0,.1);
  border-left: solid 3px rgba(0,0,0,.2);
}
#form-perfil{
  padding-left: 70px;
  padding-right: 80px;
}
@media only screen and (max-width: 991.5px) {
  #form-perfil{
    padding-left: 10px;
    padding-right: 10px;
  }
}

#alterar-senha, #orcamento, #suporte{
  display: none;
}
.confirmarSenha{
 border: 2px solid red;
}
.confirmarSenha:focus{
  border-color: red;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);
}
</style>
<script>
  function buttonDisabled1(){
    let nome = $("input[name=nome]").val()
    let sobrenome = $("input[name=sobrenome]").val()
    let email = $("input[name=email]").val()
    let telefone = $("input[name=telefone]").val()
    let pais = $("select[name=pais]").val()
    let ramo = $("select[name=ramo]").val()
    let empresa = $("input[name=empresa]").val()

    if (nome != '<?=$nome?>' || sobrenome != '<?=$sobrenome?>' || email != '<?=$banana?>' || telefone != '<?=$telefone?>' || pais != '<?=$pais?>' || ramo != '<?=$ramo?>' || empresa != '<?=$empresa?>')
      $("#btn-alterarPerfil").removeAttr("disabled")
    else
      $("#btn-alterarPerfil").attr("disabled", "on")
  }
  setInterval(buttonDisabled1, 0);


  function buttonDisabled2(){
    let senhaold = $("input[name=senhaold]").val()
    let novasenha = $("input[name=novasenha]").val()
    let confirmarnovasenha = $("input[name=confirmarnovasenha]").val()

    if (senhaold.length >= 8 && novasenha.length >= 8 && confirmarnovasenha.length >= 8)
      $("#btn-alterarsenha").removeAttr("disabled")
    else
      $("#btn-alterarsenha").attr("disabled", "on")    
  }
  setInterval(buttonDisabled2, 0);



  function buttonDisabled3(){
    let e1260t = $("input[name=e1260t]").prop("checked")
    let phylos = $("input[name=phylos]").prop("checked")
    let coreE3 = $("input[name=coreE3]").prop("checked")
    let ezycure = $("input[name=ezycure]").prop("checked")

    if (e1260t == true || phylos == true || coreE3 == true || ezycure == true)
      $("#btn-orcamento").removeAttr("disabled")
    else
      $("#btn-orcamento").attr("disabled", "on")
  }
  setInterval(buttonDisabled3, 0);


  $(document).ready(function(){
    if('<?=$status?>' == "success"){
      $("#alert").slideDown('slow');
    }
    $("#close-alert").click(function(){
      window.location.href='perfil_cliente.php';
    });

    $("#btn-alterarsenha").on("click", function(){
      let senhaold = $("input[name=senhaold]").val()
      let novasenha = $("input[name=novasenha]").val()
      let confirmarnovasenha = $("input[name=confirmarnovasenha]").val()
      if (senhaold == '<?=$senha?>' && confirmarnovasenha == novasenha && novasenha != senhaold) {
        $("#form-senha").submit();
      }
      if (senhaold == novasenha){
        $("input[name=novasenha]").addClass('confirmarSenha');
      }
      else{
        $("input[name=novasenha]").removeClass('confirmarSenha');
      }

      if (confirmarnovasenha != novasenha){
        $("input[name=confirmarnovasenha]").addClass('confirmarSenha');
      }
      else{
        $("input[name=confirmarnovasenha]").removeClass('confirmarSenha');
      }

      if (senhaold != '<?=$senha?>'){
        $("input[name=senhaold]").addClass('confirmarSenha');
      }
      else{
        $("input[name=senhaold]").removeClass('confirmarSenha');
      }
    });

    $("#btn1").click(function(){
      $("#editar-perfil").show();
      $("#alterar-senha").hide();
      $("#orcamento").hide();
      $("#suporte").hide();
      $("#btn1").addClass('item-selected');
      $("#btn1").removeClass('item');

      $("#btn2").removeClass('item-selected');
      $("#btn2").addClass('item');

      $("#btn3").removeClass('item-selected');
      $("#btn3").addClass('item');

      $("#btn4").removeClass('item-selected');
      $("#btn4").addClass('item');
    });

    $("#btn2").click(function(){
      $("#editar-perfil").hide();
      $("#alterar-senha").show();
      $("#orcamento").hide();
      $("#suporte").hide();
      $("#btn1").removeClass('item-selected');
      $("#btn1").addClass('item');

      $("#btn2").addClass('item-selected');
      $("#btn2").removeClass('item');

      $("#btn3").removeClass('item-selected');
      $("#btn3").addClass('item');

      $("#btn4").removeClass('item-selected');
      $("#btn4").addClass('item');
    });

    $("#btn3").click(function(){
      $("#editar-perfil").hide();
      $("#alterar-senha").hide();
      $("#orcamento").show();
      $("#suporte").hide();
      $("#btn1").removeClass('item-selected');
      $("#btn1").addClass('item');

      $("#btn2").removeClass('item-selected');
      $("#btn2").addClass('item');

      $("#btn3").addClass('item-selected');
      $("#btn3").removeClass('item');

      $("#btn4").removeClass('item-selected');
      $("#btn4").addClass('item');
    });

    $("#btn4").click(function(){
      $("#editar-perfil").hide();
      $("#alterar-senha").hide();
      $("#orcamento").hide();
      $("#suporte").show();
      $("#btn1").removeClass('item-selected');
      $("#btn1").addClass('item');

      $("#btn2").removeClass('item-selected');
      $("#btn2").addClass('item');

      $("#btn3").removeClass('item-selected');
      $("#btn3").addClass('item');

      $("#btn4").addClass('item-selected');
      $("#btn4").removeClass('item');
    });
  });
</script>
</head>
<body>
 <?php 
 $visivelm = true;
 include"vendor/menu_rodape/menu.php";
 ?>
 <main>
  <div id="alert" class="bg-success">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10"><h5 class="text-center">Alterações salvas com sucesso!</h5></div>
      <div class="col-1"><i id="close-alert" class="fas fa-times text-right"></i></div>
    </div>
  </div>
  <div style="height: 50px;background-color: #fafafa;"></div>
  <div class="container mb-5">
    <div id="painel" class="bg-white">
      <div class="row">
        <div class="col-lg-3 pr-lg-0 mr-lg-0">
          <div id="btn1" class="item-selected m-0 pt-3 pb-3">Editar Perfil</div>
          <div id="btn2" class="item m-0 pt-3 pb-3">Alterar Senha</div>
          <div id="btn3" class="item m-0 pt-3 pb-3">Solicitar Orçamento</div>
          <div id="btn4" class="item m-0 pt-3 pb-3">Suporte Técnico</div>
          <div class="d-block d-lg-none" style="border-bottom: solid 1px rgb(0,0,0,.3)"></div>
        </div>

        <!-- EDITAR PERFIL -->
        <div id="editar-perfil" class="col-lg-9 col-12">
          <form action="controle/cliente.php" method="post" id="form-perfil" class="pt-4 container" autocomplete="off">
            <input type="hidden" name="tipo" value="alterar">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Nome</b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="nome" value="<?=$nome?>" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Sobrenome</b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="sobrenome" value="<?=$sobrenome?>" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Empresa</b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="empresa" value="<?=$empresa?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Pais</b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2" name="pais" required>
                  <option selected value="<?=$pais?>"><?=$pais?></option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Ramo</b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2" name="ramo">
                  <option selected value="<?=$ramo?>" required><?=$ramo?></option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
              </div>
            </div>
            
            <br>

            <div class="form-group row mt-2">
              <label class="col-sm-2"></label>
              <div  class="col-sm-10">
                <label><b>Informações privadas</b></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>E-mail</b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="hidden" name="oldemail" value="<?=$banana?>" required>
                <input class="form-control" type="email" name="email" value="<?=$banana?>" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Telefone</b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="telefone" value="<?=$telefone?>" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Genero</b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2" name="genero">
                  <option selected>Não especificado</option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 text-left text-sm-right"><b>Newsletter</b></label>
              <div class="col-sm-5">
                <div class="form-check">
                  <input class="form-check-input mt-2" type="checkbox" name="newsletter">
                  <label class="form-check-label" for="gridCheck1">
                    <b>Receber atualizações e promoções por e-mail?</b>
                  </label>
                </div>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <button type="submit" id="btn-alterarPerfil" disabled class="btn btn-primary">Enviar</button><br><br>
              </div>
            </div>
          </form>
        </div>

        <!-- ALTERAR SENHA -->
        <div id="alterar-senha" class="col-lg-9 col-12">
          <form id="form-senha" class="pt-4 container" autocomplete="off">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Senha Antiga</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-2" type="text" name="senhaold">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Nova Senha &nbsp;&nbsp;&nbsp;</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-2" type="text" name="novasenha">
              </div>
            </div>

            <div class="form-group row text-left text-sm-right">
              <label class="col-sm-2 col-form-label"><b>Confirmar Nova Senha</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-2" type="text" name="confirmarnovasenha">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <input id="btn-alterarsenha" type="button" class="btn btn-primary" value="Alterar Senha"><br><br>
                <a href="#">Esqueceu a Senha?</a>
              </div>
            </div>
          </form>
        </div>

        <!-- ORÇAMENTO -->
        <div id="orcamento" class="col-lg-9 col-12">
          <form id="form-perfil" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
            <input type="hidden" name="idcliente" value="<?=$idcliente?>">
            <input type="hidden" name="tipo" value="orcamento">
            <h4>Solicitar Orçamento</h4>
            <p>The people listed here are contacts you've uploaded to Instagram. To remove your synced contacts, tap Delete All.</p>
            <hr><br>
            <div class="form-group row">
              <label class="col-sm-2 text-left text-sm-right"><b>Impressoras 3D</b></label>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="e1260t" value="produto_E1260T">
                  <label class="form-check-label">
                    <b>E1260T - MSLA LCD UV</b>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="phylos" value="produto_Phylos">
                  <label class="form-check-label">
                    <b>Phylos - MSLA LCD UV</b>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="coreE3" value="produto_CoreE3">
                  <label class="form-check-label">
                    <b>Core E3 - FDM</b>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 text-left text-sm-right"><b>Acessórios</b></label>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="ezycure" value="produto_EzyCure">
                  <label class="form-check-label">
                    <b>EzyCure</b>
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Observaçao</b></label>
              <div  class="col-sm-10">
                <textarea class="form-control mt-2" name="descricao" cols="5" rows="4" placeholder="Deixe um comentário"></textarea>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <button id="btn-orcamento" class="btn btn-primary">Enviar</button><br><br>
              </div>
            </div>
          </form>
        </div>

        <!-- SUPORTE TÉCNICO -->
        <div id="suporte" class="col-lg-9 col-12">
          <form id="form-perfil" class="pt-4 container" autocomplete="off">
            <h4>Suporte Técnico</h4>
            <p>The people listed here are contacts you've uploaded to Instagram. To remove your synced contacts, tap Delete All.</p>
            <hr><br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Máquina</b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2 mt-2">
                  <option selected>Não especificado</option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Problema</b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2 mt-2">
                  <option selected>Não especificado</option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Descrição</b></label>
              <div  class="col-sm-10">
                <textarea class="form-control mt-2" name="descricao" cols="5" rows="7" placeholder="Descreva seu problema"></textarea>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <button class="btn btn-primary">Enviar</button><br><br>
              </div>
            </div>
          </form>
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