<?php 
include_once"Object_criarAtributo.php";
require_once"AddClique.php";
$add_clique = new AddClique();
$add_clique->setTipo("browser");
$add_clique->insertClique();
header("Location: home.php");
?>