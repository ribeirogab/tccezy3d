<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EZY 3D - Dasboard</title>
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <style>
    #btn-nome,
    #btn-email,
    #btn-telefone,
    #btn-pais,
    #btn-ramo,
    #btn-empresa,
    #btn-senha {
      color: blue;
      cursor: pointer;
    }

    #btn-nome:hover,
    #btn-email:hover,
    #btn-telefone:hover,
    #btn-pais:hover,
    #btn-ramo:hover,
    #btn-empresa:hover,
    #btn-senha:hover {
      text-decoration: underline;
    }
  </style>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
    include "menu.php";
    if (!($permissao == "@571824" || $permissao == "&43642" || $permissao == "$3590" || $permissao == "*271")) {
      session_destroy();
      header("Location: ../pa-admin.php");
    }
    ?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
      <br>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Clientes cadastrados</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>Ramo</th>
                  <th>Empresa</th>
                  <?php if ($permissao == "@571824") { ?>
                    <th>Editar</th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once "../Classes/Conexao.php";
                require_once "../Classes/Usuario.php";
                $obj = new Usuario();
                $registro = $obj->consultar("*", "cliente", null, null);
                foreach ($registro as $cliente) { ?>
                  <tr>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                    <td><?= $cliente['telefone'] ?></td>
                    <td><?= $cliente['ramo'] ?></td>
                    <td><?= $cliente['empresa'] ?></td>
                    <?php if ($permissao == "@571824") { ?>
                      <td class="text-center">
                        <a class="btn btn-outline-primary" href="javascript:consultarCliente(<?= $cliente['idcliente'] ?>, 'consultar')">Alterar</a>
                        <a class="btn btn-outline-danger" onclick="return confirmar()" href="javascript:excluirCliente(<?= $cliente['idcliente'] ?>, 'excluir')">Excluir</a>
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



  <!-- Modal ALTERAR CLIENTE-->
  <div class="modal fade" id="alterarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Formulário de alteração</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../controle/cliente.php" method="post">
            <input type="hidden" name="tipo" value="alterarCliente">
            <input type="hidden" name="altIdCliente">

            <div class="form-row">
              <div class="col">
                <input class="form form-control" name="altNome" type="text" placeholder="Nome">
              </div>
              <div class="col">
                <input class="form-control" name="altSobrenome" type="text" placeholder="Sobrenome">
              </div>
            </div>
            <input class="form-control mt-3" name="altEmail" type="email" placeholder="E-mail">
            <input class="form-control mt-3" name="altTelefone" type="text" placeholder="Telefone">
            <input class="form-control mt-3" name="altPais" type="text" placeholder="Pais">
            <input class="form-control mt-3" name="altRamo" type="text" placeholder="Ramo">
            <input class="form-control mt-3" name="altEmpresa" type="text" placeholder="Empresa">

            <div class="modal-footer mt-3 pb-0">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <script>
    function consultarCliente(id, tipo) {
      $("#alterarCliente").modal()
      $.ajax({
        // url: "http://www.ezy3d.com.br/controle/cliente.php",
        url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
        method: "POST",
        data: {
          "id": id,
          "tipo": tipo
        },
        success: function(resposta) {
          let json = $.parseJSON(resposta)
          $("input[name=altIdCliente").val(json[0]["idcliente"])
          $("input[name=altNome").val(json[0]["nome"])
          $("input[name=altSobrenome").val(json[0]["sobrenome"])
          $("input[name=altEmail").val(json[0]["email"])
          $("input[name=altTelefone").val(json[0]["telefone"])
          $("input[name=altPais").val(json[0]["pais"])
          $("input[name=altRamo").val(json[0]["ramo"])
          $("input[name=altEmpresa").val(json[0]["empresa"])
        },

        error: function() {
          alert("Erro ao fazer a requisição")
        }
      });
    }

    function excluirCliente(id, tipo) {
      $.ajax({
        // url: "http://www.ezy3d.com.br/controle/cliente.php",
        url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
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