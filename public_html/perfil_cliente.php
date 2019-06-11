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
    #alert {
      position: fixed;
      width: 100%;
      display: none;
      color: rgba(255, 255, 255, 0.7);
      height: 50px;
      padding-top: 15px;
      z-index: 100;
    }

    #close-alert:hover {
      color: #fff;
      cursor: pointer;
    }

    #painel {
      top: 100;
      border: solid 0.5px rgb(0, 0, 0, .2);
    }

    #painel .col-lg-3 {
      border-right: solid 0.5px rgba(0, 0, 0, .2);
      min-height: 500px;
    }

    @media only screen and (max-width: 991.5px) {
      #painel .col-lg-3 {
        border-right: solid 0.5px rgba(0, 0, 0, .0);
        min-height: 0px;
      }

      .item {
        background-color: rgba(0, 0, 0, .05);
      }

      .item-selected {
        background-color: rgba(0, 0, 0, .01);
      }
    }

    .item {
      display: block;
      cursor: pointer;
      padding-left: 45px;
      border-left: solid 3px rgba(0, 0, 0, .0);
      color: #000;
    }

    .item-selected {
      display: block;
      cursor: pointer;
      padding-left: 45px;
      border-left: solid 3px #000;
      color: #000;
    }

    .item:hover {
      background-color: rgba(0, 0, 0, .1);
      border-left: solid 3px rgba(0, 0, 0, .2);
    }

    .form-group {
      color: #434343;
    }

    h4,
    p {
      color: #434343 !important;
    }

    #form-perfil {
      padding-left: 70px;
      padding-right: 80px;
    }

    @media only screen and (max-width: 991.5px) {
      #form-perfil {
        padding-left: 10px;
        padding-right: 10px;
      }
    }

    #alterar-senha,
    #orcamento,
    #suporte {
      display: none;
    }

    .confirmarSenha {
      border: 2px solid red;
    }

    .confirmarSenha:focus {
      border-color: red;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);
    }

    #erro1,
    #erro2,
    #erro3 {
      color: red;
      display: none;
    }

    #erroNome,
    #erroSobrenome,
    #erroEmail,
    #erroEmailExiste,
    #erroTelefone,
    #erroSenha,
    #erroConfirmarSenha,
    #erroPais,
    #erroRamo,
    #erroOutroRamo1 {
      color: red;
      font-size: 13px;
      margin-top: 5px;
      display: none;
    }

    #fundo-menu {
      position: absolute;
      width: 100%;
      height: 78px;
      background-color: #232323;
    }
  </style>

</head>

<body class="bg-dark">
  <?php
  $pagina = "perfil_cliente";
  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
    include "dashboard/menuAlterarTexto.php";
  } else {
    $visivelm = true;
    include "vendor/menu_rodape/menu.php";
  }
  ?>
  <div id="fundo-menu">
  </div>
  <main class="pt-64px" style="background-color: #fafafa;">
    <div id="alert" class="bg-success">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <h5 id="alert-titulo" class="text-center"><?= $success ?></h5>
        </div>
        <div class="col-1"><i id="close-alert" class="fas fa-times text-right"></i></div>
      </div>
    </div>
    <div style="height: 50px;background-color: #fafafa;"></div>
    <div class="container mb-5">
      <div id="painel" class="bg-white">
        <div class="row">
          <div class="col-lg-3 pr-lg-0 mr-lg-0">
            <div id="btn1" class="item-selected m-0 pt-3 pb-3"><?= $perfil_menu_editar ?></div>
            <div id="btn2" class="item m-0 pt-3 pb-3"><?= $perfil_menu_altsenha ?></div>
            <div id="btn3" class="item m-0 pt-3 pb-3"><?= $perfil_menu_orcamento ?></div>
            <div id="btn4" class="item m-0 pt-3 pb-3"><?= $perfil_menu_suporte ?></div>
            <div class="d-block d-lg-none" style="border-bottom: solid 1px rgb(0,0,0,.3)"></div>
          </div>

          <!-- EDITAR PERFIL -->
          <div id="editar-perfil" class="col-lg-9 col-12">
            <form id="form-editar-perfil" action="controle/cliente.php" method="post" id="form-editarperfil" class="pt-4 container" autocomplete="off">
              <input type="hidden" name="tipo" value="alterar">

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_nome ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="nome" value="<?= $nome ?>" minlength="3" maxlength="30" required>
                  <div id="erroNome">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_erronome ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_sobrenome ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="sobrenome" value="<?= $sobrenome ?>" minlength="3" maxlength="50" required>
                  <div id="erroSobrenome">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_errosobrenome ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_empresa ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="empresa" value="<?= $empresa ?>">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_pais ?></b></label>
                <div class="col-sm-5">
                  <select class="custom-select my-1 mr-sm-2" name="pais" required>
                    <option selected value="<?= $pais ?>"><?= $pais ?></option>
                    <option value="null">Pais...</option>
                    <option value="África do Sul">África do Sul</option>
                    <option value="Albânia">Albânia</option>
                    <option value="Alemanha">Alemanha</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua">Antigua</option>
                    <option value="Arábia Saudita">Arábia Saudita</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armênia">Armênia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Austrália">Austrália</option>
                    <option value="Áustria">Áustria</option>
                    <option value="Azerbaijão">Azerbaijão</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermudas">Bermudas</option>
                    <option value="Botsuana">Botsuana</option>
                    <option value="Brasil" selected>Brasil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgária">Bulgária</option>
                    <option value="Burkina Fasso">Burkina Fasso</option>
                    <option value="botão">botão</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camarões">Camarões</option>
                    <option value="Camboja">Camboja</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Cazaquistão">Cazaquistão</option>
                    <option value="Chade">Chade</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                    <option value="Colômbia">Colômbia</option>
                    <option value="Congo">Congo</option>
                    <option value="Coréia do Sul">Coréia do Sul</option>
                    <option value="Costa do Marfim">Costa do Marfim</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croácia">Croácia</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibuti">Djibuti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="EUA">EUA</option>
                    <option value="Egito">Egito</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emirados Árabes">Emirados Árabes</option>
                    <option value="Equador">Equador</option>
                    <option value="Eritréia">Eritréia</option>
                    <option value="Escócia">Escócia</option>
                    <option value="Eslováquia">Eslováquia</option>
                    <option value="Eslovênia">Eslovênia</option>
                    <option value="Espanha">Espanha</option>
                    <option value="Estônia">Estônia</option>
                    <option value="Etiópia">Etiópia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlândia">Finlândia</option>
                    <option value="França">França</option>
                    <option value="Gabão">Gabão</option>
                    <option value="Gâmbia">Gâmbia</option>
                    <option value="Gana">Gana</option>
                    <option value="Geórgia">Geórgia</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Granada">Granada</option>
                    <option value="Grécia">Grécia</option>
                    <option value="Guadalupe">Guadalupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guiana">Guiana</option>
                    <option value="Guiana Francesa">Guiana Francesa</option>
                    <option value="Guiné-bissau">Guiné-bissau</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Holanda">Holanda</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungria">Hungria</option>
                    <option value="Iêmen">Iêmen</option>
                    <option value="Ilhas Cayman">Ilhas Cayman</option>
                    <option value="Ilhas Cook">Ilhas Cook</option>
                    <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                    <option value="Ilhas Marshall">Ilhas Marshall</option>
                    <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                    <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                    <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                    <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                    <option value="Índia">Índia</option>
                    <option value="Indonésia">Indonésia</option>
                    <option value="Inglaterra">Inglaterra</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Islândia">Islândia</option>
                    <option value="Israel">Israel</option>
                    <option value="Itália">Itália</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japão">Japão</option>
                    <option value="Jordânia">Jordânia</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituânia">Lituânia</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedônia">Macedônia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malásia">Malásia</option>
                    <option value="Malaui">Malaui</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marrocos">Marrocos</option>
                    <option value="Martinica">Martinica</option>
                    <option value="Mauritânia">Mauritânia</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="México">México</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Mônaco">Mônaco</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicarágua">Nicarágua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigéria">Nigéria</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nova Caledônia">Nova Caledônia</option>
                    <option value="Nova Zelândia">Nova Zelândia</option>
                    <option value="Omã">Omã</option>
                    <option value="Palau">Palau</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                    <option value="Paquistão">Paquistão</option>
                    <option value="Peru">Peru</option>
                    <option value="Polinésia Francesa">Polinésia Francesa</option>
                    <option value="Polônia">Polônia</option>
                    <option value="Porto Rico">Porto Rico</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Quênia">Quênia</option>
                    <option value="Rep. Dominicana">Rep. Dominicana</option>
                    <option value="Rep. Tcheca">Rep. Tcheca</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romênia">Romênia</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="Rússia">Rússia</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa Americana">Samoa Americana</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serra Leone">Serra Leone</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Síria">Síria</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                    <option value="St. Lúcia">St. Lúcia</option>
                    <option value="St. Vincent">St. Vincent</option>
                    <option value="Sudão">Sudão</option>
                    <option value="Suécia">Suécia</option>
                    <option value="Suiça">Suiça</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Tailândia">Tailândia</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tanzânia">Tanzânia</option>
                    <option value="Togo">Togo</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunísia">Tunísia</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Ucrânia">Ucrânia</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguai">Uruguai</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnã">Vietnã</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zâmbia">Zâmbia</option>
                    <option value="Zimbábue">Zimbábue</option>
                  </select>
                  <div id="erroPais">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_erropais ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_ramo ?></b></label>
                <div class="col-sm-5">
                  <select class="custom-select my-1 mr-sm-2" id="ramo" name="ramo">
                    <option selected value="<?= $ramo ?>" required><?= $ramo ?></option>
                    <option value="outro"><?= $perfil_outro1 ?></option>
                    <option value="Odontologia">Odontologia</option>
                    <option value="Educação">Educação</option>
                    <option value="Joalheria">Joalheria</option>
                    <option value="Manufatura">Manufatura</option>
                    <option value="Design">Design</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Informática">Informática</option>
                  </select>
                  <div id="erroRamo">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_erroramo ?></span>
                  </div>
                </div>
              </div>

              <div id="outroRamo" style="display: none;">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_outroramo ?></b></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="text" name="outroRamo" minlength="3" maxlength="20" required>
                    <div id="erroOutroRamo1">
                      <i class="fas fa-exclamation-circle mr-1"></i>
                      <span><?= $perfil_erro_outroramo ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="form-group row mt-2">
                <label class="col-sm-2"></label>
                <div class="col-sm-10">
                  <label><b><?= $perfil_infoprivadas ?></b></label>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_email ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="hidden" name="oldemail" value="<?= $banana ?>" minlength="3" maxlength="60" required>
                  <input class="form-control" type="email" name="email" value="<?= $banana ?>" minlength="3" maxlength="60" required>
                  <div id="erroEmail">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_erroemail1 ?></span>
                  </div>
                  <div id="erroEmailExiste">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_erroemail2 ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_telefone ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="telefone" value="<?= $telefone ?>" minlength="11" maxlength="11" required>
                  <div id="erroTelefone">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    <span><?= $perfil_errofone ?></span>
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
                <div class="col-sm-10">
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
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_oldsenha ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control mt-2" type="password" name="senhaold">
                  <div id="erro1" class="w-100 mt-1">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <span><?= $perfil_erro_oldsenha ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_newsenha ?> &nbsp;&nbsp;&nbsp;</b></label>
                <div class="col-sm-10">
                  <input class="form-control mt-2" type="password" name="novasenha">
                  <div id="erro2" class="w-100 mt-1">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <span><?= $perfil_erro_newsenha ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_confirmarsenha ?></b></label>
                <div class="col-sm-10">
                  <input class="form-control mt-1" type="password" name="confirmarnovasenha">
                  <div id="erro3" class="w-100 mt-2">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <span><?= $perfil_erro_confirmarsenha ?></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input id="btn-alterarsenha" type="button" class="btn btn-primary" value="Alterar Senha"><br><br>
                  <a href="#"><?= $perfil_esqueceusenha ?></a>
                </div>
              </div>
            </form>
          </div>

          <!-- ORÇAMENTO -->
          <div id="orcamento" class="col-lg-9 col-12">
            <form id="form-orcamento" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
              <input type="hidden" name="idcliente" value="<?= $idcliente ?>">
              <input type="hidden" name="tipo" value="orcamento">
              <h4><?= $perfil_orcamento_titulo1 ?></h4>
              <p><?= $perfil_orcamento_txt1 ?></p>
              <hr><br>
              <div class="form-group row">
                <label class="col-sm-2 text-left text-sm-right"><b><?= $perfil_orcamento_label1 ?></b></label>
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
                <label class="col-sm-2 text-left text-sm-right"><b><?= $perfil_orcamento_label2 ?></b></label>
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
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_orcamento_label3 ?></b></label>
                <div class="col-sm-10">
                  <textarea class="form-control mt-2" name="descricao" cols="5" rows="4" placeholder="Deixe um comentário"></textarea>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button id="btn-orcamento" class="btn btn-primary"><?= $perfil_orcamento_button1 ?></button><br><br>
                </div>
              </div>
            </form>
          </div>

          <!-- SUPORTE TÉCNICO -->
          <div id="suporte" class="col-lg-9 col-12">
            <form id="form-suporte" action="controle/cliente.php" method="post" class="pt-4 container" autocomplete="off">
              <input type="hidden" name="tipo" value="suporte">
              <h4><?= $perfil_suporte_titulo1 ?></h4>
              <p><?= $perfil_suporte_txt1 ?></p>
              <hr><br>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_suporte_label1 ?></b></label>
                <div class="col-sm-5">
                  <select name="maquina" class="custom-select my-1 mr-sm-2 mt-2">
                    <option selected value="null"><?= $perfil_suporte_select1 ?></option>
                    <option value="E1260T">E1260T</option>
                    <option value="Phylos">Phylos</option>
                    <option value="CoreE3">Core E3</option>
                    <option value="EzyCure">EzyCure</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b><?= $perfil_suporte_label2 ?></b></label>
                <div class="col-sm-5">
                  <select name="problema" class="custom-select my-1 mr-sm-2 mt-2">
                    <option selected value="null"><?= $perfil_suporte_select2 ?></option>
                    <option value="Falha na impressão">Falha na Impressão</option>
                    <option value="Troca de LCD">Troca de LCD</option>
                    <option value="Outro"><?= $perfil_suporte_outro1 ?></option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left text-sm-right"><b>Descrição</b></label>
                <div class="col-sm-10">
                  <textarea id="textareaDescricao" class="form-control mt-2" name="descricao" cols="5" rows="7" placeholder="<?= $perfil_suporte_placeholder1 ?>"></textarea>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button id="btn-suporte" class="btn btn-primary"><?= $perfil_suporte_button1 ?></button><br><br>
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
  <?php include_once "vendor/js/perfil_cliente.php" ?>
</body>

</html>