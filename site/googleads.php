<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$ads = new AutomaticTable();
$ads->setColuna("googleads");
$ads->consultar();
$ads->criarAtributo();
$ads->addClique();
$ads->addCliqueToday();
header("Location: home.php");
?>