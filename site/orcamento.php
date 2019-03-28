<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$orcamento = new AutomaticTable();
$orcamento->setColuna("orcamento");
$orcamento->consultar();
$orcamento->criarAtributo();
$orcamento->addClique();
$orcamento->addCliqueToday();
header("Location: home.php");
?>