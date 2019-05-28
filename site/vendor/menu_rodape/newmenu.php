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
<!-- Jquery -->
<script type="text/javascript" src="../jquery/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="../bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="cssprinter.css">
  <title>Document</title>

  <style>
  #quadro{
    background-image: url(e1260t.png);
    background-size: 100%;
    height: 300px;
    width: 250px;
  }
  #quadro:hover{
    -moz-box-shadow: 0px 0px 5px 0px #222;
	  -webkit-box-shadow:  0px 0px 5px 0px #222;
	  box-shadow: 0px 0px 5px 0px #222;
  }
  #quadro-info{
background-color: #F38919;
    width: 250px;
  }
  #quadro-btns{
background-color: #F9420C;
    width: 250px;
  }
#btn-orcamento{
  border-right: solid 0.5px rgba(0,0,0,.2);
}
#btn-saibamias{
  border-left: solid 0.5px rgba(0,0,0,.2);
}
#btn-orcamento, #btn-saibamais{
    cursor: pointer;
  }
#btn-orcamento:hover, #btn-saibamais:hover{
   opacity: 0.5;
  }
  #product-info{
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.8);
  }
  #product-info{
    display:none;
  }
  #btn-info-product{
    cursor: pointer;
  }
    #btn-info-product:hover{
    color: blue;
  }
  </style>

  <script>
  $(document).ready(function(){
    $("#btn-info-product").click(function(){
      $("#product-info").toggle()
    })
  })
  </script>
</head>
<body class="mb-5">
<div class="container">
  <div class="row">
    <div class="col-6 bg-dark">
    </div>
    <div class="col-3" style="background-color:#602480; height:300px;">
      <?php include "printer.html"?>
    </div>
    <div class="col-3"></div>
  </div>
<hr>

<div class="container text-white">

  <div id="quadro" class="bg-danger">
    <i id="btn-info-product" class="fas fa-info-circle float-right p-2" style="font-size:20px"></i>
    <div id="product-info">
    </div>
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
</body>
</html>