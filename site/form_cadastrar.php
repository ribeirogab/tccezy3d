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
						<h4>Criar Sua Conta da Ezy 3D</h4>
						<hr>
						<div class="form-row mt-4">
							<div class="form-group mt-2 col-md-6 mb-4 pb-2">
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
							<div class="form-group mt-2 col-md-6 mb-4 pb-2">
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
							<div id="erroEmailExiste">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-exclamation-circle mr-1"></i>
									</div>
									<div class="col-9">
										<span>Este e-mail já está sendo utilizado.</span>
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
								<i id="warning-senha" style="display: none" class="fas fa-exclamation-circle mr-2"></i>Use 8 ou mais caracteres com uma mistura de letras e números.
							</span>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4 mb-4 pb-2">
								<div class="wrap-input100">
									<select class="input100" name="pais" required>
										<option value="null">Pais...</option>
										<option value="África do Sul">África do Sul</option>
										<option value="Albânia">Albânia</option>
										<option value="Alemanha">Alemanha</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua">Antigua</option>
										<option value="Arábia Saudita">Arábia Saudita</option>
										<option value="Argentina">Argentina</option>
										<option value="Armênia">Armênia</option>
										<option value="Aruba">Aruba</option>
										<option value="Austrália">Austrália</option>
										<option value="Áustria">Áustria</option>
										<option value="Azerbaijão">Azerbaijão</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrein">Bahrein</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Bélgica">Bélgica</option>
										<option value="Benin">Benin</option>
										<option value="Bermudas">Bermudas</option>
										<option value="Botsuana">Botsuana</option>
										<option value="Brasil" selected>Brasil</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgária">Bulgária</option>
										<option value="Burkina Fasso">Burkina Fasso</option>
										<option value="botão">botão</option>
										<option value="Cabo Verde">Cabo Verde</option>
										<option value="Camarões">Camarões</option>
										<option value="Camboja">Camboja</option>
										<option value="Canadá">Canadá</option>
										<option value="Cazaquistão">Cazaquistão</option>
										<option value="Chade">Chade</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Cidade do Vaticano">Cidade do Vaticano</option>
										<option value="Colômbia">Colômbia</option>
										<option value="Congo">Congo</option>
										<option value="Coréia do Sul">Coréia do Sul</option>
										<option value="Costa do Marfim">Costa do Marfim</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Croácia">Croácia</option>
										<option value="Dinamarca">Dinamarca</option>
										<option value="Djibuti">Djibuti</option>
										<option value="Dominica">Dominica</option>
										<option value="EUA">EUA</option>
										<option value="Egito">Egito</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Emirados Árabes">Emirados Árabes</option>
										<option value="Equador">Equador</option>
										<option value="Eritréia">Eritréia</option>
										<option value="Escócia">Escócia</option>
										<option value="Eslováquia">Eslováquia</option>
										<option value="Eslovênia">Eslovênia</option>
										<option value="Espanha">Espanha</option>
										<option value="Estônia">Estônia</option>
										<option value="Etiópia">Etiópia</option>
										<option value="Fiji">Fiji</option>
										<option value="Filipinas">Filipinas</option>
										<option value="Finlândia">Finlândia</option>
										<option value="França">França</option>
										<option value="Gabão">Gabão</option>
										<option value="Gâmbia">Gâmbia</option>
										<option value="Gana">Gana</option>
										<option value="Geórgia">Geórgia</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Granada">Granada</option>
										<option value="Grécia">Grécia</option>
										<option value="Guadalupe">Guadalupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guiana">Guiana</option>
										<option value="Guiana Francesa">Guiana Francesa</option>
										<option value="Guiné-bissau">Guiné-bissau</option>
										<option value="Haiti">Haiti</option>
										<option value="Holanda">Holanda</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungria">Hungria</option>
										<option value="Iêmen">Iêmen</option>
										<option value="Ilhas Cayman">Ilhas Cayman</option>
										<option value="Ilhas Cook">Ilhas Cook</option>
										<option value="Ilhas Curaçao">Ilhas Curaçao</option>
										<option value="Ilhas Marshall">Ilhas Marshall</option>
										<option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
										<option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
										<option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
										<option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
										<option value="Índia">Índia</option>
										<option value="Indonésia">Indonésia</option>
										<option value="Inglaterra">Inglaterra</option>
										<option value="Irlanda">Irlanda</option>
										<option value="Islândia">Islândia</option>
										<option value="Israel">Israel</option>
										<option value="Itália">Itália</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japão">Japão</option>
										<option value="Jordânia">Jordânia</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Latvia">Latvia</option>
										<option value="Líbano">Líbano</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lituânia">Lituânia</option>
										<option value="Luxemburgo">Luxemburgo</option>
										<option value="Macau">Macau</option>
										<option value="Macedônia">Macedônia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malásia">Malásia</option>
										<option value="Malaui">Malaui</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marrocos">Marrocos</option>
										<option value="Martinica">Martinica</option>
										<option value="Mauritânia">Mauritânia</option>
										<option value="Mauritius">Mauritius</option>
										<option value="México">México</option>
										<option value="Moldova">Moldova</option>
										<option value="Mônaco">Mônaco</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Nepal">Nepal</option>
										<option value="Nicarágua">Nicarágua</option>
										<option value="Niger">Niger</option>
										<option value="Nigéria">Nigéria</option>
										<option value="Noruega">Noruega</option>
										<option value="Nova Caledônia">Nova Caledônia</option>
										<option value="Nova Zelândia">Nova Zelândia</option>
										<option value="Omã">Omã</option>
										<option value="Palau">Palau</option>
										<option value="Panamá">Panamá</option>
										<option value="Papua-nova Guiné">Papua-nova Guiné</option>
										<option value="Paquistão">Paquistão</option>
										<option value="Peru">Peru</option>
										<option value="Polinésia Francesa">Polinésia Francesa</option>
										<option value="Polônia">Polônia</option>
										<option value="Porto Rico">Porto Rico</option>
										<option value="Portugal">Portugal</option>
										<option value="Qatar">Qatar</option>
										<option value="Quênia">Quênia</option>
										<option value="Rep. Dominicana">Rep. Dominicana</option>
										<option value="Rep. Tcheca">Rep. Tcheca</option>
										<option value="Reunion">Reunion</option>
										<option value="Romênia">Romênia</option>
										<option value="Ruanda">Ruanda</option>
										<option value="Rússia">Rússia</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa Americana">Samoa Americana</option>
										<option value="Senegal">Senegal</option>
										<option value="Serra Leone">Serra Leone</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Singapura">Singapura</option>
										<option value="Síria">Síria</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
										<option value="St. Lúcia">St. Lúcia</option>
										<option value="St. Vincent">St. Vincent</option>
										<option value="Sudão">Sudão</option>
										<option value="Suécia">Suécia</option>
										<option value="Suiça">Suiça</option>
										<option value="Suriname">Suriname</option>
										<option value="Tailândia">Tailândia</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tanzânia">Tanzânia</option>
										<option value="Togo">Togo</option>
										<option value="Trinidad & Tobago">Trinidad & Tobago</option>
										<option value="Tunísia">Tunísia</option>
										<option value="Turquia">Turquia</option>
										<option value="Ucrânia">Ucrânia</option>
										<option value="Uganda">Uganda</option>
										<option value="Uruguai">Uruguai</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnã">Vietnã</option>
										<option value="Zaire">Zaire</option>
										<option value="Zâmbia">Zâmbia</option>
										<option value="Zimbábue">Zimbábue</option>
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
										<option value="Educação">Educação</option>
										<option value="Joalheria">Joalheria</option>
										<option value="Manufatura">Manufatura</option>
										<option value="Design">Design</option>
										<option value="Marketing">Marketing</option>
										<option value="Informática">Informática</option>
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
								<a href="form_login.php">Já é cadastrado?</a>
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

				<div class="col-5 p-3 pl-5 d-xl-block d-none">
					<img src="vendor/img/e1260-cartoon.png" width="100%" style="margin-top: 150px" alt="">
					<p class="text-center mt-3 display-4" style="color: #333;font-size: 16px;">Cadastre-se para solicitar orçamentos e receber suporte!</p>
					<hr>
				</div>
			</div>
		</div>
		<div id="lang1">
			<div class="btn-group dropup">
				<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Português (Brasil)
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Português (Brasil)</a>
					<a class="dropdown-item" href="#">Inglês</a>
					<a class="dropdown-item" href="#">Espanhol</a>
				</div>
			</div>
		</div>

		<div id="lang2">
			<a href="home.php"><i class="fas fa-home"></i> Voltar Para o Site.</a>
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
	<script src="vendor/jquery/jquery.mask.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/js/cadastro_main.js"></script>
</body>
</html>