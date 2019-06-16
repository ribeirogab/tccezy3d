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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) { ?>
    <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_black.ico">
    <title>Alterar texto - E1260T</title>
  <?php } else { ?>
    <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
    <title>EZY 3D - E1260T</title>
  <?php
} ?>
</head>
<style>
  img {
    transition: .5s;
  }

  img:hover {
    opacity: .89;
    transition: .5s;
  }

  .borda-inferior {
    border-top: solid 1px;
    border-bottom: solid 1px;
    border-left: solid 1px;
    border-right: solid 1px;
    border-color: #fff #fff orange #fff;
  }

  .sombra-colorida-red {
    box-shadow: 0 1rem 3rem rgba(220, 53, 69, 0.3);
  }

  .sombra-colorida-orange {
    box-shadow: 0 1rem 3rem rgba(243, 137, 25, 0.2);
  }
</style>

<body class="bg-dark">

  <body id="page-top">
    <?php
    $pagina = "printer_e1260t";
    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
      include "dashboard/menuAlterarTexto.php";
    } else {
      $visivelm = true;
      include "vendor/menu_rodape/menu.php";
    }
    ?>
    <main>
      <div class="py-3" style="background-color: #212121">
        <div class="container pt-md-5">
          <div class="row">
            <div class="col-xl-6 my-5 text-center align-self-center" style="">
              <h1 class="display-1">
                <?php
                echo $titulo1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h1>
              <p class="lead">
                <?php
                echo $txt1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>
              <div class="row mt-5">
                <div class="col-md-6 text-center text-md-right pr-md-1">
                  <a class="ezy-lg ezy-orange ezy-button w-75" href="como_comprar.php">
                    <?php
                    echo $button1;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                  </a>
                </div>
                <div class="col-md-6 text-center text-md-left mt-2 mt-md-0 pl-md-1">
                  <a class="ezy-lg ezy-orange ezy-button w-75" href="contato.php">
                    <?php
                    echo $button2;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 d-md-block text-center">
              <img src="vendor/img/printer_e1260t/e1260t2.png" width="80%">
            </div>
          </div>
        </div>
      </div>
      <div class="pt-md-5 pt-4 bg-white text-black" style="">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 p-4 d-flex justify-content-center flex-column">
              <h3 class="mb-4 display-3">
                <?php
                echo $titulo2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h3>
              <p class="lead">
                <?php
                echo $txt2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>
              <div class="row my-3">
                <div class="col-3"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-1.svg"> </div>
                <div class="col-8 d-flex align-items-center">
                  <p class="mb-0 borda-inferior">
                    <?php
                    echo $txt2_1;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                  </p>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-3 order-1 order-md-2"> <img class="img-fluid d-block rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg"> </div>
                <div class="col-8 d-flex align-items-center order-2 order-md-1">
                  <p class="mb-0 borda-inferior">
                    <?php
                    echo $txt2_2;
                    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                      echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt2_2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                    }
                    ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-8 mx-auto d-flex justify-content-center flex-column">
              <img class="img-fluid d-block" src="vendor/img/printer_e1260t/e1260t1.png" width="100%">
            </div>
          </div>
        </div>
      </div>
      <div class="py-5 bg-light" style="">
        <div class="container">
          <div class="row">
            <div class="text-center mx-auto col-md-8">
              <h3 class="mb-3 display-3">
                <?php
                echo $titulo3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h3>
              <p class="lead">
                <?php
                echo $txt3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red" src="vendor/img/printer_e1260t/f5.jpg"> </div>
            <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red" src="vendor/img/printer_e1260t/f5.jpg"> </div>
            <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red" src="vendor/img/printer_e1260t/f5.jpg"> </div>
            <div class="col-lg-3 p-3"> <img class="img-fluid sombra-colorida-red" src="vendor/img/printer_e1260t/f5.jpg"> </div>
          </div>
        </div>
      </div>
      <div class="py-5 bg-white text-black" id="features" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class="pb-4">
                <?php
                echo $titulo4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="align-self-center text-lg-right text-center col-lg-4">
              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao1;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao1'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>

              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao2;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao2'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>

              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>
            </div>

            <div class="my-3 col-lg-4 text-center"><img src="vendor/img/printer_e1260t/e1260t4.png" width="50%"></div>
            <div class="align-self-center text-lg-left text-center col-lg-4">
              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao4;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao4'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>

              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>

              <h4 class="text-primary">
                <?php
                echo $titulo_especificacao6;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h4>
              <p class="mb-5">
                <?php
                echo $txt_especificacao6;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=txt_especificacao6'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="py-3 text-center bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 p-3">
              <img class="img-fluid sombra-colorida-orange" src="https://static.pingendo.com/img-placeholder-1.svg">
              <h3 class="mt-3"><b>Odontologia</b></h3>
              <p>Precisão, alta definição e resolução de camada a partir de 16μm, permite impressões lisas e extremamente fiés aos modelos digitais, ideal para a utilização na Odontologia.</p>
            </div>
            <div class="col-lg-3 p-3">
              <img class="img-fluid sombra-colorida-orange" src="https://static.pingendo.com/img-placeholder-2.svg">
              <h3 class="mt-3"><b>Joalheria</b></h3>
              <p>Detalhes minuciosos e delicadeza fazem parte do cotidiano das nossas impressões para joias finas com acabamento de superfície invejável.</p>
            </div>
            <div class="col-lg-3 p-3">
              <img class="img-fluid sombra-colorida-orange" src="https://static.pingendo.com/img-placeholder-3.svg">
              <h3 class="mt-3"><b>Manufatura</b></h3>
              <p>Na vanguarda da indústria 4.0. a impressão 3D possibilta produzir protótipos e produtos acabados, com velocidade, qualidade e precisão.</p>
            </div>
            <div class="col-lg-3 p-3">
              <img class="img-fluid sombra-colorida-orange" src="https://static.pingendo.com/img-placeholder-4.svg">
              <h3 class="mt-3"><b>Educação</b></h3>
              <p>Educação que transforma! Aplicada à educação a impressão 3D vem ganhando o mundo e revolucionando o aprendizado possibilitando a transformação de ideias para o mundo real.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="py-3 text-center bg-info">
        <div class="container">
          <div class="row">
            <div class="align-items-center d-flex justify-content-center col-md-3 p-3 order-2 order-md-1">
              <a class="ezy-lg ezy-orange ezy-button w-75" href="contato.php">
                <?php
                echo $button3;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=button3'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </a>
            </div>
            <div class="col-md-9 p-3 order-1 order-md-2">
              <h3 class="mb-0">
                <?php
                echo $titulo5;
                if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
                  echo "<a href='dashboard/alterar_texto.php?pagina=$pagina&apelido=titulo5'><i class='fas fa-edit ml-2 edit-txt'></i></a>";
                }
                ?>
              </h3>
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