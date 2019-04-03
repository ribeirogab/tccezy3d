<?php 

class Today{
	private $tipo;
	private $total;

	public function getTipo(){return $this->tipo;}
	public function setTipo($tipo){$this->tipo = $tipo;}

	public function getTotal(){return $this->total;}
	public function setTotal($total){$this->total = $total;}

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
		$cmd->bindValue(":dia", date('d'));
		$cmd->bindValue(":mes", intval(date("m")));
		$cmd-> bindValue(":ano", date("Y"));
		$cmd->execute();
		$dados = $cmd->fetch();
		if($dados["total"])
			$this->setTotal($dados["total"]);
		else
			$this->setTotal(0);
	}
}
?>