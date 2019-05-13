<?php 
session_start();
if(isset($_SESSION['banana']))
	header("Location:home.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="vendor/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/iconic/css/material-design-iconic-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_util.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_main.css">
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
	#avisoSenha{
		color: #555555;
		font-size: 13px;
	}
	#erroNome, #erroSobrenome, #erroEmail, #erroTelefone, #erroSenha, #erroConfirmarSenha, #erroPais, #erroRamo, #erroOutroRamo{
		color: red;
		font-size: 13px;
		margin-top: 5px;
		display: none;
	}
	#btn-submit{
		cursor:pointer;
	} 
</style>

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="row" id="rowForm">
				<div class="col-xl-7">
					<form action="controle/cliente.php" method="post" class="login100-form" id="form-cadastro">
						<input type="hidden" name="tipo" value="cadastro">
						<span class="login100-form-title p-b-48">
							<img src="vendor/img/logo/logo_orange.svg" class="float-left" width="40px">
						</span><br>
						<h4>Criar sua Conta da Ezy 3D</h4>
						<hr>
						<div class="form-row mt-4">
							<div class="form-group col-md-6 mb-4 pb-2">
								<div class="wrap-input100">
									<input class="input100" type="text" name="nome" minlength="3" maxlength="20" required>
									<span class="focus-input100" data-placeholder="Nome"></span>
								</div>
								<div id="erroNome">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Pelo menos 3 caracteres requeridos.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6 mb-4 pb-2">
								<div class="wrap-input100">
									<input class="input100" type="text" name="sobrenome" minlength="3" maxlength="30" required>
									<span class="focus-input100" data-placeholder="Sobrenome"></span>
								</div>
								<div id="erroSobrenome">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Pelo menos 3 caracteres requeridos.</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-4 pb-2">
							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="email" maxlength="40" required>
								<span class="focus-input100" data-placeholder="E-mail"></span>
							</div>
							<div id="erroEmail">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-exclamation-circle mr-1"></i>
									</div>
									<div class="col-9">
										<span>Informe um e-mail inválido.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-4 pb-2">
							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="telefone" minlength="15" maxlength="15" required>
								<span class="focus-input100" data-placeholder="Telefone (celular)"></span>
							</div>
							<div id="erroTelefone">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-exclamation-circle mr-1"></i>
									</div>
									<div class="col-9">
										<span>Informe um telefone inválido.</span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-row mb-4 pb-2">
							<div class="form-group col-lg-12 col-xl-6 mb-4 pb-2 mb-xl-1 pb-xl-0">
								<div class="wrap-input100">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="senha" minlength="8" required>
									<span class="focus-input100" data-placeholder="Senha"></span>
								</div>
								<div id="erroSenha">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Informe uma senha válida.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group col-lg-12 col-xl-6 mb-1">
								<div class="wrap-input100">
									<span class="btn-show-pass">
										<i class="zmdi zmdi-eye"></i>
									</span>
									<input class="input100" type="password" name="confirmarSenha" minlength="8" required>
									<span class="focus-input100" data-placeholder="Confirmar senha"></span>
								</div>
								<div id="erroConfirmarSenha">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Senhas não coecidem.</span>
										</div>
									</div>
								</div>
							</div>
							<span id="avisoSenha">
								Use 8 ou mais caracteres com uma mistura de letras e números.
							</span>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4 mb-4 pb-2">
								<div class="wrap-input100">
									<select class="input100" name="pais" required>
										<option value="null">Pais...</option>
										<option value="Brasil">Brasil</option>
									</select>
								</div>
								<div id="erroPais">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Selecione um pais.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group col-md-8 mb-4 pb-2">
								<div class="wrap-input100">
									<select class="input100" name="ramo" id="ramo" required>
										<option value="null">Ramo...</option>
										<option value="outro">Outro</option>
										<option value="Odontologia">Odontologia</option>
										<option value="">Educação</option>
										<option value="">Joalheria</option>
									</select>
								</div>
								<div id="erroRamo">
									<div class="row">
										<div class="col-1">
											<i class="fas fa-exclamation-circle mr-1"></i>
										</div>
										<div class="col-9">
											<span>Selecione um Ramo</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4 pb-2" id="outroRamo" style="display: none;">
							<div class="wrap-input100 validate-input"  data-validate="Valid email is: a@b.c">
								<input class="input100" type="text" name="outroRamo" minlength="3" maxlength="30">
								<span class="focus-input100" data-placeholder="Ramo"></span>
							</div>
							<div class="row" id="erroOutroRamo">
								<div class="col-1">
									<i class="fas fa-exclamation-circle mr-1"></i>
								</div>
								<div class="col-9">
									<span>3 caracteres requeridos</span>
								</div>
							</div>
						</div>

						<div class="mb-4 pb-2">
							<div class="wrap-input100">
								<input class="input100" type="text" name="empresa" maxlength="20">
								<span class="focus-input100" data-placeholder="Empresa (opcional)"></span>
							</div>
						</div>

						<div class="row">
							<div class="col-6" style="padding-top: 38px">
								<a href="form_logar.php">Já é cadastrado?</a>
							</div>
							<div class="container-login100-form-btn col-6">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<div id="btn-submit" class="login100-form-btn">
										Cadastrar
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="col-5 d-xl-block d-none">
					<img src="vendor/img/e1260-cartoon.png" width="100%" style="margin-top: 150px" alt="">
					<p class="text-center mt-3">Cadastre-se para pedir orçamentos e receber suporte!</p>
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
	<script src="vendor/js/cadastro_main.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery.mask.js"></script>
	<script>
		$(document).ready(function() {
			$("input[name=telefone]").mask("(99) 99999-9999");
			$("#ramo").change(function() {
				let ramo = $(this).val();
				if(ramo === "outro")
					$("#outroRamo").show();
				else if(ramo != "outro")
					$("#outroRamo").hide();
			});

			$("#btn-submit").on("click", function() {
				let nome = $("input[name=nome]").val()
				let sobrenome = $("input[name=sobrenome]").val()
				let email = $("input[name=email]").val()
				let telefone = $("input[name=telefone]").val()
				let senha = $("input[name=senha]").val()
				let confirmarSenha = $("input[name=confirmarSenha]").val()
				let pais = $("select[name=pais]").val()
				let ramo = $("select[name=ramo]").val()
				let outroRamo = $("input[name=outroRamo]").val()

				let requisicao = 0;

				if(nome.length < 3 || nome.length >= 30)
					$("#erroNome").show()
				else{
					$("#erroNome").hide()
					requisicao++
				}

				if(sobrenome.length < 3 || sobrenome.length >= 50)
					$("#erroSobrenome").show()
				else{
					$("#erroSobrenome").hide()
					requisicao++
				}

				if(email.length < 3 || email.indexOf("@") == -1 || email.length >= 50)
					$("#erroEmail").show()
				else{
					$("#erroEmail").hide()
					requisicao++
				}

				if(telefone.length != 15)
					$("#erroTelefone").show()
				else{
					$("#erroTelefone").hide()
					requisicao++
				}

				if(!senha.match(/[0-9]/g) || !senha.match(/[a-z]/g) || senha.length < 8){
					$("#erroSenha").show()
					$("#avisoSenha").css("color", "red")
				}
				else{
					$("#erroSenha").hide()
					$("#avisoSenha").css("color", "#555555")
					requisicao++
				}

				if(confirmarSenha != senha)
					$("#erroConfirmarSenha").show()
				else{
					$("#erroConfirmarSenha").hide()
					requisicao++
				}

				if (pais == "null")
					$("#erroPais").show()
				else{
					$("#erroPais").hide()
					requisicao++
				}

				if (ramo == "null"){
					$("#erroRamo").show()
					$("#erroOutroRamo").hide()
				}
				else if(ramo == "outro"){
					ramo = outroRamo
					if(ramo < 3){
						$("#erroOutroRamo").show()
						$("#erroRamo").hide()
					}
					else{
						$("#erroRamo").hide()
						$("#erroOutroRamo").hide()
						requisicao++
					}
				}
				else{
					$("#erroRamo").hide()
					requisicao++
				}

				if(requisicao === 8){
					$("input[name=telefone]").unmask();
					$("#form-cadastro").submit();
				}
			});
		});
	</script>
</body>
</html>