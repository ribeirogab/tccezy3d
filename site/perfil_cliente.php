<?php
session_start();
if (!isset($_SESSION['banana'])) {
    header("Location:home.php");
} else {
    extract($_SESSION);
}

if (isset($_GET["status"])) {
    $status = $_GET["status"];
} else {
    $status = "off";
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Core E3</title>
  <style>
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
#erro1, #erro2, #erro3{
  color: red;
  display: none;
}
#erroNome, #erroSobrenome, #erroEmail, #erroEmailExiste, #erroTelefone, #erroSenha, #erroConfirmarSenha, #erroPais, #erroRamo, #erroOutroRamo1{
  color: red;
  font-size: 13px;
  margin-top: 5px;
  display: none;
}
</style>

</head>
<body>
 <?php
$pagina = "perfil_cliente";
if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
} else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
}
?>

 <main class="pt-64px" style="background-color: #fafafa;">
  <div id="alert" class="bg-success">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10"><h5 id="alert-titulo" class="text-center">Alterações salvas com sucesso!</h5></div>
      <div class="col-1"><i id="close-alert" class="fas fa-times text-right"></i></div>
    </div>
  </div>
  <div style="height: 50px;background-color: #fafafa;"></div>
  <div class="container mb-5">
    <div id="painel" class="bg-white">
      <div class="row">
        <div class="col-lg-3 pr-lg-0 mr-lg-0">
          <div id="btn1" class="item-selected m-0 pt-3 pb-3"><?=$perfil_menu_editar?></div>
          <div id="btn2" class="item m-0 pt-3 pb-3"><?=$perfil_menu_altsenha?></div>
          <div id="btn3" class="item m-0 pt-3 pb-3"><?=$perfil_menu_orcamento?></div>
          <div id="btn4" class="item m-0 pt-3 pb-3"><?=$perfil_menu_suporte?></div>
          <div class="d-block d-lg-none" style="border-bottom: solid 1px rgb(0,0,0,.3)"></div>
        </div>

        <!-- EDITAR PERFIL -->
        <div id="editar-perfil" class="col-lg-9 col-12">
          <form id="form-editar-perfil" action="controle/cliente.php" method="post" id="form-editarperfil" class="pt-4 container" autocomplete="off">
            <input type="hidden" name="tipo" value="alterar">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_nome?></b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="nome" value="<?=$nome?>" minlength="3" maxlength="30" required>
                <div id="erroNome">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_erronome?></span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_sobrenome?></b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="sobrenome" value="<?=$sobrenome?>" minlength="3" maxlength="50" required>
                <div id="erroSobrenome">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_errosobrenome?></span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_empresa?></b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="empresa" value="<?=$empresa?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_pais?></b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2" name="pais" required>
                  <option selected value="<?=$pais?>"><?=$pais?></option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Outro</option>
                </select>
                <div id="erroPais">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_erropais?></span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_ramo?></b></label>
              <div  class="col-sm-5">
                <select class="custom-select my-1 mr-sm-2" id="ramo" name="ramo">
                  <option selected value="<?=$ramo?>" required><?=$ramo?></option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="outro"><?=$perfil_outro1?></option>
                </select>
                <div id="erroRamo">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_erroramo?></span>
                </div>
              </div>
            </div>

            <div id="outroRamo" style="display: none;">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_outroramo?></b></label>
                <div  class="col-sm-5">
                  <input class="form-control" type="text" name="outroRamo" minlength="3" maxlength="20" required>
                  <div id="erroOutroRamo1">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?=$perfil_erro_outroramo?></span>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <div class="form-group row mt-2">
              <label class="col-sm-2"></label>
              <div  class="col-sm-10">
                <label><b><?=$perfil_infoprivadas?></b></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b></b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="hidden" name="oldemail" value="<?=$banana?>" minlength="3" maxlength="60" required>
                <input class="form-control" type="email" name="email" value="<?=$banana?>" minlength="3" maxlength="60" required>
                <div id="erroEmail">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_erroemail1?></span>
                </div>
                <div id="erroEmailExiste">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_erroemail2?></span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?=$perfil_telefone?></b></label>
              <div  class="col-sm-10">
                <input class="form-control" type="text" name="telefone" value="<?=$telefone?>" minlength="11" maxlength="11" required>
                <div id="erroTelefone">
                  <i class="fas fa-exclamation-circle mr-1"></i>
                  <span><?=$perfil_errofone?></span>
                </div>
              </div>
            </div>

            <!-- <div class="form-group row">
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
            </div> -->
            <br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <input type="button" id="btn-alterarPerfil" disabled class="btn btn-primary" value="Enviar"><br><br>
              </div>
            </div>
          </form>
        </div>

        <!-- ALTERAR SENHA -->
        <div id="alterar-senha" class="col-lg-9 col-12">
          <form id="form-senha" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
            <input type="hidden" name="tipo" value="alterar-senha">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Senha Antiga</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-2" type="text" name="senhaold">
                <div id="erro1" class="w-100 mt-1">
                  <i class="fas fa-exclamation-circle mr-2"></i>
                  <span>Senha antiga incorreta.</span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Nova Senha &nbsp;&nbsp;&nbsp;</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-2" type="text" name="novasenha">
                <div id="erro2" class="w-100 mt-1">
                  <i class="fas fa-exclamation-circle mr-2"></i>
                  <span>A sua nova senha não pode ser igual a senha antiga.</span>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Confirmar Nova Senha</b></label>
              <div  class="col-sm-10">
                <input class="form-control mt-1" type="text" name="confirmarnovasenha">
                <div id="erro3" class="w-100 mt-2">
                  <i class="fas fa-exclamation-circle mr-2"></i>
                  <span>Senhas não coicidem. Tente novamente.</span>
                </div>
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
          <form id="form-orcamento" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
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
          <form id="form-suporte" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
            <input type="hidden" name="tipo" value="suporte">
            <h4>Suporte Técnico</h4>
            <p>The people listed here are contacts you've uploaded to Instagram. To remove your synced contacts, tap Delete All.</p>
            <hr><br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Máquina</b></label>
              <div  class="col-sm-5">
                <select name="maquina" class="custom-select my-1 mr-sm-2 mt-2">
                  <option selected value="null">Selecione a sua máquina...</option>
                  <option value="E1260T">E1260T</option>
                  <option value="Phylos">Phylos</option>
                  <option value="CoreE3">Core E3</option>
                  <option value="EzyCure">EzyCure</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Problema</b></label>
              <div  class="col-sm-5">
                <select name="problema" class="custom-select my-1 mr-sm-2 mt-2">
                  <option selected value="null">Selecione seu problema...</option>
                  <option value="Falha na impressão">Falha na Impressão</option>
                  <option value="Troca de LCD">Troca de LCD</option>
                  <option value="Outro">Outro</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Descrição</b></label>
              <div  class="col-sm-10">
                <textarea id="textareaDescricao" class="form-control mt-2" name="descricao" cols="5" rows="7" placeholder="Descreva seu problema"></textarea>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"></label>
              <div  class="col-sm-10">
                <button id="btn-suporte" class="btn btn-primary">Enviar</button><br><br>
              </div>
            </div>
          </form>
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
<script>
  function buttonDisabled1(){
    let nome = $("input[name=nome]").val()
    let sobrenome = $("input[name=sobrenome]").val()
    let email = $("input[name=email]").val()
    let telefone = $("input[name=telefone]").val()
    let pais = $("select[name=pais]").val()
    let ramo = $("select[name=ramo]").val()
    let empresa = $("input[name=empresa]").val()

    if (nome != '<?=$nome?>' || sobrenome != '<?=$sobrenome?>' || email != '<?=$banana?>' || telefone != '<?=$telefone?>' || pais != '<?=$pais?>' || (ramo != '<?=$ramo?>') || empresa != '<?=$empresa?>')
      $("#btn-alterarPerfil").removeAttr("disabled")
    else
      $("#btn-alterarPerfil").attr("disabled", "on")
  }
  setInterval(buttonDisabled1, 0)


  function buttonDisabled2(){
    let senhaold = $("input[name=senhaold]").val()
    let novasenha = $("input[name=novasenha]").val()
    let confirmarnovasenha = $("input[name=confirmarnovasenha]").val()

    if (senhaold.length >= 8 && novasenha.length >= 8 && confirmarnovasenha.length >= 8)
      $("#btn-alterarsenha").removeAttr("disabled")
    else
      $("#btn-alterarsenha").attr("disabled", "on")
  }
  setInterval(buttonDisabled2, 0)


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
  setInterval(buttonDisabled3, 0)


  function buttonDisabled4(){
    let maquina = $("select[name=maquina]").val()
    let problema = $("select[name=problema]").val()
    let descricao = $("#textareaDescricao").val()

    if (maquina != "null" && problema != "null" && descricao.length >= 15)
      $("#btn-suporte").removeAttr("disabled")
    else
      $("#btn-suporte").attr("disabled", "on")
  }
  setInterval(buttonDisabled4, 0)


  $(document).ready(function(){
    $("input[name=telefone]").mask("99999999999")
    if('<?=$status?>' == "success1"){
      $("#alert").slideDown('slow');
      $("#alert-titulo").html("Alterações realizadas com sucesso.")
    }
    else if('<?=$status?>' == "success2"){
      $("#alert").slideDown('slow');
      $("#alert-titulo").html("Senha alterada com sucesso.")
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
    }
    $("#close-alert").click(function(){
      window.location.href='perfil_cliente.php';
    });

    $("#btn-alterarsenha").on("click", function(){
      let inputSenha = $("input[name=senhaold]").val()
      let inputNovaSenha = $("input[name=novasenha]").val()
      let confirmarnovasenha = $("input[name=confirmarnovasenha]").val()

      $.ajax({
        url: "http://localhost/tccezy3d/site/controle/cliente.php",
        method: "POST",
        data: {"tipo": "consultarSenha", "inputSenha": inputSenha, "inputNovaSenha": inputNovaSenha},
        success: function(resposta){
          var json = $.parseJSON(resposta)
          let senhaold = json["senha"]
          let novasenha = json["novasenha"]

          if (senhaold == '<?=$senha?>' && confirmarnovasenha == inputNovaSenha && novasenha != senhaold) {
            $("#form-senha").submit();
          }
          if (senhaold == novasenha){
            $("input[name=novasenha]").addClass('confirmarSenha');
            $("#erro2").show();
          }
          else{
            $("input[name=novasenha]").removeClass('confirmarSenha');
            $("#erro2").hide();
          }

          if (confirmarnovasenha != inputNovaSenha){
            $("input[name=confirmarnovasenha]").addClass('confirmarSenha');
            $("#erro3").show();
          }
          else{
            $("input[name=confirmarnovasenha]").removeClass('confirmarSenha');
            $("#erro3").hide();
          }

          if (senhaold != '<?=$senha?>'){
            $("input[name=senhaold]").addClass('confirmarSenha');
            $("#erro1").show();
          }
          else{
            $("input[name=senhaold]").removeClass('confirmarSenha');
            $("#erro1").hide();
          }
        },
        error: function(){
          alert("Erro ao fazer a requisição")
        }
      });

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

    // --------------------------------------------

    $("#ramo").change(function() {
      let ramo = $(this).val();
      if(ramo === "outro")
        $("#outroRamo").show();
      else if(ramo != "outro")
        $("#outroRamo").hide();
    });

    $("#teste").click(function(){
      $("#erroOutroRamo1").toggle()
    });

    $("#btn-alterarPerfil").on("click", function() {
      let nome = $("input[name=nome]").val()
      let sobrenome = $("input[name=sobrenome]").val()
      let email = $("input[name=email]").val()
      let telefone = $("input[name=telefone]").val()
      let senha = $("input[name=senha]").val()
      let confirmarSenha = $("input[name=confirmarSenha]").val()
      let pais = $("select[name=pais]").val()
      let ramo = $("select[name=ramo]").val()
      let outroRamo = $("input[name=outroRamo]").val()

      $.ajax({
        url: "http://localhost/tccezy3d/site/controle/cliente.php",
        method: "POST",
        data: {"tipo": "verificarEmail", "email": email},
        success: function(resposta){
          let requisicao = 0;
          var json = $.parseJSON(resposta)
          let verificarEmail = json[0][0]

          if(verificarEmail != 0)
            $("#erroEmailExiste").show()
          else{
            $("#erroEmailExiste").hide()
            requisicao++
          }

          if(nome.length < 3 || nome.length >= 30)
            $("#erroNome").show()
          else{
            $("#erroNome").hide()
            requisicao++
          }

          if(sobrenome.length < 3 || sobrenome.length >= 50)
            $("#erroSobrenome").show()
          else{
            $("#erroSobrenome").hide()
            requisicao++
          }

          if(email.length < 3 || email.indexOf("@") == -1 || email.length >= 50)
            $("#erroEmail").show()
          else{
            $("#erroEmail").hide()
            requisicao++
          }

          if(telefone.length != 11)
            $("#erroTelefone").show()
          else{
            $("#erroTelefone").hide()
            requisicao++
          }

          if (pais == "null")
            $("#erroPais").show()
          else{
            $("#erroPais").hide()
            requisicao++
          }

          if (ramo.length < 3){
            $("#erroRamo").show()
            $("#erroOutroRamo1").hide()
          }
          else if(ramo == "outro"){
            ramo = outroRamo
            if(ramo.length < 3){
              $("#erroOutroRamo1").show()
              $("#erroRamo").hide()
            }
            else{
              $("#erroRamo").hide()
              $("#erroOutroRamo1").hide()
              requisicao++
            }
          }
          else{
            $("#erroRamo").hide()
            requisicao++
          }

          if(requisicao === 7){
            $("#form-editar-perfil").submit();
          }
        },
        error: function(){
          window.location.hred="../../404.html"
        }
      });

    });
  });
</script>
</body>
</html>