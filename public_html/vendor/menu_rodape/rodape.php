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
 <div class="bg-dark text-light">
   <div class="container">

     <div class="row">
       <div class="p-4 col-md-3">
         <h2 class="mb-4"><?= $rdp_titulo1 ?></h2>
         <p><?= $rdp_txt1 ?></p>
       </div>

       <div class="p-4 col-md-3">
         <h2 class="mb-4">Site</h2>
         <ul class="list-unstyled">
           <a href="#" class="text-light"><?= $item0 ?></a><br>
           <a href="#" class="text-light"><?= $item1 ?></a><br>
           <a href="#" class="text-light"><?= $item2 ?></a><br>
           <a href="#" class="text-light"><?= $item3 ?></a><br>
           <a href="#" class="text-light"><?= $item4 ?></a>
         </ul>
       </div>

       <div class="p-4 col-md-3">
         <h2 class="mb-4"><?= $rdp_titulo3 ?></h2>
         <p>
           <a href="#" class="text-light">
             <i class="fa d-inline mr-3 text-light fa-phone"></i>+55 - (15) 99745-8852
           </a>
         </p>

         <p>
           <a href="#" class="text-light">
             <i class="fa d-inline mr-3 text-light fa-envelope-o"></i>contato@ezy3d.com.br
           </a>
         </p>

         <p>
           <a href="#" class="text-light">
             <i class="fa d-inline mr-3 fa-map-marker text-light"></i>R. Luís de Camargo Barros, 20 - Vila Sao Cristovao, Tatuí - SP
           </a>
         </p>

       </div>

       <div class="p-4 col-md-3">
         <h2 class="mb-4">Redes Sociais</h2>
         <a class="icon-rsocial" href="https://www.facebook.com/EZY3DPRINTING/"><i class="icon-rsocial fab fa-facebook-square fa-2x mr-2"></i></a>
         <a class="icon-rsocial" href="https://www.instagram.com/ezy3d/"><i class=" fab fa-instagram fa-2x"></i></a>
       </div>
     </div>
   </div>
 </div>
 <div id="rodape">
   <span>
     <i class="far fa-copyright" style="margin-right: 5px;"></i>
     <?= $rdp_copy ?>
   </span>
 </div>

 <!-- Jquery -->
 <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
 <!-- MASK -->
 <script type="text/javascript" src="vendor/jquery/jquery.mask.js"></script>
 <!-- Bootstrap JS -->
 <script src="vendor/bootstrap/js/bootstrap.js"></script>

 <!-- Main JS -->
 <script src="vendor/js/menu.js"></script>

 <script src="vendor/js/logar_main.js"></script>
 <script src="vendor/js/voltarAoTopo.js"></script>
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
       $('#modalLogin').modal('show')
       $("input[name=email_login]").val(email)
       $("#focus-email").addClass('has-val');
     })
   }

   $("#btn-login").on("click", function() {
     let email = $("input[name=email_login]").val()
     let senha = $("input[name=senha_login]").val()
     $.ajax({
       // url: "http://www.ezy3d.com.br/controle/cliente.php",
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