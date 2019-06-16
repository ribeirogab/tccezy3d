<?php
require_once "Crud.php";
class Usuario extends Crud
{

    public function __construct()
    {
        parent::__construct();
    }

    public function criarSession($idcliente, $nome, $sobrenome, $email, $senha, $telefone, $pais, $ramo, $empresa)
    {
        session_start();
        $_SESSION["idcliente"] = $idcliente;
        $_SESSION["nome"] = $nome;
        $_SESSION["sobrenome"] = $sobrenome;
        $_SESSION["banana"] = $email;
        $_SESSION["telefone"] = $telefone;
        $_SESSION["senha"] = $senha;
        $_SESSION["pais"] = $pais;
        $_SESSION["ramo"] = $ramo;
        $_SESSION["empresa"] = $empresa;
    }

    public function criarSessionAdmin($idadmin, $nome, $cargo, $email, $permissao)
    {
        session_start();
        $_SESSION["idadmin"] = $idadmin;
        $_SESSION["nome_admin"] = $nome;
        $_SESSION["cargo_admin"] = $cargo;
        $_SESSION["email_admin"] = $email;
        $_SESSION["permissao"] = $permissao;
    }
}
