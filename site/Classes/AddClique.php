<?php 
require_once"Data.php";
class AddClique extends Data{
	private $tipo;

	public function __construct(){
		parent::__construct();
		$parametros = func_get_args();
		if(count($parametros) != 0){
			$this->tipo = $parametros[0];
		}
	}

	public function getTipo() { return $this->tipo; }
	public function setTipo($tipo) { $this->tipo = $tipo; }

	public function consultarClique($coluna, $restricao){
		if ($coluna == "today")
			$valores["dia"] = $this->getDia();
		$valores["tipo"] = $this->getTipo();
		$valores["mes"] = $this->getMes();
		$valores["ano"] = $this->getAno();
		$sql = "SELECT cliques FROM $coluna ".$restricao;
		return parent::executarFetchAll($sql, $valores);
	}

	public function adicionarClique($coluna, $restricao, $cliques){
		if ($coluna == "today")
			$valores["dia"] = $this->getDia();
		$valores["newclique"] = $cliques + 1;
		$valores["tipo"] = $this->getTipo();
		$valores["mes"] = $this->getMes();
		$valores["ano"] = $this->getAno();
		$sql = "UPDATE $coluna ".$restricao;
		return parent::executarSql($sql, $valores);
	}
}
?>