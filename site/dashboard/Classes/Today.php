<?php
require_once "../Classes/CriarAtributos.php";
class Today extends CriarAtributos {
    private $tipo;
    private $total;

    public function __construct() {
        parent::__construct();
    }

    public function getTipo() {return $this->tipo;}
    public function getTotal() {return $this->total;}

    public function setTipo($tipo) {$this->tipo = $tipo;}
    public function setTotal($total) {$this->total = $total;}

    public function total($tipo) {
        if ($tipo === "visitantes") {
            $valores["dia"] = $this->getDia();
            $valores["mes"] = $this->getMes();
            $valores["ano"] = $this->getAno();
            $sql = "SELECT SUM(cliques) FROM today WHERE (dia=:dia AND fkmes=:mes AND fkano=:ano)
			AND (fktipo='facebook' OR fktipo='instagram' OR fktipo='googleads' OR fktipo='browser')";
            $dados = parent::executarFetchAll($sql, $valores);
        } else {
            $valores["tipo"] = $tipo;
            $valores["dia"] = $this->getDia();
            $valores["mes"] = $this->getMes();
            $valores["ano"] = $this->getAno();
            $sql = "SELECT cliques FROM today WHERE (fktipo=:tipo) AND (dia=:dia AND fkmes=:mes AND fkano=:ano)";
            $dados = parent::executarFetchAll($sql, $valores);
        }
        if ($dados[0][0]) {
            echo $dados[0][0];
        } else {
            echo 0;
        }

    }
}
?>