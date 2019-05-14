<?php 
error_reporting(0);
ini_set(“display_errors”, 0 );
if(!isset($_POST["tipo"]))
	header("Location: home.php");

require_once"../Classes/Conexao.php";
require_once"../Classes/Cliente.php";
extract($_POST);
$cliente = new Cliente();

if($tipo == "verificarEmail"){
	$dados = ["email" => $email];
	$qtdEmail = $cliente->consultar("count(*)", "WHERE email=:email", $dados);
	echo json_encode($qtdEmail, JSON_UNESCAPED_UNICODE);
}
else if ($tipo == "cadastro"){
	$valor = ["email" => $email];
	$qtdEmail = $cliente->consultar("count(*)", "WHERE email=:email", $valor);
	if($qtdEmail[0][0] != 0)
		header("Location: ../form_cadastrar.php?error=true");
	else{
		if($ramo == "outro")
			$ramo = $outroRamo;

// FAZER REQUISIÇÕES

		$senhaCriptografada = sha1($senha);
		$dados = ["cod" => 0, "nome" => $nome,"sobrenome" => $sobrenome, "email" => $email,  "senha" => $senhaCriptografada, "telefone" => $telefone, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa];
		$cliente->cadastrar("cliente", ":cod, :nome, :sobrenome, :email, :senha, :telefone, :pais, :ramo, :empresa", $dados);
		header("Location: ../index.php?tipo=cadastro&email=$email");
	}
}


else if($tipo == "login"){
	$dados = ["email" => $email_login];
	$logon = $cliente->consultar("*", "WHERE email=:email", $dados);
	if($logon[0]["senha"] === sha1($senha_login)){
		$cliente->criarSession($logon[0]["idcliente"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"],  $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);
		header("Location: ../home.php");
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
	$retorno = $cliente->consultar("*", "WHERE idcliente=:id", $dados);
	echo json_encode($retorno, JSON_UNESCAPED_UNICODE);
}
else if($tipo == "consultarSenha"){
	$senhaold = ["senha" => sha1($inputSenha), "novasenha" => sha1($inputNovaSenha)];
	echo json_encode($senhaold, JSON_UNESCAPED_UNICODE);
}
else if($tipo == "alterar"){
	session_start();
	$idcliente = $_SESSION["idcliente"];
	$dados1 = ["nome" => $nome, "sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa, "idcliente" => $idcliente];
	$cliente->alterar("nome=:nome, sobrenome=:sobrenome, email=:email, telefone=:telefone, pais=:pais, ramo=:ramo, empresa=:empresa WHERE idcliente=:idcliente", $dados1);

	$dados2 = ["idcliente" => $idcliente];
	$logon = $cliente->consultar("*", "WHERE idcliente=:idcliente", $dados2);
	$cliente->criarSession($logon[0]["idcliente"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"], $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);

	header("Location:../perfil_cliente.php?status=success1");
}
else if($tipo == "alterar-senha"){
	session_start();
	$idcliente = $_SESSION["idcliente"];
	$dados = ["novasenha" => sha1($novasenha), "idcliente" => $idcliente];
	$cliente->alterar("senha=:novasenha WHERE idcliente=:idcliente", $dados);

	$dados2 = ["idcliente" => $idcliente];
	$logon = $cliente->consultar("*", "WHERE idcliente=:idcliente", $dados2);
	$cliente->criarSession($logon[0]["idcliente"], $logon[0]["nome"], $logon[0]["sobrenome"], $logon[0]["email"], $logon[0]["senha"], $logon[0]["telefone"], $logon[0]["pais"], $logon[0]["ramo"], $logon[0]["empresa"]);

	header("Location:../perfil_cliente.php?status=success2");
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