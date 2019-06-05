<script src="menu_rodape/voltarAoTopo.js"></script>

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
        <a href="como_comprar.php"><?=$rdpcomprar?></a>
    </div>

    <div class="col-md-2">
        <a href="contato.php" style="text-transform: uppercase;"><?=$rdpcontato?></a>
    </div>

    <div class="col-md-3">
        <a href="suporte.php"><?=$rdpsuporte?></a>
    </div>
    <div class="col-2"></div>
</div>
</div>
</div>
<div id="footer">
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-md-3">
        <h6 class="rdpt"><?=$rdpimpressoras?></h6 class="rdpt">
          <span class="ml-2">MSLA - LCD UV</span><br>
          <a href="printer_e1260t" class="ml-4">E1260T</a><br>
          <a href="printer_phylos" class="ml-4">Phylos</a><br><br>

          <span class="ml-2">FDM</span><br>
          <a href="printer_coreE3" class="ml-4">Core E3</a><br>
      </div>

      <div class="col-md-3">
          <br class="d-md-none"><br class="d-md-none">
          <h6 class="rdpt"><?=$rdpacessorios?></h6 class="rdpt">
            <span class="ml-2"><?=$rdpcamara?></span><br>
            <a href="ezycure" class="ml-4">EZYCURE</a><br>
        </div>

        <div class="col-md-3">
            <br class="d-md-none"><br class="d-md-none">
            <h6 class="rdpt"><?=$rdpcontato?></h6 class="rdpt">
              <span class="ml-2"><?=$rdptelefone?></span><br>
              <span class="ml-4">(11) 95245-3334</span><br>
              <span class="ml-4">(15) 4101-0014 </span><br><br>

              <span class="ml-2"><?=$rdpemail?></span><br>
              <span class="ml-4">contato@ezy3d.com.br</span><br>
          </div>

          <div class="col-md-3">
           <br class="d-md-none"><br class="d-md-none">
           <h6 class="rdpt"><?=$rdpconecte?></h6 class="rdpt">
             <a href="https://www.facebook.com/EZY3DPRINTING/"><i class="fab fa-facebook-square ml-4"></i><span class="rds"> Facebook</span></a><br>
             <a href="https://www.instagram.com/ezy3d/"><i class="fab fa-instagram ml-4"></i><span class="rds"> Instagram</span></a>
         </div>
     </div>

 </div>
</div>


<div id="rodape">
    <span>
      <i class="far fa-copyright" style="margin-right: 5px;"></i>
      <?=$rdpdireitos?> | EZY3D Printing
  </span>
  <span>
      <?php 
      if (isset($_SESSION['adm'])) {
        echo "<a href='deslogar.php'>Sair</a>";
    }
    else{
        echo "<a href='login.php'>Painel administrativo</a>";
    }
    ?>
</span>
</div>


