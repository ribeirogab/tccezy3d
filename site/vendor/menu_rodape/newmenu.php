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
    margin: 0 auto;
  }
  #quadro:hover{
    -moz-box-shadow: 0px 0px 5px 0px #222;
    -webkit-box-shadow:  0px 0px 5px 0px #222;
    box-shadow: 0px 0px 5px 0px #222;
  }
  #quadro-info{
    background-color: #F38919;
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }
  #quadro-btns{
    background-color: #F9420C;
    width: 100%;
    margin: 0 auto;
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
 .product-info{
   position: absolute;
   height:100%;
  width: 100%;
  background-color: rgba(0,0,0,.8);
}
.btn-info-product{
  position: relative;
  z-index: 10;
  cursor: pointer;
}
#btn-info-product:hover{
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
nav{
  position: absolute;
  width: 100%;
  color: #fff;
}
nav li a{
  display: inline;
}
.borda-topo{
  border-top: solid 5px rgba(0,0,0,.0);
}
.borda-item{
  border-top: solid 5px rgba(0,0,0,.0);
  color: #fff;
}
.borda-item:hover{
  border-top: solid 5px orange;
}
.menu-item-right{
  color: #fff;
}
#menu-toggle{
  opacity: 0;
  width: 100%;
  height: 400px;
  background-color: #fff;
  display: none;
  position: absolute;
  z-index: 10;
}
</style>

<script>
  $(document).ready(function(){
    $("#btn-info-product1").click(function(){
      $("#product-info1").toggle()
    })

    $(".borda-item").hover(function(){
      let iditem = this.id.split("_")[1]
      $("#item_"+iditem).css("border-top", "solid 5px orange")

      let idelemento = $("#item_"+iditem).attr("id")
      $.each( $( ".borda-item" ), function() {
				if (idelemento != this.id)
					$("#"+this.id).css("border-top", "solid 5px rgba(0,0,0,.0)")
			})

      $("nav").css({"background-color": "#fff", "border-bottom": "solid 1px rgba(0,0,0,.1)", "transition": "0.1s"})
      $(".menu-item").css("color", "#000")
      $(".menu-item-right").css("color", "#000")
      $("#menu-toggle").slideDown("fast")
      $("#menu-toggle").css({"transition": "0s", "opacity": "100"})
    })

    $("main").hover(function(){
      $("nav").css({"background-color": "rgba(0,0,0,.0)", "transition": "0.3s"})
      $(".menu-item").css("color", "#fff")
      $(".menu-item-right").css("color", "#fff")
      $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
      $("#menu-toggle").slideUp("fast")
      $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
    })
    $(".menu-item-right").hover(function(){
      $("nav").css({"background-color": "rgba(0,0,0,.0)", "transition": "0.3s"})
      $(".menu-item").css("color", "#fff")
      $(".menu-item-right").css("color", "#fff")
      $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
      $("#menu-toggle").slideUp("fast")
      $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
    })
  })
</script>
</head>
<body class="mb-5 bg-dark">


<nav class="navbar navbar-expand-lg p-0">
<div class="container">
  <a class="navbar-brand borda-topo text-white menu-item" href="#">Navbar</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a id="item_1" class="nav-link p-3 borda-item menu-item" href="#">Impressoras 3D</a>
      </li>
      <li class="nav-item">
        <a id="item_2" class="nav-link p-3 borda-item menu-item" href="#">Acessórios</a>
      </li>
      <li class="nav-item">
        <a id="item_3" class="nav-link p-3 borda-item menu-item" href="#">Aplicações</a>
      </li>
      <li class="nav-item">
        <a id="item_4" class="nav-link p-3 borda-item menu-item" href="#">Contato</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-right">
      <li class="nav-item">
        <a class="nav-link p-3 borda-top menu-item-right" href="#">Logar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-2 borda-top menu-item-right" href="#"><div class="bg-primary text-white p-2">Cadastrar</div></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-3 borda-top menu-item-right" href="#">Português <i class="fas fa-caret-down"></i></a>
      </li>
    </ul>
    </div>
</nav>
<div id="menu-toggle">

</div>
<main>


  <div class="container" >
    <div class="row">
      <div class="col-6 bg-dark" style="margin-top:100px">
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