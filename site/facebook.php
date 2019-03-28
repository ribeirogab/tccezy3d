<?php 
require_once"Object_createMeta.php";
require_once"AutomaticTable.php";
$face = new AutomaticTable();
$face->setColuna("facebook");
$face->consultar();
$face->criarAtributo();
$face->addClique();
$face->addCliqueToday();

?>