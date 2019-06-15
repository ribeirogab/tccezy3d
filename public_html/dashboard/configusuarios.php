<!DOCTYPE html>
<html lang="en">

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

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
include "menu.php";

if ($permissao != "@571824") {
    session_destroy();
    header("Location: ../pa-admin.php");
}
?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" data-toggle="modal" data-target="#cadastrarAdmin"><i class="fas fa-plus text-white-50"></i>&nbsp; Cadastrar usuário</a>
      </div>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Usuários cadastrados</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Cargo</th>
                  <th>E-mail</th>
                  <th>Permissão</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tbody>
                <?php
require_once "../Classes/Conexao.php";
require_once "../Classes/Usuario.php";
$obj = new Usuario();
$registro = $obj->consultar("*", "admin", null, null);
foreach ($registro as $admin) {?>
                  <tr>
                    <td><?=$admin["nome"]?></td>
                    <td><?=$admin["cargo"]?></td>
                    <td><?=$admin["email"]?></td>

                    <td>
                      <?php
if ($admin["permissao"] == "@571824") {
    $exibirPermissao = "Administrador";
} else if ($admin["permissao"] == "&43642") {
    $exibirPermissao = "Editor";
} else if ($admin["permissao"] == "$3590") {
    $exibirPermissao = "Moderador";
} else if ($admin["permissao"] == "*271") {
    $exibirPermissao = "Analista";
} else if ($admin["permissao"] == "#11") {
    $exibirPermissao = "Usuário";
}
    echo $exibirPermissao;
    ?>
                    </td>

                    <td class="text-center">
                      <a class="btn btn-outline-primary" id="btn-alterar" href="javascript:consultarAdmin(<?=$admin['idadmin']?>, 'consultar')">Alterar</a>
                      <a class="btn btn-outline-danger" onclick="return confirmar()" href="javascript:excluirAdmin(<?=$admin['idadmin']?>, 'excluir')">Excluir
                      </a>
                    </td>
                  </tr>
                <?php }?>
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
    function confirmar() {
      return confirm("Deseja realmente excluir este usuário?");
    }

    function consultarAdmin(id, tipo) {
      $("#alterarAdmin").modal()
      $.ajax({
        //url: "http://www.ezy3d.com.br/controle/admin.php",
         url: "http://localhost/tccezy3d/public_html/controle/admin.php",
        method: "POST",
        data: {
          "id": id,
          "tipo": tipo
        },
        success: function(resposta) {
          let json = $.parseJSON(resposta)
          $("input[name=altIdadmin").val(json[0]["idadmin"])
          $("input[name=altNome").val(json[0]["nome"])
          $("input[name=altCargo").val(json[0]["cargo"])
          $("input[name=altPermissao").val(json[0]["permissao"])
          $("input[name=altEmail").val(json[0]["email"])
        },

        error: function() {
          alert("Erro ao fazer a requisição")
        }
      });
    }

    function excluirAdmin(id, tipo) {
      $.ajax({
        url: "http://www.ezy3d.com.br/controle/admin.php",
        // url: "http://localhost/tccezy3d/public_html/controle/admin.php",
        method: "POST",
        data: {
          "id": id,
          "tipo": tipo
        },
        success: function(resposta) {
          location.reload()
        },

        error: function() {
          alert("Erro ao fazer a requisição")
        }
      });
    }
  </script>


  <!-- Modal CADASTRAR USUÁRIO-->
  <div class="modal fade" id="cadastrarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Formulário de cadastro</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../controle/admin.php" method="post">
            <input type="hidden" name="tipo" value="cadastro">
            <input class="form form-control" name="nome" type="text" placeholder="Nome">
            <div class="form-row">
              <div class="col">
                <input class="form-control mt-3" name="cargo" type="text" placeholder="Cargo">
              </div>
              <div class="col">
                <input class="form-control mt-3" name="permissao" type="text" placeholder="Permissão">
              </div>
            </div>
            <input class="form form-control mt-3" name="email_admin" type="email" placeholder="Email">
            <input class="form form-control mt-3" name="senha_admin" type="password" placeholder="Senha">

            <div class="modal-footer mt-3 pb-0">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal ALTERAR USUÁRIO-->
  <div class="modal fade" id="alterarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Formulário de alteração</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../controle/admin.php" method="post">
            <input type="hidden" name="tipo" value="alterar">
            <input type="hidden" name="altIdadmin">
            <input class="form form-control" name="altNome" type="text" placeholder="Nome">
            <div class="form-row">
              <div class="col">
                <input class="form-control mt-3" name="altCargo" type="text" placeholder="Cargo">
              </div>
              <div class="col">
                <input class="form-control mt-3" name="altPermissao" type="text" placeholder="Permissão">
              </div>
            </div>
            <input class="form form-control mt-3" name="altEmail" type="email" placeholder="Email">

            <div class="modal-footer mt-3 pb-0">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>