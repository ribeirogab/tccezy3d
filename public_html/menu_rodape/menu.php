<?php
require "script.php";
require_once 'consultabd.php';
?>

<div id="opcoes">
  <?php
  if ($_SESSION['lang'] == 'pt') {
    echo "
    <span class='text-muted'>Selecione o seu idioma</span></br></br>
    <form id='formEn' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='en'>
    <a href='#' onClick='document.getElementById(\"formEn\").submit();'>English</a>
    </form>
    <form id='formEs' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='es'>
    <a href='#' onClick='document.getElementById(\"formEs\").submit();'>Español</a>
    </form>
    <form id='formPt' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='pt'>
    <a href='#' onClick='document.getElementById(\"formPt\").submit();' style='color:#d10027;'>Português</a>
    </form>
    ";
  } else if ($_SESSION['lang'] == 'en') {
    echo "
    <span class='text-muted'>Select your language</span></br></br>
    <form id='formEn' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='en'>
    <a href='#' onClick='document.getElementById(\"formEn\").submit();' style='color:#d10027;'>English</a>
    </form>
    <form id='formEs' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='es'>
    <a href='#' onClick='document.getElementById(\"formEs\").submit();'>Español</a>
    </form>
    <form id='formPt' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='pt'>
    <a href='#' onClick='document.getElementById(\"formPt\").submit();'>Português</a>
    </form>
    ";
  } else if ($_SESSION['lang'] == 'es') {
    echo "
    <span class='text-muted'>Seleccione su idioma</span></br></br>
    <form id='formEn' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='en'>
    <a href='#' onClick='document.getElementById(\"formEn\").submit();'>English</a>
    </form>
    <form id='formEs' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='es'>
    <a href='#' onClick='document.getElementById(\"formEs\").submit();' style='color:#d10027;'>Español</a>
    </form>
    <form id='formPt' action='alterar.php' method='post'>
    <input type='hidden' name='opcao' value='pt'>
    <a href='#' onClick='document.getElementById(\"formPt\").submit();'>Português</a>
    </form>
    ";
  }
  ?>
</div>

<div id="menu" class="fixed-top">
  <nav class="navbar navbar-expand navbar-dark p-0">
    <div class="position-absolute ml-5"><a href="home.php"><img src="img/logoHeader_laranja.png" width="80px"></a></div>

    <div id="idioma" class="mr-5">
      <span id="btntop"><i class="fas fa-globe"></i>
        <?php
        if ($_SESSION['lang'] == 'pt') {
          echo "PT";
        } else if ($_SESSION['lang'] == 'en') {
          echo "EN";
        } else if ($_SESSION['lang'] == 'es') {
          echo "ES";
        }
        ?>
        <i class="fas fa-caret-down"></i>
      </span>
    </div>


    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav m-auto">
        <li class="nav-item produtos">
          <a class="nav-link item" id="item1" href="#"><?= $produto ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link item" id="item2" href="como_comprar.php"><?= $comprar ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link item" id="item2" href="suporte.php"><?= $suporte ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link item" id="item2" href="contato.php"><?= $contato ?></a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<div id="produtos" class="container fixed-top">
  <div class="row" style="height: 500px">
    <div class="col-3 p-0 m-0" style="background-color: rgba(255,255,255,.9);">
      <ul class="m-0 p-3">
        <li class="list-menu" id="impressoras3d"><?= $impressoras ?> <i class="fas fa-caret-right float-right"></i></li>
        <li class="list-menu" id="acessorios"><?= $acessorios ?> <i class="fas fa-caret-right float-right"></i></li>
      </ul>
    </div>

    <div class="col-6 colhover2" id="info-impressoras3d1">
      <h5 class="pt-2"><?= $impressoras ?></h5>
      <center><img src="img/impressoras3d.jpg" class="mt-3" width="65%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtimpressora'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtimpressora</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-2'>$txtimpressora</p>";
      }
      ?>
    </div>

    <div class="col-3 colhover1 bg-ddd" id="impressoras3d1">
      <ul class="m-0 p-3">
        <li class="list-menu" id="msla">MSLA - LCD UV <i class="fas fa-caret-right float-right"></i></li>
        <li class="list-menu" id="fdm">FDM <i class="fas fa-caret-right float-right"></i></li>
      </ul>
    </div>
    <div class="col-3 colhover3 p-3" id="info-msla">
      <h5>MSLA - LCD UV</h5>
      <center><img src="img/msla.jpg" class="mt-2" width="80%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtmsla'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtmsla</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-2'>$txtmsla</p>";
      }
      ?>
    </div>
    <div class="col-3 colhover3 p-3" id="info-fdm">
      <h5>FDM</h5>
      <center><img src="img/fdm.jpg" class="mt-2" width="80%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
            <input type='hidden' name='apelido' value='txtfdm'>
            <input type='hidden' name='pagina' value='menu'>
            <button>$txtfdm</button>
            </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-2'>$txtfdm</p>";
      }
      ?>
    </div>

    <div class="col-3 colhover2 bg-ccc" id="impressoras3d2a">
      <ul class="m-0 p-3">
        <li class="list-menu" id="e1260t" onclick="window.location.href='printer_e1260t.php'">E1260T</li>
        <li class="list-menu" id="phylos" onclick="window.location.href='printer_phylos.php'">Phylos</li>
      </ul>
    </div>

    <div class="col-3 colhover2 bg-ccc" id="impressoras3d2b">
      <ul class="m-0 p-3">
        <li class="list-menu margin2opcao-menu" id="coreE3" onclick="window.location.href='printer_coreE3.php'">Core E3</li>
      </ul>
    </div>

    <div class="col-3 p-3 colhover3 bg-bbb" id="info-e1260t">
      <h5>E1260T</h5>
      <hr>
      <center><img src="img/printer_e1260t.png" width="40%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
            <input type='hidden' name='apelido' value='txte1260t'>
            <input type='hidden' name='pagina' value='menu'>
            <button>$txte1260t</button>
            </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-3'>$txte1260t</p>";
      }
      ?>
      <button class="btn btn-warning" onclick="window.location.href='printer_e1260t.php'"><?= $saibamais ?></button>
    </div>

    <div class="col-3 p-3 colhover3 bg-bbb" id="info-phylos">
      <h5>Phylos</h5>
      <hr>
      <center><img src="img/printer_phylos.png" width="40%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
            <input type='hidden' name='apelido' value='txtphylos'>
            <input type='hidden' name='pagina' value='menu'>
            <button>$txtphylos</button>
            </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-3'>$txtphylos</p>";
      }
      ?>
      <button class="btn btn-warning" onclick="window.location.href='printer_phylos.php'"><?= $saibamais ?></button>
    </div>

    <div class="col-3 p-3 colhover3 bg-bbb" id="info-coreE3">
      <h5>Core E3</h5>
      <hr>
      <center><img src="img/printer_coreE3.png" width="85%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtcoreE3'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtcoreE3</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-3'>$txtcoreE3</p>";
      }
      ?>
      <button class="btn btn-warning" onclick="window.location.href='printer_coreE3.php'"><?= $saibamais ?></button>
    </div>


    <div class="col-3 p-3 colhover1 bg-ddd" id="acessorios1">
      <ul class="m-0 p-0">
        <li class="list-menu margin2opcao-menu" id="camara-pos-cura"><?= $camara ?> <i class="fas fa-caret-right float-right"></i></li>
      </ul>
    </div>
    <div class="col-6 colhover2" id="info-acessorios1">
      <h5 class="pt-2">Acessórios</h5>
      <center><img src="img/acessorios.jpg" class="mt-3" width="65%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtacessorio'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtacessorio</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-2'>$txtacessorio</p>";
      }
      ?>
    </div>

    <div class="col-3 p-3 colhover2 bg-ccc" id="acessorios2">
      <ul class="m-0 p-0">
        <li class="list-menu margin2opcao-menu" id="ezycure" onclick="window.location.href='ezycure.php'">EZYCURE</li>
      </ul>
    </div>
    <div class="col-3 colhover3 p-3" id="info-camara-pos-cura">
      <h5><?= $camara ?></h5>
      <center><img src="img/camara-pos-cura.jpg" class="mt-2" width="80%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtcamara'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtcamara</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-2'>$txtcamara</p>";
      }
      ?>
    </div>


    <div class="col-3 p-3 colhover3 bg-bbb" id="info-ezycure">
      <h5>EZYCURE</h5>
      <hr>
      <center><img src="img/camara_ezycure.png" width="50%"></center>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtezycure'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtezycure</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555 mt-3'>$txtezycure</p>";
      }
      ?>
      <button class="btn btn-warning" onclick="window.location.href='ezycure.php'"><?= $saibamais ?></button>
    </div>

    <div class="col-4 bg-bbb menu-produtos">
      <h5 class="pt-2"><?= $produto ?></h5>
      <?php
      if (isset($_SESSION['adm'])) {
        echo
          "<form id='formPt' action='alterar_texto.php' method='post'>
        <input type='hidden' name='apelido' value='txtproduto'>
        <input type='hidden' name='pagina' value='menu'>
        <button>$txtproduto</button>
        </form>";
      } else {
        echo "<p class='fontsize15 fontcolor-555'>$txtproduto</p>";
      }
      ?>
    </div>
    <div class="col-5 menu-produtos" style="background-color: #bbb;">
      <center><img src="img/img-menu.jpg" class="margin-top-50" width="90%"></center>
    </div>
  </div>
</div>


<!-- -------------------------------- -->

<div id="menu-mobile" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div><a href="index.php"><img src="img/logoHeader_laranja.png" width="80px"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Impressoras
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item disabled ml-2 p-0 m-0" href="#">MSLA - LCD UV</a>
            <a class="dropdown-item" href="printer_e1260t.php">E1260T</a>
            <a class="dropdown-item" href="printer_phylos.php">Phylos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item disabled ml-2 p-0 m-0" href="#">FDM</a>
            <a class="dropdown-item" href="printer_coreE3.php">Core E3</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Acessórios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item disabled ml-2 p-0 m-0" href="#">Câmara pós-cura</a>
            <a class="dropdown-item" href="ezycure.php">EZYCURE</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="como_comprar.php">Como Comprar</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="suporte.php">Suporte</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span><i class="fas fa-globe"></i>
              <?php
              if ($_SESSION['lang'] == 'pt') {
                echo "PT";
              } else if ($_SESSION['lang'] == 'en') {
                echo "EN";
              } else if ($_SESSION['lang'] == 'es') {
                echo "ES";
              }
              ?>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            if ($_SESSION['lang'] == 'pt') {
              echo "
          <span class='text-muted pl-2'>Selecione o seu idioma</span></br></br>
          <form id='formEn' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='en'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEn\").submit();'>English</a>
          </form>
          <form id='formEs' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='es'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEs\").submit();'>Español</a>
          </form>
          <form id='formPt' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='pt'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formPt\").submit();' style='color:#d10027;'>Português</a>
          </form>
          ";
            } else if ($_SESSION['lang'] == 'en') {
              echo "
          <span class='text-muted pl-2'>Select your language</span></br></br>
          <form id='formEn' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='en'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEn\").submit();' style='color:#d10027;'>English</a>
          </form>
          <form id='formEs' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='es'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEs\").submit();'>Español</a>
          </form>
          <form id='formPt' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='pt'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formPt\").submit();'>Português</a>
          </form>
          ";
            } else if ($_SESSION['lang'] == 'es') {
              echo "
          <span class='text-muted pl-2'>Seleccione su idioma</span></br></br>
          <form id='formEn' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='en'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEn\").submit();'>English</a>
          </form>
          <form id='formEs' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='es'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formEs\").submit();' style='color:#d10027;'>Español</a>
          </form>
          <form id='formPt' action='alterar.php' method='post'>
          <input type='hidden' name='opcao' value='pt'>
          <a href='#' class='dropdown-item' onClick='document.getElementById(\"formPt\").submit();'>Português</a>
          </form>
          ";
            }
            ?>
          </div>
        </li>


      </ul>
    </div>
  </nav>
</div>