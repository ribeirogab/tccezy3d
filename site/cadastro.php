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
	$sqlCadastro = "INSERT INTO cliente VALUES(0, :nome, :email, :telefone, :ramo, :empresa)";
	$cmd2 = $conexao->prepare($sqlCadastro);
	$cmd2->bindParam(":nome", $nome);
	$cmd2->bindParam(":email", $email);
	$cmd2->bindParam(":telefone", $telefone);
	$cmd2->bindParam(":ramo", $ramo);
	$cmd2->bindParam(":empresa", $empresa);
	if($cmd2->execute()){
		echo "<script>alert('Cadastro efetuado com sucesso!')</script>";
		include_once"Object_criarAtributo.php";
		require_once"AddClique.php";
		$add_clique = new AddClique();
		$add_clique->setTipo("cadastro");
		$add_clique->insertClique();
		echo "<script>window.location.href='home.php';</script>";
	}
	else
	echo "<script>alert('E-mail ja cadastrado!');window.location.href='form_cadastrar.php';</script>";
}
else
	echo "<script>alert('E-mail ja cadastrado!');window.location.href='form_cadastrar.php';</script>";
?>