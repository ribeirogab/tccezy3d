<?php
require_once "Classes/Conexao.php";
require_once "Classes/CriarAtributos.php";
require_once "Classes/AddClique.php";

$obj = new CriarAtributos();
$obj->criarAcesso();
$obj->criarMetas("visualizacoes", "WHERE mes=:mes AND ano=:ano");
$obj->criarMetas("cadastro", "WHERE mes=:mes AND ano=:ano");
$obj->criarMetas("orcamento", "WHERE mes=:mes AND ano=:ano");

// Adicionando cliques
if (!isset($_GET["tipo"])) {
    $tipo = "browser";
} else {
    $tipo = $_GET["tipo"];
}

$addClique = new AddClique($tipo);
$cliquesToday = $addClique->consultarClique("WHERE mes=:mes AND ano=:ano AND dia=:dia");
$addClique->adicionarClique($tipo, "SET $tipo=:tipo WHERE dia=:dia AND mes=:mes AND ano=:ano", $cliquesToday[0][0], $cliquesToday[0][1]);

if ($tipo == "orcamento") {
    header("Location:orcamento_enviado.php");
} else if ($tipo == "suporte") {
    header("Location:suporte_enviado.php");
} else if ($tipo == "cadastro") {
    $email = $_GET['email'];
    header("Location:home.php?email=$email");
} else {
    header("Location: inicio.php");
}
