 <?php 
 if ($visivelr != true) {
  header("Location: ../../home.php");
}
?>
<script src="vendor/js/voltarAoTopo.js"></script>
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
        <a href="como_comprar.php">COMO COMPRAR</a>
      </div>

      <div class="col-md-2">
        <a href="contato.php" style="text-transform: uppercase;">CONTATO</a>
      </div>

      <div class="col-md-3">
        <a href="suporte.php">SUPORTE AO CLIENTE</a>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
<div class="bg-dark text-light">
  <div class="container">

    <div class="row">
      <div class="p-4 col-md-3">
        <h2 class="mb-4">EZY 3D</h2>
        <p>A company for whatever you may need, from website prototyping to publishing</p>
      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4">Site</h2>
        <ul class="list-unstyled">
          <a href="#" class="text-light">Inicio</a><br>
          <a href="#" class="text-light">Impressoras 3D</a><br>
          <a href="#" class="text-light">Acessórios</a><br>
          <a href="#" class="text-light">Aplicações</a><br>
          <a href="#" class="text-light">Contato</a>
        </ul>
      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4">Contato</h2>
        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 text-light fa-phone"></i>+246 - 542 550 5462
          </a>
        </p>

        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 text-light fa-envelope-o"></i>info@pingendo.com
          </a>
        </p>

        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 fa-map-marker text-light"></i>365 Park Street, NY
          </a>
        </p>

      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4">Newsletter</h2>
        <form>
          <fieldset class="form-group">
            <label for="exampleInputEmail1">Receber atualizações</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </fieldset>
          <button type="submit" class="btn btn-outline-warning">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="rodape">
  <span>
    <i class="far fa-copyright" style="margin-right: 5px;"></i>
    | EZY3D Printing
  </span>
</div>

