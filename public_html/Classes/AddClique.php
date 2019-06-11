<?php
require_once "Data.php";
class AddClique extends Data
{
    private $tipo;

    public function __construct()
    {
        parent::__construct();
        $parametros = func_get_args();
        if (count($parametros) != 0) {
            $this->tipo = $parametros[0];
        }
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function consultarClique($restricao)
    {
        $sql = "SELECT $this->tipo, visualizacoes FROM acesso $restricao";
        $valores["dia"] = $this->getDia();
        $valores["mes"] = $this->getMes();
        $valores["ano"] = $this->getAno();
        return parent::executarFetchAll($sql, $valores);
    }

    public function adicionarClique($tipo, $restricao, $cliques, $visualizacoes)
    {
        $sql = "UPDATE acesso $restricao";
        $valores["tipo"] = $cliques + 1;
        $valores["dia"] = $this->getDia();
        $valores["mes"] = $this->getMes();
        $valores["ano"] = $this->getAno();
        parent::executarSql($sql, $valores);

        if ($tipo == "browser" || $tipo == "facebook" || $tipo == "googleads" || $tipo == "instagram") {
            $ifsql = "UPDATE acesso SET visualizacoes=:addclique WHERE dia=:dia AND mes=:mes AND ano=:ano";
            $ifvalores["addclique"] = $visualizacoes + 1;
            $ifvalores["dia"] = $this->getDia();
            $ifvalores["mes"] = $this->getMes();
            $ifvalores["ano"] = $this->getAno();
            parent::executarSql($ifsql, $ifvalores);
        }
    }
}
