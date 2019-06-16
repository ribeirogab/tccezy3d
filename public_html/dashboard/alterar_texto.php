<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EZY 3D - Dasboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
    include "menu.php";
    if (!($permissao == "@571824" || $permissao == "&43642")) {
      session_destroy();
      header("Location: ../pa-admin.php");
    }
    if (isset($_GET["pagina"])) {
      extract($_GET);
    }

    require_once "../Classes/Crud.php";
    $obj = new Crud();
    $valores = ["apelido" => $apelido, "pagina" => $pagina];
    $textos = $obj->consultar("*", "conteudo", "WHERE apelido=:apelido AND pagina=:pagina", $valores);
    $txtpt = $textos[0]["pt"];
    $txten = $textos[0]["en"];
    $txtes = $textos[0]["es"];
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">
        <a href="../<?= $pagina ?>.php?alterartxt=true"><i class="fas fa-long-arrow-alt-left"></i></a>
      </h1>
      <!-- Page Heading -->
      <h1 class="h5 mb-2 text-gray-800">
        <a href="textos.php">Alterar texto</a> <i class="fas fa-chevron-right mr-2 ml-2"></i>
        <a href="../<?= $pagina ?>?alterartxt=true"><?= $pagina ?></a> <i class="fas fa-chevron-right mr-2 ml-2"></i>
        Painel de alteração
      </h1>
      <p class="mb-4">Altere os textos nos 3 idiomas, após isso clique em "Confirmar" para confirmar as alterações.</p>
      <hr>

      <!-- Content Row -->
      <form action="../controle/admin.php" method="post" class="pb-4">
        <input type="hidden" name="tipo" value="alterartxt">
        <input type="hidden" name="apelido" value="<?= $apelido ?>">
        <input type="hidden" name="pagina" value="<?= $pagina ?>">
        <label for="pt">Português</label>
        <textarea class="form-control mb-5" name="altPt" id="pt" cols="30" rows="5"><?= $txtpt ?></textarea>

        <label for="en">Inglês</label>
        <textarea class="form-control mb-5" name="altEn" id="en" cols="30" rows="5"><?= $txten ?></textarea>

        <label for="es">Espanhol</label>
        <textarea class="form-control mb-4" name="altEs" id="es" cols="30" rows="5"><?= $txtes ?></textarea>

        <button class="btn btn-primary">Confirmar</button>
        <div style="cursor:pointer" class="btn btn-secondary" onclick='window.location.href="../<?= $pagina ?>.php?alterartxt=true"'>Cancelar</div>
      </form>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>