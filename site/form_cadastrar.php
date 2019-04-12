<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo_orange.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cadastro_util.css">
	<link rel="stylesheet" type="text/css" href="css/cadastro_main.css">
	<!--===============================================================================================-->
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">

	<style>
	#rowForm{
		width: 50%;
		border:solid 1px rgba(0,0,0,.2);
		padding: 25px;
		border-radius: 10px;
		background-color: rgba(255,255,255,.4);
	}
	@media screen and (max-width: 991px) {
		#rowForm{
			width: 100%;
		}
	}
</style>

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="row" id="rowForm">
				<div class="col-lg-7">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-48">
							<img src="img/logo/logo_orange.svg" class="float-left" width="40px">
						</span><br>
						<h4>Criar sua Conta da Ezy 3D</h4>
						<hr>
						<div class="form-row mt-4">
							<div class="form-group col-md-6 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<input class="input100" type="text" name="nome">
									<span class="focus-input100" data-placeholder="Nome"></span>
								</div>
							</div>
							<div class="form-group col-md-6 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<input class="input100" type="text" name="sobrenome">
									<span class="focus-input100" data-placeholder="Sobrenome"></span>
								</div>
							</div>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="email">
							<span class="focus-input100" data-placeholder="E-mail"></span>
						</div>

						<div class="form-row">
							<div class="form-group col-lg-12 col-xl-6 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="senha">
									<span class="focus-input100" data-placeholder="Senha"></span>
								</div>
							</div>
							<div class="form-group col-lg-12 col-xl-6 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="confirmsenha">
									<span class="focus-input100" data-placeholder="Confirmar senha"></span>
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<select class="input100" name="pais">
										<option value="">Pais...</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-8 mb-0">
								<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
									<select class="input100" name="setor" id="setor">
										<option value="nada">Setor...</option>
										<option value="outro">Outro</option>
										<option value="">Odontologia</option>
										<option value="">Educação</option>
										<option value="">Joalheria</option>
									</select>
								</div>
							</div>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c" id="setorOutro" style="display: none;">
							<input class="input100" type="text" name="setoroutro">
							<span class="focus-input100" data-placeholder="Setor"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="empresa">
							<span class="focus-input100" data-placeholder="Empresa"></span>
						</div>
						<div class="row">
							<div class="col-6" style="padding-top: 38px">
								<a href="form_logar.php">Já é cadastrado?</a>
							</div>
							<div class="container-login100-form-btn col-6">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Cadastrar
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col-5 d-lg-block d-md-none d-sm-none d-none">
					<div style="width: 100%; height: 300px; background-color: black;margin-top: 150px"></div>
					<p class="text-center mt-3">Cadastre-se para realizar orçamentos e receber suporte!</p>
				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/cadastro_main.js"></script>
	<script>
		$(document).ready(function() {
			$("#setor").change(function() {
				let setor = $(this).val();
				if(setor === "outro")
					$("#setorOutro").show();
				else if(setor != "outro")
					$("#setorOutro").hide();
			});
		});

	</script>
</body>
</html>