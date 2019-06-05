<?php
require_once "Classes/Today.php";
require_once "Classes/Meta.php";
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
    <?php
include "menu.php";
if (!($permissao == "@571824" || $permissao == "&43642" || $permissao == "$3590" || $permissao == "*271" || $permissao == "#11")) {
    session_destroy();
    header("Location: ../pa-admin.php");
}
?>

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
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">cadastros realizados (hoje)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
$hoje->total("cadastro");
?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user-check fa-2x text-gray-300"></i>
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
                  <i class="fas fa-file-alt fa-2x text-gray-300"></i>
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
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Suportes solicitados (hoje)</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
$hoje->total("suporte");
?>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-headset fa-2x text-gray-300"></i>
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
if ($metaViews->getProgresso() >= 100) {
    echo "Completo!";
} else {
    echo $metaViews->getProgresso();
}

?>
              </span></h4>
              <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width:
                <?php
if ($metaViews->getProgresso() >= 100) {
    echo "100%;";
    echo "background-color: green;";
} else {
    echo $metaViews->getProgresso() . ";";
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
if ($metaOrcamentos->getProgresso() >= 100) {
    echo "Completo!";
} else {
    echo $metaOrcamentos->getProgresso();
}

?>
            </span></h4>
            <div class="progress mb-4">
              <div class="progress-bar bg-warning" role="progressbar" style="width:
              <?php
if ($metaOrcamentos->getProgresso() >= 100) {
    echo "100%;";
    echo "background-color: green;";
} else {
    echo $metaOrcamentos->getProgresso() . ";";
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
if ($metaNewsletter->getProgresso() >= 100) {
    echo "Completo!";
} else {
    echo $metaNewsletter->getProgresso();
}

?>
            </span></h4>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width:
              <?php
if ($metaNewsletter->getProgresso() >= 100) {
    echo "100%;";
    echo "background-color: green;";
} else {
    echo $metaNewsletter->getProgresso() . ";";
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

<script>
    /*
    $(document).ready(function() {
      $.ajax({
        type: "POST",
        url: "consultaGrafico.php",
        data:{data: []},
        cache: false,

        success: function(resposta){
          let json = $.parseJSON(resposta);
          var janeiro = json[0];
          var fevereiro = json[1];
          var marco = json[2];
          var abril = json[3];
          var maio = json[4];
          var junho = json[5];
          var julho = json[6];
          var agosto = json[7];
          var setembro = json[8];
          var outubro = json[9];
          var novembro = json[10];
          var dezembro = json[11];  

          var ctx = document.getElementById("myAreaChart");
          var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
              datasets: [{
                label: "Visitantes",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [janeiro,fevereiro,marco,abril,maio,junho,julho,agosto,setembro,outubro,novembro,dezembro],
              }],
            },
            options: {
              maintainAspectRatio: false,
              layout: {
                padding: {
                  left: 10,
                  right: 25,
                  top: 25,
                  bottom: 0
                }
              },
              scales: {
                xAxes: [{
                  time: {
                    unit: 'date'
                  },
                  gridLines: {
                    display: false,
                    drawBorder: false
                  },
                  ticks: {
                    maxTicksLimit: 7
                  }
                }],
                yAxes: [{
                  ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return value;
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        intersect: false,
        mode: 'index',
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ': ' + tooltipItem.yLabel;
          }
        }
      }
    }
  });

        }
      });       
    });*/
  </script>

</body>

</html>
