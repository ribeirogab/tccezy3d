<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$insta = new AutomaticTable();
$insta->setColuna("instagram");
$insta->consultar();
$insta->criarAtributo();
$insta->addClique();
$insta->addCliqueToday();
header("Location: home.php");
?>