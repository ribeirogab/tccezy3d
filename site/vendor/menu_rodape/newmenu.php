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
  z-index: 5;
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
.zoom-menu img {
  transition: all 0.2s linear;
  overflow: hidden;
}
.zoom-menu:hover img {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}
nav{
  width: 100%;
  color: #fff;
  border-bottom: solid 1px rgba(0,0,0,.0);
  z-index: 10;
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
  top: 73px;
  width: 100%;
  background-color: #fff;
  display: none;
  z-index: 10;
}
#toggle_1, #toggle_2, #toggle_3{
  display:none;
}
#toggle_1 .row, #toggle_2 .row, #toggle_3 .row{

}
.nomes-printers{
  transition: 0.5s;
  color: #333;
  cursor: pointer;
  display: block;
  text-decoration: none !important;
  font-weight: 500;
  font-size: 15px;
}
.nomes-printers:hover{
  transition: 0.5s;
  color: orange;
}
.pb-50px{
  padding-bottom: 40px;
}
#div-printer1, #div-printer2, #div-printer3{
  height:250px;
  width:166px;
  margin: 0 auto;
}
#foto-printer1, #foto-printer2, #foto-printer3, #nome-printer1, #nome-printer2, #nome-printer3, #menu-acessorios, #lista-acessorios, #foto-acessorios, #menu-aplicacoes, #lista-aplicacoes, #foto-aplicacoes{
  opacity: 0;
}
.fotos-printers{
  cursor:pointer;
}
</style>

<script>
  $(document).ready(function(){
    $("#btn-info-product1").click(function(){
      $("#product-info1").toggle()
    })



    // MENU
    // *Trocar a cor do menu, adicionar borda superior, mudar cor do logo e abrir 'menu-toggle'
    $(".borda-item").hover(function(){
      let iditem = this.id.split("_")[1]
      $("#item_"+iditem).css("border-top", "solid 5px orange")

      let idelemento = $("#item_"+iditem).attr("id")
      $.each( $( ".borda-item" ), function() {
        if (idelemento != this.id)
          $("#"+this.id).css("border-top", "solid 5px rgba(0,0,0,.0)")
        if (idelemento == "item_4"){
          $("#menu-toggle").slideUp("fast")
          $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
        } else {
          $("#menu-toggle").slideDown("fast")
          $("#menu-toggle").css({"transition": "0s", "opacity": "100"})
        }
      })

      $("nav").css({"background-color": "#fff", "box-shadow": "0px 0px 0px 0px #666", "border-bottom": "solid 1px rgba(0,0,0,.1)", "transition": "0.1s"})
      $(".menu-item").css("color", "#000")
      $(".menu-item-right").css("color", "#000")
      $("#logo").attr("src", "../img/logo/logo_orange.svg")
      $("main").css({"opacity": "0.5"})

    })
    // -----

    // *Mudando a cor do menu e adicionando sombra ao rolar a página

  let lastScrollTop = 0;
    $(window).scroll(function(){
      let st = $(this).scrollTop()
      if (st > 0){
        $("nav").css({"background-color": "#fff", "border-bottom": "solid 1px rgba(0,0,0,.1)", "transition": "0.5s"})
        $(".menu-item").css("color", "#000")
        $(".menu-item-right").css("color", "#000")
        $("#logo").attr("src", "../img/logo/logo_orange.svg")
        let dmenu = $("#menu-toggle").css("display")
        if (dmenu == "none"){
            $("nav").css({"box-shadow": "0px 0px 5px 0px #666"})
          }

        // *Voltar ao estado padrão ao passar o mouse fora do menu
        $("main").hover(function(){
          let st = $(window).scrollTop()
            $("nav").css({"border-bottom": "solid 1px rgba(0,0,0,.0)", "transition": "0.s"})
            $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
            $("#menu-toggle").slideUp("fast")
            $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
            $("main").css({"opacity": "1"})
            $('.fotos-printers').css({"opacity": "0"})
            $('.nomes-printers').css({"opacity": "0"})
            $('.div-acessorios').css({"opacity": "0"})
            let dmenu = $("#menu-toggle").css("display")
            if (st != 0){
              $("nav").css({"box-shadow": "0px 0px 5px 0px #666"})
            }
        })
        // -----

        // *Voltar ao estado padrão ao passar o mouse nos intens da direita do menu
        $(".menu-item-right").hover(function(){
          let st = $(window).scrollTop()
            $("nav").css({"border-bottom": "solid 1px rgba(0,0,0,.0)", "transition": "0.3s"})
            $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
            $("#menu-toggle").slideUp("fast")
            $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
            $("main").css({"opacity": "1"})
            $('.fotos-printers').css({"opacity": "0"})
            $('.nomes-printers').css({"opacity": "0"})
            $('.div-acessorios').css({"opacity": "0"})
            $('.div-aplicacoes').css({"opacity": "0"})
            let dmenu = $("#menu-toggle").css("display")
            if (st != 0){
              $("nav").css({"box-shadow": "0px 0px 5px 0px #666"})
            }
        })
        // -----
      } else {
        $("nav").css({"box-shadow": "0px 0px 0px 0px #666", "transition": "0.5s"})
        let dmenu = $("#menu-toggle").css("display")
        if (dmenu == "none"){
          $(".menu-item").css({"color": "#fff", "transition": "0.5s"})
          $(".menu-item-right").css({"color": "#fff", "transition": "0.5s"})
          $("#logo").attr("src", "../img/logo/logo_white.svg")
          $("nav").css({"border-bottom": "solid 1px rgba(0,0,0,.0)", "background-color": "rgba(0,0,0,.0)", "transition": "0.5s"})
        }
      }
      lastScrollTop = st;
    })
    // -----

    // *Voltar ao estado padrão ao passar o mouse fora do menu
    $("main").hover(function(){
      let st = $(window).scrollTop()
      if (st == 0){
        $("nav").css({"background-color": "rgba(0,0,0,.0)", "border-bottom": "solid 1px rgba(0,0,0,.0)", "transition": "0.s"})
        $(".menu-item").css("color", "#fff")
        $(".menu-item-right").css("color", "#fff")
        $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
        $("#menu-toggle").slideUp("fast")
        $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
        $("#logo").attr("src", "../img/logo/logo_white.svg")
        $("main").css({"opacity": "1"})
        $('.fotos-printers').css({"opacity": "0"})
        $('.nomes-printers').css({"opacity": "0"})
        $('.div-acessorios').css({"opacity": "0"})
        $('.div-aplicacoes').css({"opacity": "0"})
      }
    })
    // -----

    // *Voltar ao estado padrão ao passar o mouse nos intens da direita do menu
    $(".menu-item-right").hover(function(){
      let st = $(window).scrollTop()
      if (st == 0){
        $("nav").css({"background-color": "rgba(0,0,0,.0)", "border-bottom": "solid 1px rgba(0,0,0,.0)", "transition": "0.3s"})
        $(".menu-item").css("color", "#fff")
        $(".menu-item-right").css("color", "#fff")
        $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)")
        $("#menu-toggle").slideUp("fast")
        $("#menu-toggle").css({"transition": "0.3s", "opacity": "0"})
        $("#logo").attr("src", "../img/logo/logo_white.svg")
        $("main").css({"opacity": "1"})
        $('.fotos-printers').css({"opacity": "0"})
        $('.nomes-printers').css({"opacity": "0"})
        $('.div-acessorios').css({"opacity": "0"})
        $('.div-aplicacoes').css({"opacity": "0"})
      }
     })
    // -----

    $("#item_1").hover(function(){
      $("#toggle_1").show();
      $('#foto-printer1').stop().animate({height: 'show', opacity: 1}, 250, function() {
        $('#foto-printer2').stop().animate({height: 'show', opacity: 1}, 250, function() {
             $('#foto-printer3').stop().animate({height: 'show', opacity: 1}, 250)
        })
      })

        $('#nome-printer1').stop().animate({height: 'show', opacity: 1}, 250, function() {
          $('#nome-printer2').stop().animate({height: 'show', opacity: 1}, 250, function() {
            $('#nome-printer3').stop().animate({height: 'show', opacity: 1}, 250)
        })
      })

      $("#toggle_2").hide()
      $('.div-acessorios').css({"opacity": "0"})

      $("#toggle_3").hide()
      $('.div-aplicacoes').css({"opacity": "0"})
    })


    $("#item_2").hover(function(){
      $("#toggle_1").hide()
      $('.fotos-printers').css({"opacity": "0"})
      $('.nomes-printers').css({"opacity": "0"})

      $("#toggle_2").show()
      $('#menu-acessorios').stop().animate({height: 'show', opacity: 1}, 250, function() {
          $('#lista-acessorios').stop().animate({height: 'show', opacity: 1}, 250, function() {
            $('#foto-acessorios').stop().animate({height: 'show', opacity: 1}, 250)
        })
      })


      $("#toggle_3").hide()
      $('.div-aplicacoes').css({"opacity": "0"})
    })

    $("#item_3").hover(function(){
      $("#toggle_1").hide()
      $('.fotos-printers').css({"opacity": "0"})
      $('.nomes-printers').css({"opacity": "0"})

      $("#toggle_2").hide()
      $('.div-acessorios').css({"opacity": "0"})

      $("#toggle_3").show()
      $('#menu-aplicacoes').stop().animate({height: 'show', opacity: 1}, 250, function() {
          $('#lista-aplicacoes').stop().animate({height: 'show', opacity: 1}, 250, function() {
            $('#foto-aplicacoes').stop().animate({height: 'show', opacity: 1}, 250)
        })
      })
    })

    $("#item_4").hover(function(){
      $("#toggle_1").hide()
      $('.fotos-printers').css({"opacity": "0"})
      $('.nomes-printers').css({"opacity": "0"})

      $("#toggle_2").hide()
      $('.div-acessorios').css({"opacity": "0"})

      $("#toggle_3").show()
      $('.div-aplicacoes').css({"opacity": "0"})
    })

  })
</script>
</head>
<body class="mb-5 bg-dark">


  <nav class="navbar navbar-expand-lg p-0 fixed-top">
    <div class="container">
      <a class="navbar-brand borda-topo text-white menu-item" href="#">
        <img id="logo" src="../img/logo/logo_white.svg" height="40px">
      </a>
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
  <div id="menu-toggle" class="fixed-top">

    <div  class="container h-100 w-100">

      <div id="toggle_1">
      <div class="row pt-4 pb-50px">
        <div class="col-4 text-center">
          <div id="div-printer1" class="zoom-menu">
           <img class="fotos-printers" id="foto-printer1" src="e1260tmenu.png" height="100%">
          </div>
          <a href="#" id="nome-printer1" class="mt-2 nomes-printers">E1260T</a>
        </div>

        <div class="col-4 text-center">
          <div id="div-printer2" class="zoom-menu">
           <img class="fotos-printers" id="foto-printer2" src="e1260tmenu.png" height="100%">
          </div>
          <a href="#" id="nome-printer2" class="mt-2 nomes-printers">E1260T</a>
        </div>

        <div class="col-4 text-center">
          <div id="div-printer3" class="zoom-menu">
           <img class="fotos-printers" id="foto-printer3" src="e1260tmenu.png" height="100%">
          </div>
          <a href="#" id="nome-printer3" class="mt-2 nomes-printers">E1260T</a>
        </div>
      </div>
      </div>

     </div>

    <div  class="container h-100 w-100 pr-0 mr-0">

      <div id="toggle_2">
      <div class="row">
        <div id="menu-acessorios" class="col-3 div-acessorios pt-4 pb-50px" style="border-right: solid 1px rgba(0,0,0,.1)">
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Câmara pós-cura</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Câmara pós-cura</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Câmara pós-cura</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Câmara pós-cura</span><i class="fas fa-chevron-right float-right"></i>
          </div>
        </div>


        <div id="lista-acessorios" class="col-3 div-acessorios pt-4 pb-50px" style="color: black">
          <div class="p-2">
            <span>Câmara pós-cura</span>
          </div>
          <div class="p-2">
            <span>Câmara pós-cura</span>
          </div>
          <div class="p-2">
            <span>Câmara pós-cura</span>
          </div>
          <div class="p-2">
            <span>Câmara pós-cura</span>
          </div>
        </div>

        <div id="foto-acessorios" class="div-acessorios text-center col-6">
          <div class="w-100 h-100 bg-dark"></div>
        </div>
      </div>
      </div>

    </div>


    <div  class="container h-100 w-100 pr-0 mr-0">

      <div id="toggle_3">
      <div class="row">

        <div id="menu-aplicacoes" class="col-3 div-aplicacoes pt-4 pb-50px" style="border-right: solid 1px rgba(0,0,0,.1)">
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Odontologia</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Odontologia</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Odontologia</span><i class="fas fa-chevron-right float-right"></i>
          </div>
          <div class="bg-dark p-2" style="border-radius: 20px">
            <span>Odontologia</span><i class="fas fa-chevron-right float-right"></i>
          </div>
        </div>


        <div id="lista-aplicacoes" class="col-3 div-aplicacoes pt-4 pb-50px" style="color: black">
          <div class="p-2">
            <span>Odontologia</span>
          </div>
          <div class="p-2">
            <span>Odontologia</span>
          </div>
          <div class="p-2">
            <span>Odontologia</span>
          </div>
          <div class="p-2">
            <span>Odontologiacura</span>
          </div>
        </div>

        <div id="foto-aplicacoes" class="div-aplicacoes text-center col-6">
          <div class="w-100 h-100 bg-danger"></div>
        </div>
      </div>
      </div>

    </div>
    </div>

  </div>


  <main class="bg-info">


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