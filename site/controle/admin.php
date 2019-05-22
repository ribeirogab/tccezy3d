<?php
// error_reporting(0);
// ini_set(“display_errors”, 0);
if (!isset($_POST["tipo"])) {
    header("Location: home.php");
}

require_once "../Classes/Conexao.php";
require_once "../Classes/Usuario.php";
extract($_POST);
$admin = new Usuario();

// Verificando se já existe email, via AJAX antes do submit do formulário cadastrar
if ($tipo == "verificarEmail") {
    session_start();
    if (isset($_SESSION["idadmin"])) {
        $idadmin = $_SESSION["idadmin"];
        $dados = ["idadmin" => $idadmin, "email" => $email_admin];
        $where = "WHERE idadmin!=:idadmin AND email=:email";
    } else {
        $dados = ["email" => $email_admin];
        $where = "WHERE email=:email";
    }
    $qtdEmail = $admin->consultar("count(*)", "admin", $where, $dados);
    echo json_encode($qtdEmail, JSON_UNESCAPED_UNICODE);
}
// Cadastro
else if ($tipo == "cadastro") {
    $valor = ["email" => $email_admin];
    $qtdEmail = $admin->consultar("count(*)", "admin", "WHERE email=:email", $valor);
    if ($qtdEmail[0][0] != 0) {
        header("Location: ../dashboard/configusuarios.php?erro=emailcadastrado");
    } else {
        if (strlen($senha_admin) < 8 || strlen($confirmarSenha) < 8) {
            header("Location: ../dashboard/configusuarios.php?erro=senhainvalida");
        } else {
            $senha_adminCriptografada = sha1($senha_admin);
            $dados = ["cod" => 0, "nome" => $nome, "cargo" => $cargo, "email" => $email_admin, "senha" => $senha_adminCriptografada, "permissao" => $permissao];
            $admin->cadastrar("admin", ":cod, :nome, :cargo, :email, :senha, :permissao", $dados);
            header("Location: ../dashboard/configusuarios.php");
        }
    }
}

// Verificando se login está correto, via AJAX antes do submit do formulário de login
else if ($tipo == "verificarLogin") {
    $dados = ["email" => $email_admin, "senha" => $senha_admin];
    $qtdLogin = $admin->consultar("count(*)", "admin", "WHERE email=:email AND senha=:senha", $dados);
    echo json_encode($qtdLogin, JSON_UNESCAPED_UNICODE);
}
// Login
else if ($tipo == "login") {
    $dados = ["email" => $email_admin];
    $logon = $admin->consultar("*", "admin", "WHERE email=:email", $dados);
    if ($logon[0]["senha"] === $senha_admin) {
        $admin->criarSessionAdmin($logon[0]["idadmin"], $logon[0]["nome"], $logon[0]["cargo"], $logon[0]["email"], $logon[0]["permissao"]);
        header("Location: ../dashboard/index.php");
    } else {
        echo "<script>alert('Senha ou email incorreto(s)');window.location.href='../home.php';</script>";
    }
}

// Exclusão de admin, disponivel apenas no painel administrativo para o admin 'Master'
else if ($tipo == "excluir") {
    $dados = ["id" => $id];
    $admin->excluir("admin", "WHERE idadmin=:id", $dados);
}

// Consultar admin via AJAX
else if ($tipo == "consultar") {
    $dados = ["id" => $id];
    $retorno = $admin->consultar("*", "admin", "WHERE idadmin=:id", $dados);
    echo json_encode($retorno, JSON_UNESCAPED_UNICODE);
}

// Alterar informações
else if ($tipo == "alterar") {
    session_start();
    if (!isset($_SESSION["idadmin"])) {
        header("Location: ../home.php");
    } else {
        $idadmin = $_SESSION["idadmin"];
    }

    $valor = ["idadmin" => $idadmin, "email" => $email_admin];
    $qtdEmail = $admin->consultar("count(*)", "admin", "WHERE idadmin!=:idadmin AND email=:email", $valor);
    if ($qtdEmail[0][0] != 0) {
        header("Location: ../form_cadastrar.php?error=true");
    } else {
        $dados1 = ["idadmin" => $idadmin, "nome" => $nome, "cargo" => $cargo, "email" => $email_admin, "permissao" => $permissao];
        $admin->alterar("admin", "nome=:nome, cargo=:cargo, email=:email, permissao=:permissao", $dados1);

        // Atualizando os dados do SESSION
        $dados2 = ["idadmin" => $idadmin];
        $logon = $admin->consultar("*", "admin", "WHERE idadmin=:idadmin", $dados2);
        $admin->criarSessionAdmin($logon[0]["idadmin"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"], $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);
        header("Location:../perfil_admin.php?status=success1");
    }
} else {
    header("Location:../home.php");
}
?>