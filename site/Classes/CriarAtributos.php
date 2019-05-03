<?php 
require_once"Data.php";
class CriarAtributos extends Data{
	private $tipos;
	public function __construct(){
		parent::__construct();
		$this->tipos[0] = "facebook";
		$this->tipos[1] = "instagram";
		$this->tipos[2] = "googleads";
		$this->tipos[3] = "browser";
		$this->tipos[4] = "orcamento";
		$this->tipos[5] = "cadastro";
	}

	public function getTipo() { return $this->tipo; }

	public function setTipo($tipo) { $this->tipo = $tipo; }

	public function criarAcessoOuToday($coluna, $restricao){
		for($i = 0; $i < count($this->tipos) ; $i++){
			if ($coluna == "today")
				$valores["dia"] = $this->getDia();
			$valores["mes"] = $this->getMes();
			$valores["ano"] = $this->getAno();
			$valores["tipo"] = $this->tipos[$i];
			$sql = "INSERT INTO $coluna VALUES($restricao)";
			parent::executarSql($sql, $valores);
		}
	}

	public function deletarToday($restricao){
		$sql = "DELETE FROM today $restricao";
		$valores["mes"] = $this->getMes();
		parent::executarSql($sql, $valores);
	}

	public function criarMetas($coluna, $grupo, $restricao){
		$sql1 = "SELECT SUM(cliques) AS 'dados' FROM $coluna ".$restricao;
		if ($this->getMes() == 1){
			$valores1["mes"] = 12;
			$valores1["ano"] = $this->getAno() - 1;
		}
		else{
			$valores1["mes"] = $this->getMes() - 1;
			$valores1["ano"] = $this->getAno();
		}
		if ($grupo == "orcamento" || $grupo == "cadastro")
			$valores1["tipo"] = $grupo;

		$retorno = parent::executarFetchAll($sql1, $valores1);
		$dados = $retorno[0]['dados'];
		$meta = $dados + ($dados / 100 * 10);


		$inserirMeta = "INSERT INTO metas VALUES(:mes, :ano, :tipo, :meta)";
		$valores2["mes"] = $this->getMes();
		$valores2["ano"] = $this->getAno();
		$valores2["tipo"] = $grupo;
		$valores2["meta"] = $meta;
		parent::executarSql($inserirMeta, $valores2);
	}
}
?>