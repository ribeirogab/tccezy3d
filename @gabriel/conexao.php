<?php
$server = "localhost";
$db = "batata";
$user = "root";
$password = "";
$conexao = new PDO("mysql:host=$server;dbname=$db",
$user,
$password,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>