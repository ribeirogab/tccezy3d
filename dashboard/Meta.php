<?php 
class Meta{
	private $tipo;
	private $progresso;

	public function getTipo(){return $this->tipo;}
	public function setTipo($tipo){$this->tipo = $tipo;}

	public function getProgresso(){return $this->progresso;}
	public function setProgresso($progresso){$this->progresso = $progresso;}

	public function progresso(){
		include"../site/conexao.php";
		$sql_metas = "SELECT meta FROM metas WHERE tipo=:tipo";
		$cmd_metas = $conexao->prepare($sql_metas);
		$cmd_metas->bindValue(":tipo", $this->getTipo());
		$cmd_metas->execute();
		$registroMetas = $cmd_metas->fetch();
		$meta = $registroMetas["meta"];

		if ($this->getTipo() == "visualizacoes") {
			$sql_sumViews = "SELECT SUM(cliques) AS 'total' FROM acesso WHERE (mes=:mes AND ano=:ano) 
			AND (tipo='facebook' OR tipo='instagram' OR tipo='googleads' OR tipo='browser')";
			$cmd_sumViews = $conexao->prepare($sql_sumViews);
			$cmd_sumViews->bindValue(":mes", intval(date("m")));
			$cmd_sumViews->bindValue(":ano", date("Y"));
			$cmd_sumViews->execute();
			$total = $cmd_sumViews->fetch();
			$now = $total['total'];
		}
		else{
			$sql_dados = "SELECT cliques AS 'total' FROM acesso WHERE (mes=:mes AND ano=:ano) AND (tipo=:tipo)";
			$cmd_dados = $conexao->prepare($sql_dados);
			$cmd_dados->bindValue(":mes", intval(date("m")));
			$cmd_dados->bindValue(":ano", date("Y"));
			$cmd_dados->bindValue(":tipo", $this->getTipo());
			$cmd_dados->execute();
			$total = $cmd_dados->fetch();
			$now = $total['total'];
		}
		if($meta == 0)
			$this->setProgresso(null);
		else{
			$formula = 100 - ((($meta - $now) / $meta) * 100);
			$this->setProgresso(intval($formula)."%");
		}
	}
}
?>