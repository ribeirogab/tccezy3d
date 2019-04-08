<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		
	</div>
	<form action="cadastro_cliente.php" method="post">
		<input type="text" name="nome" placeholder="Nome"><br><br>
		<input type="email" name="email" placeholder="E-mail"><br><br>
		<input type="number" name="telefone" placeholder="Telefone"><br><br>
		<input type="text" name="cpf" placeholder="CPF"><br><br>
		<input type="password" name="senha" placeholder="Senha"><br><br>
		<input type="text" name="pais" placeholder="Pais"><br><br>
		<input type="text" name="ramo" placeholder="Ramo"><br><br>
		<input type="text" name="empresa" placeholder="Empresa"><br><br>
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>