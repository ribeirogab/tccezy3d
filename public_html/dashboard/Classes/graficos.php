<?php
require_once "../../Classes/Data.php";
class Graficos extends Data {
    public function __construct() {
        parent::__construct();
    }

    public function visitantePeriodo($dataInicio, $dataFinal) {
        $sql = "SELECT mes, dia, nome_mes, nome_dia, SUM(visualizacoes) AS `visualizacoes` FROM acesso WHERE data BETWEEN :data_inicio AND :data_final GROUP BY mes, dia";
        $valores["data_inicio"] = $dataInicio;
        $valores["data_final"] = $dataFinal;
        return parent::executarFetchAll($sql, $valores);
    }

    public function localAcessoMes($mes) {
        $sql = "SELECT mes, nome_mes, SUM(browser) AS `browser`, SUM(facebook) AS `facebook`, SUM(googleads) AS `googleads`, SUM(instagram) AS `instagram` FROM acesso WHERE mes = :mes AND ano = :ano";
        $valores["mes"] = $mes;
        $valores["ano"] = $this->getAno();
        return parent::executarFetchAll($sql, $valores);
    }
    public function orcamentoLocalMes($mes) {
        $sql = "SELECT c.local_acesso, count(o.idorcamento) AS `qtd_orcamento` FROM orcamento o INNER JOIN cliente c ON c.idcliente=o.fkcliente WHERE MONTH(data)=:mes AND YEAR(data)=:ano GROUP BY c.local_acesso";
        $valores["mes"] = $mes;
        $valores["ano"] = $this->getAno();
        return parent::executarFetchAll($sql, $valores);
    }
}
