<?php
require_once "Conexao.php";
class Crud extends Conexao {

    public function __construct() {
        parent::__construct();
        parent::conectar();
    }

    public function cadastrar($tabela, $restricao, $valores) {
        $sql = "INSERT INTO $tabela VALUES($restricao)";
        parent::executarSql($sql, $valores);
    }
    public function consultar($coluna, $tabela, $restricao, $valores) {
        $sql = "SELECT DISTINCT $coluna FROM $tabela $restricao";
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