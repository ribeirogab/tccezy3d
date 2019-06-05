<?php 

include_once "../site/Classes/Crud.php";
include_once "../site/Classes/Contato_classeProvisoria.php";

foreach ($_POST as $valor => $indice) {
	$$valor = $indice;
}

$obj1 = new Contato();

$obj1->setIdContato(0);
$obj1->setNome($nome);
$obj1->setEmail($destinatario);
$obj1->setAssunto($assunto);
$obj1->setMsg($mensagem);
$obj1->cadastrar();

?>