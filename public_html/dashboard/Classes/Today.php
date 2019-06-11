<?php
require_once "../Classes/CriarAtributos.php";
class Today extends CriarAtributos
{
    private $tipo;
    private $total;

    public function __construct()
    {
        parent::__construct();
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function getTotal()
    {
        return $this->total;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function total($tipo)
    {
        $valores["dia"] = $this->getDia();
        $valores["mes"] = $this->getMes();
        $valores["ano"] = $this->getAno();
        $sql = "SELECT SUM($tipo) FROM acesso WHERE dia=:dia AND mes=:mes AND ano=:ano";
        $dados = parent::executarFetchAll($sql, $valores);
        if ($dados[0][0]) {
            echo $dados[0][0];
        } else {
            echo 0;
        }
    }
}
