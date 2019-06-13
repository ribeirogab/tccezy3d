<?php
require_once "Classes/Today.php";
require_once "Classes/Meta.php";
require_once "../Classes/Crud.php";

$hoje = new Today();
$hoje->criarAcesso();
$hoje->criarMetas("visualizacoes", "WHERE mes=:mes AND ano=:ano");
$hoje->criarMetas("cadastro", "WHERE mes=:mes AND ano=:ano");
$hoje->criarMetas("orcamento", "WHERE mes=:mes AND ano=:ano");
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
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

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
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Baixar relatório</a> -->
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
$hoje->total("visualizacoes");
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
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">cadastros realizados (hoje)
                  </div>
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
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">orçamentos solicitados (hoje)
                  </div>
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
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Suportes solicitados (hoje)
                  </div>
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
              <div class="row">
                <div class="col-md-4">
                  <h6 class="m-0 font-weight-bold text-primary">Visualizações</h6>
                </div>
                <div class="col-md-8">
                  <form class="float-right" action="">
                    <div class="form-inline">
                      <?php
$mesAtual = date("m");
$anoAtual = date("Y");
$ultimoDiaMesAtual = cal_days_in_month(CAL_GREGORIAN, $mesAtual, $anoAtual);
?>
                      <input class="form-control col-xl-6 ml-auto" type="date" name="data_inicio"
                        value="<?=$anoAtual . "-" . $mesAtual?>-01">
                      <input class="form-control col-xl-6 ml-auto" type="date" name="data_final"
                        value="<?=$anoAtual . "-" . $mesAtual . "-" . $ultimoDiaMesAtual?>">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class=" card-body">
              <div class="chart-area" id="divLineChart">
                <canvas id="myAreaChart"></canvas>
              </div>
              <hr>
            </div>
          </div>

        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary d-inline">Local de acesso</h6>
              <form class="float-right" action="">
                <div class="form-inline">
                  <input type="hidden" name="mesAtual" value="<?=$mesAtual?>">
                  <select class="form-control" name="pie_mes" id="local_acesso">
                    <option value="01">Jan</option>
                    <option value="02">Fev</option>
                    <option value="03">Mar</option>
                    <option value="04">Abr</option>
                    <option value="05">Mai</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Ago</option>
                    <option value="09">Set</option>
                    <option value="10">Out</option>
                    <option value="11">Nov</option>
                    <option value="12">Dez</option>
                  </select>
                </div>
              </form>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4" id="divPieChart">
                <canvas id="myPieChart"></canvas>
              </div>
              <hr>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <!-- Bar Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Conversões por local</h6>
              <form class="float-right" action="">
                <div class="form-inline">
                  <input type="hidden" name="barMesAtual" value="<?=$mesAtual?>">
                  <select class="form-control" name="bar_mes" id="bar_mes">
                    <option value="01">Jan</option>
                    <option value="02">Fev</option>
                    <option value="03">Mar</option>
                    <option value="04">Abr</option>
                    <option value="05">Mai</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Ago</option>
                    <option value="09">Set</option>
                    <option value="10">Out</option>
                    <option value="11">Nov</option>
                    <option value="12">Dez</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="card-body">
              <div class="chart-bar" id="divBarChart">
                <canvas id="myBarChart"></canvas>
              </div>
              <hr>
            </div>
          </div>
          <!-- - -->
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
?>">
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
            <?php
$objRdSocial = new Crud();
$NumRdSocial = $objRdSocial->consultar("SUM(browser) AS `browser`, SUM(googleads) AS `googleads`, SUM(facebook) AS `facebook`, SUM(instagram) AS `instagram`", "acesso", null, null);
?>
            <div class="col-lg-6 mb-4">
              <div class="card bg-browser text-white shadow"
                onclick="window.open('https://www.google.com/search?q=ezy3d&oq=ezy3d+&aqs=chrome..69i57j69i60l5.1854j0j9&sourceid=chrome&ie=UTF-8', '_blank')">
                <div class="card-body">
                  Browser
                  <div class="text-white-50 small">Acessos totais: <?=$NumRdSocial[0]["browser"]?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-googleads text-white shadow">
                <div class="card-body">
                  Google ADS
                  <div class="text-white-50 small">Acessos totais: <?=$NumRdSocial[0]["googleads"]?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-face text-white shadow"
                onclick="window.open('https://www.facebook.com/EZY3DPRINTING/', '_blank')">
                <div class="card-body">
                  Facebook
                  <div class="text-white-50 small">Acessos totais: <?=$NumRdSocial[0]["facebook"]?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-insta text-white shadow"
                onclick="window.open('https://www.instagram.com/ezy3d/', '_blank')">
                <div class="card-body">
                  Instagram
                  <div class="text-white-50 small">Acessos totais: <?=$NumRdSocial[0]["instagram"]?></div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-8">
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Meses anteriores</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
$objMeses = new Crud();
$objMesesValue = ["mes" => intval(date("m"))];
$mesesAnteriores = $objMeses->consultar("mes, nome_mes, ano, SUM(visualizacoes) AS `visitantes`, SUM(orcamento) AS `orcamento`, SUM(cadastro) AS `cadastro`", "acesso", "WHERE mes < :mes GROUP BY mes ORDER BY mes", $objMesesValue);
?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mês</th>
                      <th>Visitantes</th>
                      <th>Orçamentos</th>
                      <th>Cadastros</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Mês</th>
                      <th>Visitantes</th>
                      <th>Orçamentos</th>
                      <th>Cadastros</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
foreach ($mesesAnteriores as $mesTable) {?>
                    <tr>
                      <td>
                        <span
                          class="d-none"><?=$mesTable["mes"] . "</span>
                                            <span class='text-capitalize'>" . $mesTable["nome_mes"] . "</span> " . $mesTable["ano"]?>
                      </td>
                      <td><?=$mesTable["visitantes"]?></td>
                      <td><?=$mesTable["orcamento"]?></td>
                      <td><?=$mesTable["cadastro"]?></td>
                    </tr>
                    <?php }?>
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

  <?php
include_once "rodape.php";
?>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>

  <script src="js/demo/chart-pie-demo.js"></script>

  <script src="js/demo/chart-bar-demo.js"></script>
</body>

</html>