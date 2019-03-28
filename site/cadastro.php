<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$newsletter = new AutomaticTable();
$newsletter->setColuna("newsletter");
$newsletter->consultar();
$newsletter->criarAtributo();
$newsletter->addClique();
$newsletter->addCliqueToday();
header("Location: home.php");
?>