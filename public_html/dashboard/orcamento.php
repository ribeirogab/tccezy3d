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

  <script src="../glj/js/jquery.js"></script>

  <script>
    $(document).ready(function() {
      $('#respondido').click(function() {
        if ($('#st').html() == "Pendentes") {
          $('#st').html("Respondidos");
        }
        $("#pendente").removeClass('btn-outline-primary');
        $("#pendente").addClass('btn-primary');
        $("#respondido").removeClass('btn-warning');
        $("#respondido").addClass('btn-outline-warning');
        $("#tbpendente").hide();
        $("#tbrespondido").show();
      });

      $('#pendente').click(function() {
        if ($('#st').html() == "Respondidos") {
          $('#st').html("Pendentes");
        }
        $("#respondido").removeClass('btn-outline-warning');
        $("#respondido").addClass('btn-warning');
        $("#pendente").removeClass('btn-primary');
        $("#pendente").addClass('btn-outline-primary');
        $("#tbrespondido").hide();
        $("#tbpendente").show();
      });

      function excluirOrcamento(id, tipo) {
        $.ajax({
          url: "http://www.ezy3d.com.br/controle/cliente.php",
          // url: "http://localhost/tccezy3d/controle/cliente.php",
          method: "POST",
          data: {
            "id": id,
            "tipo": tipo
          },
          success: function(resposta) {
            alert(resposta)
            location.reload()
          },

          error: function() {
            alert("Erro ao fazer a requisição")
          }
        });
      }

      function confirmar() {
        return confirm('Deseja realmente excluir este cliente?')
      }
    });
  </script>

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
      <h1 class="h3 mb-4 text-gray-800">Orçamentos <i class="fas fa-chevron-right mr-2 ml-2" style="font-size: 20px"></i> <span class="h4 mb-4 text-gray-800" id="st">Pendentes</span></h1>

      <button type="button" class="btn btn-primary" id="pendente">Pendentes</button>
      <button type="button" class="btn btn-warning" id="respondido">Respondidos</button><br><br>

      <div class="card shadow mb-4" id="tbpendente">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Orçamentos para verificação</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Cliente</th>
                  <th>Produtos</th>
                  <th>Descrição</th>
                  <th>Data</th>
                  <?php if ($permissao == "@571824") { ?>
                    <th>Ações</th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once "../Classes/Usuario.php";
                $obj = new Usuario();
                $registro = $obj->consultar("c.nome, s.*", "orcamento s", "INNER JOIN cliente c ON s.fkcliente=c.idcliente where status = 'pendente'", null);
                foreach ($registro as $cliente) { 
                  $ano = substr($cliente['data'], 0, -15);
                  $mes = substr($cliente['data'], 5, -12);
                  $dia = substr($cliente['data'], 8, -8);
                  $hora = substr($cliente['data'], 11, -3);
                  if ($mes == "01") {
                   $novomes = "jan";
                 } else if ($mes == "02") {
                   $novomes = "fev";
                 } else if ($mes == "03") {
                   $novomes = "mar";
                 } else if ($mes == "04") {
                   $novomes = "abr";
                 } else if ($mes == "05") {
                   $novomes = "mai";
                 } else if ($mes == "06") {
                   $novomes = "jun";
                 } else if ($mes == "07") {
                   $novomes = "jul";
                 } else if ($mes == "08") {
                   $novomes = "ago";
                 } else if ($mes == "09") {
                   $novomes = "set";
                 } else if ($mes == "10") {
                   $novomes = "out";
                 } else if ($mes == "11") {
                   $novomes = "nov";
                 } else if ($mes == "12") {
                   $novomes = "dez";
                 }
                 ?>
                 <tr>
                  <td><?= $cliente['nome'] ?></td>
                  <td><?= $cliente['produtos'] ?></td>
                  <td><?= substr($cliente['descricao'], 0, 15). "..." ?></td>
                  <td><?= $dia. " de ". $novomes. " ". $ano. " / ". $hora ?></td>
                  <?php if ($permissao == "@571824") { ?>
                    <td>
                      <a class="btn btn-outline-warning w-100" href="paginaRespostaOrc.php?id=<?= $cliente['idorcamento'] ?>&fk=<?= $cliente['fkcliente'] ?>">Responder</a>
                    </td>
                  <?php } ?>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="card shadow mb-4" id="tbrespondido" style="display: none">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Orçamentos Respondidos</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Produtos</th>
                <th>Descrição</th>
                <th>Data</th>
                <?php if ($permissao == "@571824") { ?>
                  <th>Ações</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once "../Classes/Usuario.php";
              $obj = new Usuario();
              $registro = $obj->consultar("c.nome, s.*", "orcamento s", "INNER JOIN cliente c ON s.fkcliente=c.idcliente where status = 'respondido'", null);
              foreach ($registro as $cliente) { 
                $ano = substr($cliente['data'], 0, -15);
                $mes = substr($cliente['data'], 5, -12);
                $dia = substr($cliente['data'], 8, -8);
                $hora = substr($cliente['data'], 11, -3);
                if ($mes == "01") {
                 $novomes = "jan";
               } else if ($mes == "02") {
                 $novomes = "fev";
               } else if ($mes == "03") {
                 $novomes = "mar";
               } else if ($mes == "04") {
                 $novomes = "abr";
               } else if ($mes == "05") {
                 $novomes = "mai";
               } else if ($mes == "06") {
                 $novomes = "jun";
               } else if ($mes == "07") {
                 $novomes = "jul";
               } else if ($mes == "08") {
                 $novomes = "ago";
               } else if ($mes == "09") {
                 $novomes = "set";
               } else if ($mes == "10") {
                 $novomes = "out";
               } else if ($mes == "11") {
                 $novomes = "nov";
               } else if ($mes == "12") {
                 $novomes = "dez";
               }
               ?>
               <tr>
                <td><?= $cliente['nome'] ?></td>
                <td><?= $cliente['produtos'] ?></td>
                <td><?= substr($cliente['descricao'], 0, 15). "..." ?></td>
                <td><?= $dia. " de ". $novomes. " ". $ano. " / ". $hora ?></td>
                <?php if ($permissao == "@571824") { ?>
                  <td>
                    <a class="btn btn-outline-danger w-100" onclick="return confirmar()" href="javascript:excluirOrcamento(<?= $cliente['idorcamento'] ?>, 'excluir')">Excluir</a>
                  </td>
                <?php } ?>
              </tr>
            <?php } ?>
          </tbody>
        </table>
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
<script>
  function excluirOrcamento(id, tipo) {
    $.ajax({
      url: "http://www.ezy3d.com.br/controle/cliente.php",
        // url: "http://localhost/tccezy3d/controle/cliente.php",
        method: "POST",
        data: {
          "id": id,
          "tipo": tipo
        },
        success: function(resposta) {
          alert(resposta)
          location.reload()
        },

        error: function() {
          alert("Erro ao fazer a requisição")
        }
      });
  }

  function confirmar() {
    return confirm('Deseja realmente excluir este cliente?')
  }
</script>

</body>

</html>