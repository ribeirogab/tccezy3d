<?php 


include_once("Crud.php");

class Contato extends Crud{

	private $idContato;
	private $nome;
	private $email;
	private $assunto;
	private $msg;

	public function __construct() {
		parent::__construct();
	}

	public function setIdContato($val){
		$this->idContato = $val;
	}
	public function getIdContato(){
		return $this->idContato;
	}
	public function setNome($val){
		$this->nome = $val;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setEmail($val){
		$this->email = $val;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setAssunto($val){
		$this->assunto = $val;
	}
	public function getAssunto(){
		return $this->assunto;
	}
	public function setMsg($val){
		$this->msg = $val;
	}
	public function getMsg(){
		return $this->msg;
	}
	function Cadastrar(){			
		$valores["idcontato"] = $this->idContato;
		$valores["nome"] = $this->nome;
		$valores["email"] = $this->email;
		$valores["assunto"] = $this->assunto;
		$valores["msg"] = $this->msg;
		$sql = "INSERT INTO contato VALUES(:id,
		:nome, :email, :assunto, :msg)";
		parent::executarSQL($sql, $valores);
	}
	function Consultar($restricao, $valores){
		$sql = "SELECT * FROM contato ".$restricao;
		return parent::executarConsulta($sql, $valores);
	}
	function Excluir(){
		$valores["idcontato"] = $this->idContato;
		$sql = "DELETE FROM contato WHERE idcontato = :id";
		return parent::executarSQL($sql, $valores);
	}
	function Alterar(){
		$valores["idcontato"] = $this->CodAluno;
		$valores["nome"] = $this->NomeAluno;
		$valores["email"] = $this->SexoAluno;
		$valores["assunto"] = $this->IdadeAluno;
		$valores["msg"] = $this->Cidade;
		$sql = "UPDATE contato SET nome=:nome, email = :email, assunto = :assunto, msg = :msg WHERE idcontato = :id";
		parent::executarSQL($sql, $valores);
	}
}
?>
