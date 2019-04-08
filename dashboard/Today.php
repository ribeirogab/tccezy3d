<?php 

class Today{
	private $tipo;
	private $total;

	public function __construct(){
		date_default_timezone_set('America/Sao_Paulo');
		$this->setMes(intval(date("m")));
		$this->setAno(date("Y"));
		$this->setDia(date('d'));
	}

	public function getTipo(){return $this->tipo;}
	public function getTotal(){return $this->total;}
	public function getMes(){return $this->mes;}
    public function getAno(){return $this->ano;}
    public function getDia(){return $this->dia;}

    public function setTipo($tipo){$this->tipo = $tipo;}
    public function setTotal($total){$this->total = $total;}
	public function setMes($mes){$this->mes = $mes;}
	public function setAno($ano){$this->ano = $ano;}
	public function setDia($dia){$this->dia = $dia;}

	public function total(){
		include"../site/conexao.php";
		if($this->getTipo() === "visitantes"){
			$dadosToday = "SELECT SUM(cliques) AS 'total' FROM today WHERE (dia=:dia AND fkmes=:mes AND fkano=:ano) 
			AND (fktipo='facebook' OR fktipo='instagram' OR fktipo='googleads' OR fktipo='browser')";
			$cmd = $conexao->prepare($dadosToday);
		}
		else{
			$dadosToday = "SELECT cliques AS 'total' FROM today WHERE (fktipo=:tipo) AND (dia=:dia AND fkmes=:mes AND fkano=:ano)";
			$cmd = $conexao->prepare($dadosToday);
			$cmd->bindValue(":tipo", $this->getTipo());
		}
		$cmd->bindValue(":dia", $this->getDia());
		$cmd->bindValue(":mes", $this->getMes());
		$cmd-> bindValue(":ano", $this->getAno());
		$cmd->execute();
		$dados = $cmd->fetch();
		if($dados["total"])
			$this->setTotal($dados["total"]);
		else
			$this->setTotal(0);
	}
}
?>