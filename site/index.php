<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$browser = new AutomaticTable();
$browser->setColuna("browser");
$browser->consultar();
$browser->criarAtributo();
$browser->addClique();
$browser->addCliqueToday();
header("Location: home.php");
?>