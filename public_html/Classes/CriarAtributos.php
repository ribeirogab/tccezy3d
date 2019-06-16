<?php
require_once "Data.php";
class CriarAtributos extends Data
{
    public function __construct()
    {
        parent::__construct();
    }

    public function criarAcesso()
    {
        $diasJan = cal_days_in_month(CAL_GREGORIAN, 1, $this->getAno());
        $diasFev = cal_days_in_month(CAL_GREGORIAN, 2, $this->getAno());
        $diasMar = cal_days_in_month(CAL_GREGORIAN, 3, $this->getAno());
        $diasAbr = cal_days_in_month(CAL_GREGORIAN, 4, $this->getAno());
        $diasMai = cal_days_in_month(CAL_GREGORIAN, 5, $this->getAno());
        $diasJun = cal_days_in_month(CAL_GREGORIAN, 6, $this->getAno());
        $diasJul = cal_days_in_month(CAL_GREGORIAN, 7, $this->getAno());
        $diasAgo = cal_days_in_month(CAL_GREGORIAN, 8, $this->getAno());
        $diasSet = cal_days_in_month(CAL_GREGORIAN, 9, $this->getAno());
        $diasOut = cal_days_in_month(CAL_GREGORIAN, 10, $this->getAno());
        $diasNov = cal_days_in_month(CAL_GREGORIAN, 11, $this->getAno());
        $diasDez = cal_days_in_month(CAL_GREGORIAN, 12, $this->getAno());

        $numDias = [$diasJan, $diasFev, $diasMar, $diasAbr, $diasMai, $diasJun, $diasJul, $diasAgo, $diasSet, $diasOut, $diasNov, $diasDez];
        for ($i = 0; $i < count($numDias); $i++) {
            $x = $numDias[$i];
            $mes = $i + 1;
            for ($dia = 1; $dia <= $x; $dia++) {
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                $data = 2019 . "-" . $mes . "-" . $dia;
                $nome_dia = strftime('%a', strtotime($data));
                $nome_mes = strftime('%h', strtotime($data));
                $sql = "INSERT INTO acesso VALUES(:dia, :mes, :ano, :nome_mes, :nome_dia, :visualizacoes, :browser, :facebook, :googleads, :instagram, :cadastro, :orcamento, :suporte, :data)";
                $valores["dia"] =  $dia;
                $valores["mes"] = $mes;
                $valores["ano"] = 2019;
                $valores["nome_mes"] = $nome_mes;
                $valores["nome_dia"] = $nome_dia;
                $valores["visualizacoes"] = 0;
                $valores["browser"] = 0;
                $valores["facebook"] = 0;
                $valores["googleads"] = 0;
                $valores["instagram"] = 0;
                $valores["cadastro"] = 0;
                $valores["orcamento"] = 0;
                $valores["suporte"] = 0;
                $valores["data"] = $data;
                parent::executarSql($sql, $valores);
            }
        }
    }

    public function criarMetas($tipo, $restricao)
    {
        $sql = "SELECT SUM($tipo) AS 'acoes' FROM acesso $restricao";
        if ($this->getMes() == 1) {
            $valores["mes"] = 12;
            $valores["ano"] = $this->getAno() - 1;
        } else {
            $valores["mes"] = $this->getMes() - 1;
            $valores["ano"] = $this->getAno();
        }

        $retorno = parent::executarFetchAll($sql, $valores);
        $dados = $retorno[0]['acoes'];
        $meta = $dados + ($dados / 100 * 10);

        $inserirMeta = "INSERT INTO metas VALUES(:mes, :ano, :tipo, :meta)";
        $valoresMeta["mes"] = $this->getMes();
        $valoresMeta["ano"] = $this->getAno();
        $valoresMeta["tipo"] = $tipo;
        $valoresMeta["meta"] = $meta;
        parent::executarSql($inserirMeta, $valoresMeta);
    }
}
