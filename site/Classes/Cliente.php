<?php 
class Cliente extends Conexao{
	protected $cod;
	protected $nome;
	protected $sobrenome;
	protected $email;
	protected $telefone;
	protected $senha;
	protected $pais;
	protected $ramo;
	protected $empresa;

	public function __construct(){
		parent::__construct();
		parent::conectar();
	}

	public function setCod($cod){ $this->cod = $cod; }
	public function setNome($nome){ $this->nome = $nome; }
	public function setSobrenome($sobrenome){ $this->sobrenome = $sobrenome; }
	public function setEmail($email){ $this->email = $email; }
	public function setTelefone($telefone){ $this->telefone = $telefone; }
	public function setSenha($senha){ $this->senha = $senha; }
	public function setPais($pais){ $this->pais = $pais; }
	public function setRamo($ramo){ $this->ramo = $ramo; }
	public function setEmpresa($empresa){ $this->empresa = $empresa; }

	public function getCod(){ return $this->cod; }
	public function getNome(){ return $this->nome; }
	public function getSobrenome(){ return $this->sobrenome; }
	public function getEmail(){ return $this->email; }
	public function getTelefone(){ return $this->telefone; }
	public function getSenha(){ return $this->senha; }
	public function getPais(){ return $this->pais; }
	public function getRamo(){ return $this->ramo; }
	public function getEmpresa(){ return $this->empresa; }

	public function cadastrar($coluna, $restricao, $valores){
		$sql = "INSERT INTO $coluna VALUES($restricao)";
		if(parent::executarSql($sql, $valores))
			echo "<script>alert('Cadastrado efetuado com sucesso!');</script>";
		else
			echo "<script>alert('Falha ao realizar cadastro!');</script>";
	}
	public function consultar($restricao, $cod){
		$sql = "SELECT * FROM cliente ".$restricao;
		return parent::executarFetchAll($sql, $cod);
	}
	public function alterar($set, $val){
		$sql = "UPDATE cliente SET $set";
		parent::executarSql($sql, $val);
	}
	public function excluir($restricao, $cod){
		$sql = "DELETE FROM cliente $restricao";
		if(parent::executarSql($sql, $cod))
			echo "Exclusão efetuada com sucesso!";
		else
			echo "Falha ao realizar exclusão!";
	}
	public function criarSession($idcliente, $nome, $sobrenome, $email, $senha, $telefone, $pais, $ramo, $empresa){
		session_start();
		$_SESSION["idcliente"] = $idcliente;
		$_SESSION["nome"] = $nome;
		$_SESSION["sobrenome"] = $sobrenome;
		$_SESSION["banana"] = $email;
		$_SESSION["telefone"] = $telefone;
		$_SESSION["senha"] = $senha;
		$_SESSION["pais"] = $pais;
		$_SESSION["ramo"] = $ramo;
		$_SESSION["empresa"] = $empresa;
		
	}
}
?>