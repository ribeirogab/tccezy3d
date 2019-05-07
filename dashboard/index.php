<?php 
require_once"Classes/Today.php";
require_once"Classes/Meta.php";
$hoje = new Today();
$zero = 0;
$hoje->criarAcessoOuToday("acesso", ":mes, :ano, :tipo, $zero");
$hoje->criarAcessoOuToday("today", ":dia, :mes, :ano, :tipo, $zero");
$hoje->criarMetas("acesso", "visualizacoes", "WHERE (mes=:mes AND ano=:ano) AND (tipo='facebook' OR tipo='instagram' OR tipo='googleads' OR tipo='browser')");
$hoje->deletarToday("WHERE fkmes!=:mes");
$hoje->criarMetas("acesso", "orcamento", "WHERE mes=:mes AND ano=:ano AND tipo=:tipo");
$hoje->criarMetas("acesso", "cadastro", "WHERE mes=:mes AND ano=:ano AND tipo=:tipo");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EZY3D - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include"menu.php"?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Baixar relatório</a>
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visitantes (hoje)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                    $hoje->total("visitantes");
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-eye fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">tempo médio por usuário</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">00:04:57</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clock fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">orçamentos solicitados (hoje)</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                        <?php 
                        $hoje->total("orcamento");
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-undo-alt fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">cadastros realizados (hoje)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                    $hoje->total("cadastro");
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-8 col-lg-7">

          <!-- Area Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Visualizações</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
              </div>
              <hr>
              Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
            </div>
          </div>   

        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Local de acesso</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4">
                <canvas id="myPieChart"></canvas>
              </div>
              <hr>
              Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
            </div>
          </div>
        </div>

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Objetivos do mês</h6>
              <?php 
              $metaViews = new Meta();
              $metaViews->progresso("visualizacoes");
              ?>
            </div>
            <div class="card-body">
              <h4 class="small font-weight-bold">Visitantes <span class="float-right">
                <?php 
                if($metaViews->getProgresso() >= 100)
                  echo "Completo!";
                else
                  echo $metaViews->getProgresso();
                ?> 
              </span></h4>
              <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width:
                <?php 
                if($metaViews->getProgresso() >= 100){
                  echo "100%;";
                  echo "background-color: green;";
                }
                else{
                  echo $metaViews->getProgresso().";";
                  echo "background-color: blue;";
                }
                ?>" >
              </div>
            </div>
            <?php 
            $metaOrcamentos = new Meta();
            $metaOrcamentos->progresso("orcamento");
            ?>
            <h4 class="small font-weight-bold">Orçamentos <span class="float-right">
              <?php 
              if($metaOrcamentos->getProgresso() >= 100)
                echo "Completo!";
              else
                echo $metaOrcamentos->getProgresso();
              ?> 
            </span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-warning" role="progressbar" style="width:
              <?php 
              if($metaOrcamentos->getProgresso() >= 100){
                echo "100%;";
                echo "background-color: green;";
              }
              else{
                echo $metaOrcamentos->getProgresso().";";
                echo "background-color: blue;";
              }
              ?>"></div>
            </div>
            <?php 
            $metaNewsletter = new Meta();
            $metaNewsletter->progresso("cadastro");
            ?>
            <h4 class="small font-weight-bold">Cadastros <span class="float-right">
              <?php 
              if($metaNewsletter->getProgresso() >= 100)
                echo "Completo!";
              else
                echo $metaNewsletter->getProgresso();
              ?> 
            </span></h4>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width:
              <?php 
              if($metaNewsletter->getProgresso() >= 100){
                echo "100%;";
                echo "background-color: green;";
              }
              else{
                echo $metaNewsletter->getProgresso().";";
                echo "background-color: blue;";
              }
              ?>"></div>
            </div>
          </div>
        </div>

        <!-- Color System -->
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card bg-primary text-white shadow">
              <div class="card-body">
                Browser
                <div class="text-white-50 small">#4e73df</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card bg-success text-white shadow">
              <div class="card-body">
                Google ADS
                <div class="text-white-50 small">#1cc88a</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card bg-info text-white shadow">
              <div class="card-body">
                Facebook
                <div class="text-white-50 small">#36b9cc</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card bg-warning text-white shadow">
              <div class="card-body">
                Instagram
                <div class="text-white-50 small">#f6c23e</div>
              </div>
            </div>
          </div>    
        </div>
      </div>

      <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Meses anteriores</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Visitantes</th>
                    <th>Orçamentos</th>
                    <th>Cadastros</th>
                    <th>Metas</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Mês</th>
                   <th>Visitantes</th>
                   <th>Orçamentos</th>
                   <th>Cadastros</th>
                   <th>Metas</th>
                 </tr>
               </tfoot>
               <tbody>
                <tr>
                  <td>Jan 2019</td>
                  <td>15</td>
                  <td>12</td>
                  <td>61</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Fev 2019</td>
                  <td>145</td>
                  <td>135</td>
                  <td>623</td>
                  <td>1/3</td>
                </tr>
                <tr>
                  <td>Mar 2019</td>
                  <td>42</td>
                  <td>92</td>
                  <td>641</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Abr 2019</td>
                  <td>135</td>
                  <td>155</td>
                  <td>63</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Mai 2019</td>
                  <td>234</td>
                  <td>22</td>
                  <td>61</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Jun 2019</td>
                  <td>151</td>
                  <td>105</td>
                  <td>653</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Jul 2019</td>
                  <td>78</td>
                  <td>334</td>
                  <td>61</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Ago 2019</td>
                  <td>15</td>
                  <td>15</td>
                  <td>63</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Set 2019</td>
                  <td>78</td>
                  <td>15</td>
                  <td>61</td>
                  <td>3/3</td>
                </tr>
                <tr>
                  <td>Out 2019</td>
                  <td>15</td>
                  <td>15</td>
                  <td>63</td>
                  <td>3/3</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

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
      <span>Copyright &copy; Ezy3D 2019</span>
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

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
