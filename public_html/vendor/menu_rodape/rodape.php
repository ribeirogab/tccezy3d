 <?php
  if ($visivelr != true) {
    header("Location: ../../home.php");
  }
  ?>

 <link rel="stylesheet" href="vendor/css/rodape.css">

 <div class="smoothscroll-top">
   <span class="scroll-top-inner">
     <i class="fas fa-2x fa-angle-up"></i>
   </span>
 </div>

 <div id="faixa">
   <div class="container">
     <div class="row text-center">
       <div class="col-2"></div>
       <div class="col-md-3">
         <a href="como_comprar.php" style="text-transform: uppercase;"><?= $rdp_comocomprar ?></a>
       </div>

       <div class="col-md-2">
         <a href="contato.php" style="text-transform: uppercase;"><?= $rdp_contato ?></a>
       </div>

       <div class="col-md-3">
         <a href="suporte.php" style="text-transform: uppercase;"><?= $rdp_suporteaocliente ?></a>
       </div>
       <div class="col-2"></div>
     </div>
   </div>
 </div>
 <div id="footer">
   <div class="container pt-5 pb-5">
     <div class="row">
       <div class="col-6 col-md-3">
         <h6><b>Impressoras 3D</b></h6 class="rdpt">
         <span class="ml-2">MSLA - LCD UV</span><br>
         <a href="printer_e1260t.php" class="ml-4">E1260T</a><br>
         <a href="printer_phylos.php" class="ml-4">Phylos</a><br><br>

         <span class="ml-2">FDM</span><br>
         <a href="printer_coree3.php" class="ml-4">Core E3</a><br>
       </div>

       <div class="col-6 col-md-3">
         <h6><b>Acessórios</b></h6 class="rdpt">
         <span class="ml-2">Câmara pós-cura</span><br>
         <a href="acessorio_ezycure.php" class="ml-4">EZYCURE</a><br>
       </div>

       <div class="mt-5 mt-md-0 col-6 col-md-3">
         <h6><b>Contato</b></h6 class="rdpt">
         <span class="ml-2">Telefone</span><br>
         <span class="ml-4">(11) 95245-3334</span><br>
         <span class="ml-4">(15) 4101-0014 </span><br><br>

         <span class="ml-2">E-mail</span><br>
         <span class="ml-4">contato@ezy3d.com.br</span><br>
       </div>

       <div class="mt-5 mt-md-0 col-6 col-md-3">
         <h6><b>Conecte-se conosco:</b></h6 class="rdpt">
         <a href="https://www.facebook.com/EZY3DPRINTING/"><i class="fab fa-facebook-square ml-4"></i><span class="rds"> Facebook</span></a><br>
         <a href="https://www.instagram.com/ezy3d/"><i class="fab fa-instagram ml-4"></i><span class="rds"> Instagram</span></a>
       </div>
     </div>

   </div>
 </div>

 <div id="rodape">
   <span>
     <i class="far fa-copyright" style="margin-right: 5px;"></i>
     Todos os direitos reservados
     <?= $rdp_copy ?>
   </span>
 </div>

 <!-- Jquery -->
 <script src="vendor/jquery/jquery-2.2.0.min.js" type="text/javascript"></script>
 <!-- Bootstrap JS -->
 <script src="vendor/bootstrap/js/bootstrap.js"></script>

 <script>
   <?php
    if (isset($_GET["email"])) {
      $getEmail = $_GET["email"];
    } else {
      $getEmail = 'null';
    }
    ?>

   if ('<?= $getEmail ?>' != 'null') {
     let email = '<?= $getEmail ?>'
     $(document).ready(function() {
       $('#modalLogin').modal()
       $("input[name=email_login]").val(email)
       $("#focus-email").addClass('has-val');
     })
   }

   $("#btn-login").on("click", function() {
     let email = $("input[name=email_login]").val()
     let senha = $("input[name=senha_login]").val()
     $.ajax({
       //  url: "http://www.ezy3d.com.br/controle/cliente.php",
       url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
       method: "POST",
       data: {
         "tipo": "verificarLogin",
         "email": email,
         "senha": senha
       },
       success: function(resposta) {
         let requisicao = 0;
         var json = $.parseJSON(resposta)
         let verificarLogin = json[0][0]

         if (email.length == 0 || senha.length == 0) {
           $("#loginIncorreto").hide()
           $("#infoIncorreta").fadeIn('slow')
         } else {
           $("#infoIncorreta").hide()

           if (verificarLogin != 1)
             $("#loginIncorreto").fadeIn('slow')
           else {
             $("#loginIncorreto").hide()
             requisicao++
           }

           if (requisicao === 1) {
             $("#form-modal-login").submit();
           }
         }
       },
       error: function() {
         alert("Erro ao fazer a requisição")
       }
     });
   });

   $("#btnClose-loginIncorreto").click(function() {
     $("#loginIncorreto").hide()
   })
 </script>
 <!-- MASK -->
 <script type="text/javascript" src="vendor/jquery/jquery.mask.js"></script>

 <!-- Main JS -->
 <script src="vendor/js/menu.js"></script>

 <script src="vendor/js/logar_main.js"></script>
 <script src="vendor/js/voltarAoTopo.js"></script>

 <script src="vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>
 <script>
   // $(window).resize(function() {
   //   document.location.reload();
   // });

   $(document).on('ready', function() {
     let largura = screen.width
     if (largura > 767) {
       $(".center").slick({
         dots: false,
         infinite: false,
         centerMode: false,
         slidesToShow: 3,
         slidesToScroll: 1
       });
     } else {
       $(".center").slick({
         dots: false,
         infinite: false,
         centerMode: false,
         slidesToShow: 1,
         slidesToScroll: 1
       });
     }
   });
 </script>