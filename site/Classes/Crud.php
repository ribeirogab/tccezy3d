<?php
require_once "Conexao.php";
class Crud extends Conexao {

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
    public function consultar($coluna, $tabela, $restricao, $valores) {
        $sql = "SELECT $coluna FROM $tabela $restricao";
        return parent::executarFetchAll($sql, $valores);
    }
    public function alterar($tabela, $set, $val) {
        $sql = "UPDATE $tabela SET $set";
        parent::executarSql($sql, $val);
    }
    public function excluir($tabela, $restricao, $valores) {
        $sql = "DELETE FROM " . $tabela . " " . $restricao;
        if (parent::executarSql($sql, $valores)) {
            echo "Exclusão efetuada com sucesso!";
        } else {
            echo "Falha ao realizar exclusão!";
        }

    }
}
?>