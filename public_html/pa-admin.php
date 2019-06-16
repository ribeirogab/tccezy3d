<?php
session_start();
if (isset($_SESSION['banana'])) {
	header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Login - Painel Administrativo</title>
	<meta charset="UTF-8">
	<noscript>
		<meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
	<link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="vendor/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_util.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" action="controle/admin.php" method="post">
				<input type="hidden" name="tipo" value="login">
				<span class="login100-form-title p-b-48">
					<img src="vendor/img/logo/logo_orange.svg" width="80px">
				</span>
				<h5 class="text-center mb-5">Painel Administrativo</h5>
				<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
					<input class="input100" type="text" name="email_admin">
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>

				<div class="wrap-input100 validate-input mt-4" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="senha_admin">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div id="loginIncorreto" class="w-100 bg-warning p-2 mt-3" style="display: none;font-size: 12px;">
					<div class="row">
						<div class="col-1">
							<i class="fas fa-exclamation-circle"></i>
						</div>
						<div class="col-9">
							<span>Senha ou e-mail incorreto(s).</span>
						</div>
						<div class="col-1 text-right">
							<i id="btnClose-loginIncorreto" class="fas fa-times" style="font-size: 12px;cursor: pointer;"></i>
						</div>
					</div>
				</div>
				<div id="caracterNone" class="w-100 bg-warning p-2 mt-3" style="display: none;font-size: 12px;">
					<div class="row">
						<div class="col-1">
							<i class="fas fa-exclamation-circle"></i>
						</div>
						<div class="col-9">
							<span>Preencha os campos corretamente.</span>
						</div>
						<div class="col-1 text-right">
							<i id="btnClose-caracterNone" class="fas fa-times" style="font-size: 12px;cursor: pointer;"></i>
						</div>
					</div>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button id="btn-login" class="login100-form-btn">
							Login
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/js/logar_main.js"></script>
	<script>
		$("#btn-login").on("click", function() {
			let email = $("input[name=email_admin]").val()
			let senha = $("input[name=senha_admin]").val()
			$.ajax({
				// url: "http://www.ezy3d.com.br/controle/admin.php",
				url: "http://localhost/tccezy3d/public_html/controle/admin.php",
				method: "POST",
				data: {
					"tipo": "verificarLogin",
					"email_admin": email,
					"senha_admin": senha
				},
				success: function(resposta) {
					let requisicao = 0;
					var json = $.parseJSON(resposta)
					let verificarLogin = json[0][0]

					if (email.length == 0 || senha.length == 0) {
						$("#loginIncorreto").hide()
						$("#caracterNone").fadeIn('slow')
					} else {
						$("#loginIncorreto").hide()
						$("#caracterNone").hide()
						requisicao++
					}

					if (verificarLogin != 1 && (email.length >= 1 && senha.length >= 1))
						$("#loginIncorreto").fadeIn('slow')
					else {
						$("#loginIncorreto").hide()
						requisicao++
					}

					if (requisicao === 2) {
						$("form").submit()
					}
				},
				timeout: 3000,
				error: function() {
					alert("O servidor demorou muito para responder. Tente novamente!")
					window.location.href = 'http://www.ezy3d.com.br/pa-admin.php'
				}
			})
		})

		$("#btnClose-loginIncorreto").click(function() {
			$("#loginIncorreto").hide()
		})
		$("#btnClose-caracterNone").click(function() {
			$("#caracterNone").hide()
		})
	</script>

</body>

</html>