<?php 
class CriarAtributos{
	private $mes;
	private $ano;
	private $dia;

	public function __construct(){
		date_default_timezone_set('America/Sao_Paulo');
		$this->setMes(intval(date("m")));
		$this->setAno(date("Y"));
		$this->setDia(date('d'));
	}

	public function criarAcesso(){
		include"conexao.php";
		$tipos = ["facebook", "instagram", "googleads", "browser", "orcamento", "cadastro"];
		for ($i = 0; $i < count($tipos) ; $i++) {
			$sql = "INSERT INTO acesso VALUES(:mes, :ano, :tipo, 0)";
			$cmd = $conexao->prepare($sql);
			$cmd->bindValue(":mes", $this->getMes());
			$cmd->bindValue(":ano", $this->getAno());
			$cmd->bindValue(":tipo", $tipos[$i]);
			$cmd->execute();
		}	
	}
	public function criarToday(){
		include"conexao.php";
		$sqlDelete = "DELETE FROM today WHERE dia=:dia";
		$cmdDelete = $conexao->prepare($sqlDelete);
		$cmdDelete->bindValue(":dia", $this->getDia() - 8);
		$cmdDelete->execute();

		$tipos = ["facebook", "instagram", "googleads", "browser", "orcamento", "cadastro"];
		for ($i = 0; $i < count($tipos) ; $i++) {
			$sql = "INSERT INTO today VALUES(:dia, :mes, :ano, :tipo, 0)";
			$cmd = $conexao->prepare($sql);
			$cmd->bindValue(":dia", $this->getDia());
			$cmd->bindValue(":mes", $this->getMes());
			$cmd->bindValue(":ano", $this->getAno());
			$cmd->bindValue(":tipo", $tipos[$i]);
			$cmd->execute();
		}	
	}
	public function criarMetas(){
		include"conexao.php";
		$sqlView = "SELECT SUM(cliques) AS 'visualizacoes' FROM acesso WHERE mes=:mes AND ano=:ano 
		AND tipo='facebook' OR tipo='instagram' OR tipo='googleads' OR tipo='browser'";
		$cmdView = $conexao->prepare($sqlView);
		if($this->getMes() == 1){
			$cmdView->bindValue(":mes", 12);
			$cmdView->bindValue(":ano", $this->getAno() - 1);
		}
		else{
			$cmdView->bindValue(":mes", $this->getMes() - 1);
			$cmdView->bindValue(":ano", $this->getAno());
		}
		$cmdView->execute();
		$total = $cmdView->fetch();
		$visualizacoes = $total['visualizacoes'];
		$metaView = $visualizacoes + ($visualizacoes / 100 * 10);

		$insertMetaView = "INSERT INTO metas VALUES(:mes, :ano, :tipo, :meta)";
		$cmdMetaView = $conexao->prepare($insertMetaView);
		$cmdMetaView->bindValue(":mes", $this->getMes());
		$cmdMetaView->bindValue(":ano", $this->getAno());
		$cmdMetaView->bindValue(":tipo", 'visualizacoes');
		$cmdMetaView->bindValue(":meta", $metaView);
		$cmdMetaView->execute();

		$orcamento_cadastro = ["orcamento", "cadastro"];
		for ($i = 0; $i < count($orcamento_cadastro) ; $i++) {
			$sqlOrcamentoCadastro = "SELECT cliques AS 'conversoes' FROM acesso WHERE mes=:mes AND ano=:ano AND tipo=:tipo";
			$cmdOc = $conexao->prepare($sqlOrcamentoCadastro);
			if($this->getMes() == 1){
				$cmdOc->bindValue(":mes", 12);
				$cmdOc->bindValue(":ano", $this->getAno() - 1);
			}
			else{
				$cmdOc->bindValue(":mes", $this->getMes() - 1);
				$cmdOc->bindValue(":ano", $this->getAno());
			}
			$cmdOc->bindValue(":tipo", $orcamento_cadastro[$i]);
			$cmdOc->execute();
			$total = $cmdOc->fetch();
			$conversoes = $total['conversoes'];
			$metaOc = $conversoes + ($conversoes / 100 * 10);

			$insertMetaOc = "INSERT INTO metas VALUES(:mes, :ano, :tipo, :meta)";
			$cmdMetaOc = $conexao->prepare($insertMetaOc);
			$cmdMetaOc->bindValue(":mes", $this->getMes());
			$cmdMetaOc->bindValue(":ano", $this->getAno());
			$cmdMetaOc->bindValue(":tipo", $orcamento_cadastro[$i]);
			$cmdMetaOc->bindValue(":meta", $metaOc);
			$cmdMetaOc->execute();
		}	
	}
	public function getMes(){
		return $this->mes;
	}
	public function getAno(){
		return $this->ano;
	}
	public function getDia(){
		return $this->dia;
	}

	public function setMes($m){
		$this->mes = $m;
	}
	public function setAno($a){
		$this->ano = $a;
	}
	public function setDia($d){
		$this->dia = $d;
	}
}
?>