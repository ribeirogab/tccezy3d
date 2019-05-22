<?php
require_once "../Classes/Data.php";
class Meta extends Data {
    private $tipo;
    private $progresso;

    public function __construct() {
        parent::__construct();
    }

    public function getTipo() {return $this->tipo;}
    public function setTipo($tipo) {$this->tipo = $tipo;}

    public function getProgresso() {return $this->progresso;}
    public function setProgresso($progresso) {$this->progresso = $progresso;}

    public function progresso($tipo) {
        $val = ["tipo" => $tipo];
        $sql_metas = "SELECT meta FROM metas WHERE tipo=:tipo";
        $meta = parent::executarFetchAll($sql_metas, $val);

        if ($tipo == "visualizacoes") {
            $valores["mes"] = $this->getMes();
            $valores["ano"] = $this->getAno();
            $sql = "SELECT SUM(cliques) FROM acesso WHERE (mes=:mes AND ano=:ano)
			AND (tipo='facebook' OR tipo='instagram' OR tipo='googleads' OR tipo='browser')";
            $dados = parent::executarFetchAll($sql, $valores);
        } else {
            $valores["mes"] = $this->getMes();
            $valores["ano"] = $this->getAno();
            $valores["tipo"] = $tipo;
            $sql = "SELECT cliques FROM acesso WHERE (mes=:mes AND ano=:ano) AND (tipo=:tipo)";
            $dados = parent::executarFetchAll($sql, $valores);
        }

        if ($meta[0][0] == 0) {
            $this->setProgresso(null);
        } else {
            $formula = 100 - ((($meta[0][0] - $dados[0][0]) / $meta[0][0]) * 100);
            $this->setProgresso(intval($formula) . "%");
        }
    }
}
?>