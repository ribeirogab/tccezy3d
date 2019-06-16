<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>EZY3D - Impressoras 3D</title>
  <!-- LINK PARA COLOCAR ICONE NO TITLE -->
  <link rel="shortcut icon" type="image/x-icon" href="glj/img/ezy.ico">

  <!-- Meta tags obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="glj/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="glj/estilos/prov.css">
  <link rel="stylesheet" type="text/css" href="glj/estilos/provrdp.css">

  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="glj/font/css/all.css">

  <script src="glj/js/jquery.js"></script>


  <!-- fonte -->
  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
</head>

<meta name="description" content="A EZY3D se especializou na fabricação de Impressoras 3D, sendo uma empresa 100% brasileira. Comercializamos impressoras Brasil a fora. Assistência técnica garantida.">
<meta name="keywords" content="impressoras 3d, 3d printer, impressora fdm, impressora msla lcd uv, fdm, msla, comprar, impressora 3d, 3d, impressora">
<meta name="rebots" content="index, follow">
<meta name="googletbot" content="index, follow">
<meta name="author" content="Gabriel de Oliveira">
<meta content='Global' name='distribution'>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #191919;">
    <div class="container">
      <a class="navbar-brand active" href="index.php"><img src="glj/img/logoHeader_laranja.png" width="80px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSite">
        <ul class="navbar-nav">

        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="textMenu" href="#" data-toggle="dropdown" id="navDrop">Social</a>
            <div class="dropdown-menu bg-light">
              <a class="dropdown-item" href="https://www.facebook.com/EZY3DPRINTING/">Facebook</a>
              <a class="dropdown-item" href="https://www.instagram.com/ezy3d/">Instagram</a>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </nav>


  <main>

    <div id="banner" class="pb-3 anime">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12" id="textoHeader">
            <h1 class="mt-lg-3 display-4" id="titulo">Impressora 3D Desktop</h1><br>
            <h1 class="display-4" id="titulo2">MSLA - LCD UV</h1><br>
            <p class="text-muted display-4">Leve | Profissional | Precisa | Wi-Fi</p>
          </div>
          <div class="col-4" id="img-printer">
            <img class="float-right" src="glj/img/e1260t_aberta.png" width="68%">
          </div>
        </div>
      </div>
    </div>

    <div class="container">


      <div class="card-group cardGroupPrinter">
        <div class="card cardPrinter">
          <div class="card-body">
            <ul class="descricaoPrinter descricao1 mt-5">
              <h5>Resolução de 47 Mícrons <span class="ball">•</span></h5>
              <p class="text-muted paragrafoPrinter">Resolução XY de 47 Mícrons - detalhes e acabamentos finos.</p>

              <h5>Área de impressão <span class="ball">•</span></h5>
              <p class="text-muted paragrafoPrinter">Área útil de 116 x 65 x 140 mm, possibilitando o uso profissional.</p>

              <h5>Autonomia <span class="ball">•</span></h5>
              <p class="text-muted paragrafoPrinter">Wi-Fi, Ethernet e USB - Imprime sem precisar estar conectada a um computador.</p>
            </ul>
          </div>
        </div>

        <div class="card cardPrinter">
          <div class="card-body">
            <div class="img-printer">
              <img src="glj/img/printer1.png" class="img-printer" alt="">
            </div>
          </div>
        </div>

        <div class="card cardPrinter">
          <div class="card-body">
            <ul class="descricaoPrinter descricao2 mt-4">
              <h5><span class="ball">•</span> Precisão dimensional</h5>
              <p class="text-muted paragrafoPrinter">Impressões precisas em todos os eixos (XYZ).</p>

              <h5><span class="ball">•</span> Resolução de camada</h5>
              <p class="text-muted paragrafoPrinter">A partir de 16 μm até 200 μm - Impressões lisas e detalhadas.</p>

              <h5><span class="ball">•</span> Comodidade</h5>
              <p class="text-muted paragrafoPrinter">Você pode acessar a impressora pelo computador, tablet, ou celular.</p>
              <button class="btn btn-warning mt-2" data-toggle="modal" data-target="#modal6"><b style="color: #fff;">Saiba mais</b></button>
            </ul>
          </div>
        </div>
      </div>


      <!-- --------------------------------------- -->
      <div class="container">
        <ul class="descricaoPrinter1 descricao1 mb-4">
          <h5>Resolução de 47 Mícrons <span class="ball">•</span></h5>
          <p class="text-muted paragrafoPrinter">Resolução XY de 47 Mícrons - detalhes e acabamentos finos.</p>

          <h5>Área de impressão <span class="ball">•</span></h5>
          <p class="text-muted paragrafoPrinter">Área útil de 116 x 65 x 140 mm, possibilitando o uso profissional.</p>

          <h5>Autonomia <span class="ball">•</span></h5>
          <p class="text-muted paragrafoPrinter">Wi-Fi, Ethernet e USB - Imprime sem precisar estar conectada a um computador.</p>
        </ul>

        <div class="img-printer1">
          <img src="glj/img/printer1.png" class="img-printer1" alt="">
        </div>
        <ul class="descricaoPrinter1 descricao2 mt-4">
          <h5><span class="ball">•</span> Precisão dimensional</h5>
          <p class="text-muted paragrafoPrinter">Impressões precisas em todos os eixos (XYZ).</p>

          <h5><span class="ball">•</span> Resolução de camada</h5>
          <p class="text-muted paragrafoPrinter">A partir de 16 μm até 200 μm - Impressões lisas e detalhadas.</p>

          <h5><span class="ball">•</span> Comodidade</h5>
          <p class="text-muted paragrafoPrinter">Você pode acessar a impressora pelo computador, tablet, ou celular.</p>
          <button class="btn btn-warning mt-2" data-toggle="modal" data-target="#modal6"><b style="color: #fff;">Saiba mais</b></button>
        </ul>

      </div>



      <div class="modal fade bd-example-modal-lg" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1>EZY3D E1260T</h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <ul>
                <li>Software exclusivo, intuitivo e fácil de utilizar.</li>
                <li>Resolução em XY: 47 µm (uma das melhores do mercado).</li>
                <li>Resolução em Z: 16 a 200 µm (com resinas Makertech Labs).</li>
                <li>Tela LCD 5.5": 68 x 120 x 140 mm.</li>
                <li>Compacta e Robusta: 6,5kg, 20x20x40cm (CLA).</li>
                <li>Ethernet, Wi-Fi e USB.</li>
              </ul>
              <hr>
              <ul>
                <li>Resinas nacionais, com ampla gama de aplicações. (Makertechlabs)</li>
                <li>Arquivos STL, SLC, SVG, ZIP (PNG Arquivos).</li>
                <li>Precisão e rapidez: 18-20 mm/hora (a 50 µm).</li>
                <li>Calibradas individualmente para camadas (layers) de 50 µm.</li>
                <li>Baixo custo de manutenção.</li>
                <li><b>Assistência técnica e garantia no Brasil.</b></li>
              </ul>
              <hr>
            </div>

          </div>
        </div>
      </div>
    </div>



    <div class="mt-5" id="info">
      <div class="card-group container">

        <div class="card cardEx mr-4">
          <img class="card-img-top" src="glj/img/odontologia.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h4 class="card-title">
              Odontologia
            </h4>
            <p class="card-text text-muted">
              Precisão, alta definição e resolução de camada a partir de 16μm, permite impressões lisas e extremamente fiés aos modelos digitais, ideal para a utilização na Odontologia.
            </p>
          </div>
        </div>

        <div class="card cardEx mr-4">
          <img class="card-img-top" src="glj/img/joalheria.jpg" alt="Imagem de capa do card">
          <div class="card-body">

            <h4 class="card-title">
              Joalheria
            </h4>

            <p class="card-text text-muted">
              Detalhes minuciosos e delicadeza fazem parte do cotidiano das nossas impressões para joias finas com acabamento de superfície invejável.
            </p>
          </div>
        </div>

        <div class="card cardEx mr-4">
          <img class="card-img-top" src="glj/img/manufatura.jpg" alt="Imagem de capa do card">
          <div class="card-body">

            <h4 class="card-title">
              Manufatura
            </h4>

            <p class="card-text text-muted">
              Na vanguarda da indústria 4.0. a impressão 3D possibilta produzir protótipos e produtos acabados, com velocidade, qualidade e precisão.
            </p>
          </div>
        </div>


        <div class="card cardEx">
          <img class="card-img-top" src="glj/img/educacao.jpg" alt="Imagem de capa do card">
          <div class="card-body">

            <h4 class="card-title">
              Educação
            </h4>

            <p class="card-text text-muted">
              Educação que transforma! Aplicada à educação a impressão 3D vem ganhando o mundo e revolucionando o aprendizado possibilitando a transformação de ideias para o mundo real.
            </p>

          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
    <div class="container mb-5">
      <center>
        <h1 class="mt-lg-5 display-3" id="custoBeneficio">O Melhor Custo/Beneficio</h1>
      </center>
      <p class="mt-2 text-muted" id="pcb">Esse é o nosso lema, essa é a nossa missão!<br>A EZY 3D se especializou na fabricação de Impressoras 3D, sendo uma empresa 100% brasileira. Nossos produtos são desenvolvidos em territótio nacional e nosso processo não se trata de uma simples montagem de partes e peças importadas. O diferencial da EZY 3D está em sua equipe e na utilização de componentes de alta qualidade e última geração para transformar nossas impressoras em verdadeiras máquinas profissionais, capazes de criar tudo com qualidade e precisão.</p>
    </div>

    <footer>

      <div id="about" class="teste">
        <img src="img/logo-footer.jpg" width="100px" alt=""><br>
        <span>
          EZY 3D - Impressoras 3D<br>
          CNPJ: 18.170.692/0001-81<br><br>
          <a href="https://www.facebook.com/EZY3DPRINTING/" style="color: #fff;"><i class="fab fa-facebook-square rsocial mr-1"></i></a>
          <a href="https://www.instagram.com/ezy3d/" style="color: #fff;"><i class="fab fa-instagram rsocial"></i></a>
        </span>
      </div>


      <div id="cntt" class="display-4 teste pt-lg-4">
        <h5>Contato</h5>

        <i class="fas fa-phone mt-3 mr-3"></i>
        <span>
          (11) 95245-3334 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (15) 4101-0014
        </span><br>

        <i class="fas fa-map-marker mt-3 mr-3"></i>
        <span>
          R. Luís de Camargo Barros, 20 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bloco B - Vila São Cristovão,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tatuí - SP - 18280-010
        </span><br>

        <i class="fas fa-envelope mt-3 mr-3"></i>
        <span>
          contato@ezy3d.com.br<br>
        </span><br>

      </div>

    </footer> <!-- FIM PARTE SUPERIOR DO RODAPÉ -->
    <div id="rodape">
      <span>
        <i class="far fa-copyright" style="margin-right: 5px;"></i>
        Todos os direitos reservados | EZY3D Printing
      </span>
    </div>
  </main>
  <!-- Opcional JavaScript -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="glj/js/jquery.js"></script>
  <script src="glj/js/popper.js"></script>
  <script src="glj/js/bootstrap.js"></script>
</body>

</html>