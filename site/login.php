<?php 
require_once"conexao.php";
require_once"Classes/CriarSessionCliente.php";
foreach ($_POST as $indice => $valor) {
  $$indice = $valor;
}
$sql = "SELECT idcliente FROM cliente WHERE email=:email AND senha=:senha";
$cmd = $conexao->prepare($sql);
$cmd->bindParam(":email", $email);
$cmd->bindParam(":senha", $senha);
$cmd->execute();
$id = $cmd->fetch();
if(!$id)
  echo "<script>alert('Email ou senha incorreto(s)!');window.location.href='home.php';</script>";
else{
  $c1 = new CriarSessionCliente();
  $c1->setEmail($email);
  $c1->criandoSession();
  header("Location: home.php");
}
?>