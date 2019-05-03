<?php 
require_once"../Classes/Conexao.php";
require_once"../Classes/Cliente.php";
foreach ($_POST as $indice => $valor) {
	$$indice = $valor;
}
$cliente = new Cliente();
if ($tipo == "cadastro"){
	$dados = ["cod" => 0, "nome" => $nome,"sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone, "senha" => $senha, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa];
	$cliente->__construct($dados);
	echo "<script>window.location.href='../index.php?tipo=cadastro'</script>";
}
else if($tipo == "login"){
	$dados = ["email" => $email];
	$logon = $cliente->consultar("WHERE email=:email", $dados);
	if($logon[0]["senha"] === $senha){
		echo "DEU CERTO, TERMINA ESSA PORRA LOGO";
	}
	else
		echo "<script>alert('senha ou email incorretos');</script>";
}
?>