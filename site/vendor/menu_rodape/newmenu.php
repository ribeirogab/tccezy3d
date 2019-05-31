<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/menu.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="../font/css/all.css">

<!--CSS
Add slick.css in your <head>
-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">

<!--JS
Add slick.js before your closing <body> tag, after jQuery (requires jQuery 1.7 +)
-->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="../bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" href="cssprinter.css">
  <title>Document</title>

  <style>
    #quadro {
      margin: 0 auto;
    }

    #quadro:hover {
      -moz-box-shadow: 0px 0px 5px 0px #222;
      -webkit-box-shadow: 0px 0px 5px 0px #222;
      box-shadow: 0px 0px 5px 0px #222;
    }

    #quadro-info {
      background-color: #F38919;
      width: 100%;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }

    #quadro-btns {
      background-color: #F9420C;
      width: 100%;
      margin: 0 auto;
    }

    #btn-orcamento {
      border-right: solid 0.5px rgba(0, 0, 0, .2);
    }

    #btn-saibamias {
      border-left: solid 0.5px rgba(0, 0, 0, .2);
    }

    #btn-orcamento,
    #btn-saibamais {
      cursor: pointer;
    }

    #btn-orcamento:hover,
    #btn-saibamais:hover {
      opacity: 0.5;
    }

    .product-info {
      position: absolute;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, .8);
    }

    .btn-info-product {
      position: relative;
      z-index: 5;
      cursor: pointer;
    }

    #btn-info-product:hover {
      color: blue;
    }

    .zoom img {
      transition: all 0.2s linear;
      overflow: hidden;
    }

    .zoom:hover img {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  </style>

<script>
$(function() {
 $('.slide').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 2000,
  });
});
</script>
</head>

<body class="mb-5 bg-dark">



<div class="slide">
  <div>slide box -1</div>
  <div>slide box -2</div>
  <div>slide box -3</div>
  <div>slide box -4</div>
</div>

  <main class="bg-info">


    <div class="container">
      <div class="row">
        <div class="col-6 bg-dark" style="margin-top:100px">
        aaaaaaaaaaaaaaaaaaa
        </div>
        <div class="col-3" style="background-color:#602480; height:300px;margin-top:100px">
          <?php include "printer.html"?>
        </div>
        <div class="col-3"></div>
      </div>
      <hr>

      <div class="container text-white mb-5">
        <div class="row">

          <div class="col-4">

            <div id="quadro" class="bg-danger zoom">
              <i id="btn-info-product1" class="btn-info-product fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <div id="product-info1" class="product-info"></div>
              <img src="e1260t.png" width="100%" alt="">
            </div>

            <div id="quadro-info" class="p-1 text-center">
              <h5><b>E1260T</b></h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2">Orçamento</div>
                <div id="btn-saibamais" class="col-6 text-center py-2">Saiba mais</div>
              </div>
            </div>

          </div>

          <div class="col-4">

            <div id="quadro" class="bg-danger zoom">
              <i id="btn-info-product2" class="fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <div id="product-info2"></div>
              <img src="e1260t.png" width="100%" alt="">
            </div>

            <div id="quadro-info" class="p-1 text-center">
              <h5><b>E1260T</b></h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2">Orçamento</div>
                <div id="btn-saibamais" class="col-6 text-center py-2">Saiba mais</div>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div id="quadro" class="bg-danger zoom">
              <i id="btn-info-product3" class="fas fa-info-circle float-right p-2" style="font-size:20px"></i>
              <div id="product-info3">
              </div>
              <img src="e1260t.png" width="100%" alt="">
            </div>
            <div id="quadro-info" class="p-1 text-center">
              <h5><b>E1260T</b></h5>
            </div>
            <div id="quadro-btns">
              <div class="row">
                <div id="btn-orcamento" class="col-6 text-center py-2">Orçamento</div>
                <div id="btn-saibamais" class="col-6 text-center py-2">Saiba mais</div>
              </div>
            </div>
          </div>

        </div>
      </div>
  </main>
</body>

</html>