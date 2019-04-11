<?php 
class CriarSessionCliente {
	private $email;
	private $idcliente;
	private $cliente;

	public function __construct(){
		$this->setIdcliente($this->getIdcliente());
		$this->setEmail($this->getEmail());
	}

	public function getIdcliente(){ return $this->idcliente; }
	public function getEmail(){ return $this->email; }
	public function getCliente(){ return $this->cliente; }

	public function setIdcliente($id){ $this->idcliente = $id; }
	public function setEmail($email){ $this->email = $email; }
	public function setCliente($cliente){ $this->cliente = $cliente; }

	public function criandoSession(){
		include"conexao.php";
		$sql = "SELECT idcliente FROM cliente WHERE email=:email";
		$cmd = $conexao->prepare($sql);
		$cmd->bindValue(":email", $this->getEmail());
		$cmd->execute();
		$id = $cmd->fetch();
		$this->setIdcliente($id['idcliente']);
		session_start();
		$_SESSION['banana'] = $this->getIdcliente();
	}

	public function consultarSession(){
		include"conexao.php";
		session_start();
		if (isset($_SESSION['banana'])) {
			$sql = "SELECT nome FROM cliente WHERE idcliente=:id";
			$cmd = $conexao->prepare($sql);
			$cmd->bindValue(":id", $_SESSION['banana']);
			$cmd->execute();
			$cliente = $cmd->fetch();
			$this->setCliente($cliente['nome']);
		}
	}
}
?>