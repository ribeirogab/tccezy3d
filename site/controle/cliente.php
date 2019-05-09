<?php 
error_reporting(0);
ini_set(“display_errors”, 0 );
if(!isset($_POST["tipo"]))
	header("Location: home.php");

require_once"../Classes/Conexao.php";
require_once"../Classes/Cliente.php";
extract($_POST);
$cliente = new Cliente();
if ($tipo == "cadastro"){
	$dados = ["cod" => 0, "nome" => $nome,"sobrenome" => $sobrenome, "email" => $email,  "senha" => $senha, "telefone" => $telefone, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa];
	$cliente->cadastrar("cliente", ":cod, :nome, :sobrenome, :email, :senha, :telefone, :pais, :ramo, :empresa", $dados);
	echo "<script>window.location.href='../index.php?tipo=cadastro'</script>";
}
else if($tipo == "login"){
	$dados = ["email" => $email_login];
	$logon = $cliente->consultar("WHERE email=:email", $dados);
	if($logon[0]["senha"] === $senha_login){
		$cliente->criarSession($logon[0]["idcliente"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"],  $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);
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
	$dados1 = ["nome" => $nome, "sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa, "oldemail" => $oldemail];
	$cliente->alterar("nome=:nome, sobrenome=:sobrenome, email=:email, telefone=:telefone, pais=:pais, ramo=:ramo, empresa=:empresa WHERE email=:oldemail", $dados1);

	$dados2 = ["email" => $email];
	$logon = $cliente->consultar("WHERE email=:email", $dados2);
	$cliente->criarSession($logon[0]["idcliente"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"], $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);

	header("Location:../perfil_cliente.php?status=success");
}
else if($tipo == "orcamento"){
	if(strlen($descricao) == 0){
		$_POST["descricao"] = "null";
		$descricao = $_POST["descricao"];
	}

	$agrupar = [];
	foreach ($_POST as $value) {
		if($value == strstr($value, "produto")){
			$partes = explode("_", $value);
			$nome_produto = $partes[1];
			$agrupar[] .= $nome_produto;
		}	
	}
	// verificação de preenchimento dos checkboxs
	if(count($agrupar) == 0)
		header("Location:../perfil_cliente.php");

	$produtos = implode(', ', $agrupar);
	$dados = ["idorcamento" => 0, "fkcliente" => $idcliente, "produtos" => $produtos, "descricao" => $descricao, "data" => date("Y-m-d H:i:s")];
	$cliente->cadastrar("orcamento", ":idorcamento, :fkcliente, :produtos, :descricao, :data", $dados);
	header("Location: ../index.php?tipo=orcamento");
}
else
	header("Location:../home.php");
?>