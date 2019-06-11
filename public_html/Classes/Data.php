<?php
require_once "Conexao.php";
class Data extends Conexao
{
    protected $dia;
    protected $mes;
    protected $ano;
    protected $nome_dia;
    protected $nome_mes;

    public function __construct()
    {
        parent::__construct();
        parent::conectar();
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        $this->dia = date('d');
        $this->mes = intval(date("m"));
        $this->ano = date("Y");
        $this->nome_dia = strftime('%a', strtotime('today'));
        $this->nome_mes = strftime('%h', strtotime('today'));
    }

    public function getDia()
    {
        return $this->dia;
    }
    public function getMes()
    {
        return $this->mes;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function getNomeMes()
    {
        return $this->nome_mes;
    }
    public function getNomeDia()
    {
        return $this->nome_dia;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function setNomeMes($nome_mes)
    {
        $this->nome_mes = $nome_mes;
    }
    public function setNomeDia($nome_dia)
    {
        $this->nome_dia = $nome_dia;
    }
}
