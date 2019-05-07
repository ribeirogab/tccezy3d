<?php 
require_once"../Classes/Conexao.php";
require_once"../Classes/Cliente.php";
extract($_POST);
$cliente = new Cliente();
if ($tipo == "cadastro"){
	$dados = ["cod" => 0, "nome" => $nome,"sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone, "senha" => $senha, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa];
	$cliente->__construct($dados);
	$cliente->cadastrar();
	echo "<script>window.location.href='../index.php?tipo=cadastro'</script>";
}
else if($tipo == "login"){
	$dados = ["email" => $email];
	$logon = $cliente->consultar("WHERE email=:email", $dados);
	if($logon[0]["senha"] === $senha){
		$cliente->criarSession($logon[0]["email"], $logon[0]["nome"]);
		echo "<script>alert('Logado com sucesso');window.location.href='../home.php'</script>";
	}
	else
		echo "<script>alert('Senha ou email incorreto(s)');window.location.href='../home.php';</script>";	
}
else if($tipo == "excluir"){
	$dados = ["id" => $id];
	$cliente->excluir("WHERE idcliente=:id", $dados);
}
else if($tipo == "consultar"){
	$dados = ["id" => $id];
	$retorno = $cliente->consultar("WHERE idcliente=:id", $dados);
	echo json_encode($retorno);
}
else if($tipo == "alterar"){
	if($subtipo == "nome"){
		$dados = ["nome" => $nome, "sobrenome" => $sobrenome, "id" => $id];
		$cliente->alterar("nome=:nome, sobrenome=:sobrenome WHERE idcliente=:id", $dados);
		$dados2 = ["id" => $id];
		$retorno = $cliente->consultar("WHERE idcliente=:id", $dados2);
		echo json_encode($retorno);
	}
}
?>