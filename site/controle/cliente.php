<?php 
require_once"../Classes/Conexao.php";
require_once"../Classes/Cliente.php";
foreach ($_POST as $indice => $valor) {
	$$indice = $valor;
}
$cliente = new Cliente();
if ($tipo == "cadastrar"){
	$dados = ["cod" => 0, "nome" => $nome,"sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone, "senha" => $senha, "pais" => $pais, "ramo" => $ramo, "empresa" => $empresa];
	$cliente->cadastrar();
	echo "<script>window.location.href='../home.php'</script>";
}
else if($tipo == "login"){
	$dados = ["email" => $email];
	$logon = $cliente->consultar("WHERE email=:email", $dados);
	if($logon[0]["senha"] === $senha){
		echo "deu";
	}
	else
		echo "<script>alert('senha ou email incorretos');</script>";

}
?>