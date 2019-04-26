<?php 
require_once"conexao.php";
if(!isset($_POST['email'])){
	header("Location: home.php");
}
foreach ($_POST as $indice => $valor) {
	$$indice = $valor;
}
$sqlConsultarEmail = "SELECT email FROM cliente WHERE email=:email";
$cmd1 = $conexao->prepare($sqlConsultarEmail);
$cmd1->bindParam(":email", $email);
$cmd1->execute();
$emailbd = $cmd1->fetch();
if(!$emailbd['email']){
	$sqlCadastro = "INSERT INTO cliente VALUES(0, :nome, :sobrenome, :email, :telefone,:senha, :pais, :setor, :empresa)";
	$cmd2 = $conexao->prepare($sqlCadastro);
	$cmd2->bindParam(":nome", $nome);
	$cmd2->bindParam(":sobrenome", $sobrenome);
	$cmd2->bindParam(":email", $email);
	$cmd2->bindParam(":telefone", $telefone);
	$cmd2->bindParam(":senha", $senha);
	$cmd2->bindParam(":pais", $pais);
	$cmd2->bindParam(":setor", $setor);
	$cmd2->bindParam(":empresa", $empresa);
	if($cmd2->execute()){
		echo "<script>alert('Cadastro efetuado com sucesso!')</script>";
		include_once"criarAtributo.php";
		require_once"Classes/AddClique.php";
		$a1 = new AddClique();
		$a1->setTipo("cadastro");
		$a1->insertClique();
		require_once"Classes/CriarSessionCliente.php";
		$c1 = new CriarSessionCliente();
		$c1->setEmail($email);
		$c1->criandoSession();
		echo "<script>window.location.href='home.php';</script>";
	}
	else
	echo "<script>alert('Erro ao cadastrar!');</script>";
}
else
	echo "<script>alert('E-mail ja cadastrado!');window.location.href='form_cadastrar.php';</script>";
?>