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
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

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
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Alterar Textos</h1>
      <p class="mb-4">Selecione a página que deseja modificar algum texto.</p>

      <div class="row">
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Home</h5>
              <a href="../home.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Impressora 3D - E1260T</h5>
              <a href="../printer_e1260t.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Impressora 3D - Phylos</h5>
              <a href="../printer_phylos.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Impressora 3D - Core E3</h5>
              <a href="../printer_coree3.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Acessórios - EzyCure</h5>
              <a href="../acessorio_ezycure.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Aplicação - Odontologia</h5>
              <a href="../app_odontologia.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Aplicação - Manufatura</h5>
              <a href="../app_engenharia.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Aplicação - Educação</h5>
              <a href="../app_entretenimento.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Aplicação - Joalheria</h5>
              <a href="../app_joalheria.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">
          <div class="card">
            <img class="card-img-top" src="img/pagsite.png" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Contato</h5>
              <a href="../contato.php?alterartxt=true" class="btn btn-primary">Selecionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 p-3">

        </div>
        <div class="col-lg-3 p-3">

        </div>
      </div>




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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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