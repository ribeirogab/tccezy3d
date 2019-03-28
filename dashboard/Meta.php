<?php 
class Meta{
	private $coluna;
	private $progresso;

	public function getColuna(){return $this->coluna;}
	public function setColuna($coluna){$this->coluna = $coluna;}

	public function getProgresso(){return $this->progresso;}
	public function setProgresso($progresso){$this->progresso = $progresso;}

	public function progresso(){
		include"../site/conexao.php";
		$sql_metas = "SELECT ".$this->getColuna()." FROM metas";
		$cmd_metas = $conexao->prepare($sql_metas);
		$cmd_metas->execute();
		$registroMetas = $cmd_metas->fetch();
		$meta = $registroMetas[$this->getColuna()];
		if ($this->getColuna() == "visualizacoes") {
			$sql_sumViews = "SELECT SUM(a.cliques + b.cliques + c.cliques) AS 'total'
			FROM instagram AS a INNER JOIN facebook AS b INNER JOIN googleads AS c
			WHERE a.mes=:month AND a.ano=:year AND b.mes=:month AND b.ano=:year AND c.mes=:month AND c.ano=:year";
			$cmd_sumViews = $conexao->prepare($sql_sumViews);
			$cmd_sumViews->bindValue(":month", intval(date("m")));
			$cmd_sumViews->bindValue(":year", date("Y"));
			$cmd_sumViews->execute();
			$total = $cmd_sumViews->fetch();
			$now = $total['total'];
		}
		else{
			$sql_dados = "SELECT".$this->getColuna()." AS 'total' FROM metas";
			$cmd_dados = $conexao->prepare($sql_dados);
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