<?php 
class Data extends Conexao{
	protected $dia;
	protected $mes;
	protected $ano;

	public function __construct(){
		parent::__construct();
		parent::conectar();
		date_default_timezone_set('America/Sao_Paulo');
		$this->dia = date('d');
		$this->mes = intval(date("m"));
		$this->ano = date("Y");
	}

	public function getDia() { return $this->dia; }
	public function getMes() { return $this->mes; }
	public function getAno() { return $this->ano; }

	public function setDia($dia) { $this->dia = $dia; }	 
	public function setMes($mes) {$this->mes = $mes; }
	public function setAno($ano) { $this->ano = $ano; }
}
?>