<?php
class Usuario extends Conexao {

    public function __construct() {
        parent::__construct();
        parent::conectar();
    }

    public function cadastrar($tabela, $restricao, $valores) {
        $sql = "INSERT INTO $tabela VALUES($restricao)";
        if (parent::executarSql($sql, $valores)) {
            echo "<script>alert('Cadastrado efetuado com sucesso!');</script>";
        } else {
            echo "<script>alert('Falha ao realizar cadastro!');</script>";
        }

    }
    public function consultar($coluna, $tabela, $restricao, $cod) {
        $sql = "SELECT $coluna FROM $tabela $restricao";
        return parent::executarFetchAll($sql, $cod);
    }
    public function alterar($tabela, $set, $val) {
        $sql = "UPDATE $tabela SET $set";
        parent::executarSql($sql, $val);
    }
    public function excluir($tabela, $restricao, $cod) {
        $sql = "DELETE FROM $tabela $restricao";
        if (parent::executarSql($sql, $cod)) {
            echo "Exclusão efetuada com sucesso!";
        } else {
            echo "Falha ao realizar exclusão!";
        }

    }
    public function criarSession($idcliente, $nome, $sobrenome, $email, $senha, $telefone, $pais, $ramo, $empresa) {
        session_start();
        $_SESSION["idcliente"] = $idcliente;
        $_SESSION["nome"] = $nome;
        $_SESSION["sobrenome"] = $sobrenome;
        $_SESSION["banana"] = $email;
        $_SESSION["telefone"] = $telefone;
        $_SESSION["senha"] = $senha;
        $_SESSION["pais"] = $pais;
        $_SESSION["ramo"] = $ramo;
        $_SESSION["empresa"] = $empresa;
    }

    public function criarSessionAdmin($idadmin, $nome, $cargo, $email, $permissao) {
        session_start();
        $_SESSION["idadmin"] = $idadmin;
        $_SESSION["nome"] = $nome;
        $_SESSION["cargo"] = $cargo;
        $_SESSION["email"] = $email;
        $_SESSION["permissao"] = $permissao;
    }
}
?>