<!-- animações menu -->
<script src="func/menu.js"></script>
<nav id="nav-desktop" class="navbar p-0 d-none d-md-block fixed-top">
	<div class="container pl-5 pr-5">
		<a class="py-2" href="#"><img src="img/logo/logo_white.svg" height="28px" alt="EZY 3D"></a>
		<a class="py-2 d-none d-md-inline-block tag-a" href="#">Soluções</a>
		<a class="py-2 d-none d-md-inline-block tag-a" href="#">Como comprar</a>
		<a class="py-2 d-none d-md-inline-block tag-a" href="#">Suporte</a>
		<a class="py-2 d-none d-md-inline-block tag-a" href="#">Contato</a>
		<a class="py-2 d-none d-md-inline-block tag-a" href="#">Sobre</a>
		<a id="btn-lang-desk" class="py-2 d-none d-md-inline-block tag-a" href="#">
			<i class="fas fa-globe"></i> PT
			<i class="fas fa-caret-down"></i>
		</a>
	</div>
</nav>

<!-- menu mobile -->
<nav id="nav-mobile" class="navbar p-0 d-block d-md-none fixed-top">
	<div class="container pt-2 pb-2">
		<div class="w-53px">
			<a id="btn-openmenu" class="py-2 tag-a" href="#"><i class="fas fa-bars"></i></a>
			<a id="btn-closemenu" class="py-2 tag-a" href="#"><i class="fas fa-times"></i></a>
		</div>

		<div class="text-center w-53px">
			<a class="py-2 tag-a" href="#"><img src="img/logo/logo_white.svg" height="28px" alt="EZY 3D"></a>
		</div>

		<div class="text-right w-53px">
			<a id="btn-lang" class="py-2 tag-a" href="#"><i class="fas fa-globe"></i></a>
		</div>
	</div>
</nav>

<div id="lang" class="mr-md-5">
	<span class='text-muted'>Selecione o seu idioma</span></br></br>
	<form id='formEn' action='alterar.php' method='post'>
		<input type='hidden' name='opcao' value='en'>
		<a href='#' onClick='document.getElementById(\"formEn\").submit();'>English</a>
	</form>
	<form id='formEs' action='alterar.php' method='post'>
		<input type='hidden' name='opcao' value='es'>
		<a href='#' onClick='document.getElementById(\"formEs\").submit();'>Español</a>
	</form>
	<form id='formPt' action='alterar.php' method='post'>
		<input type='hidden' name='opcao' value='pt'>
		<a href='#' onClick='document.getElementById(\"formPt\").submit();'>Português</a>
	</form>
</div>

<div id="menu" class="pl-4 pr-4 d-md-none" style="border-top: solid 1.5px rgba(255,255,255,0.15)">
	<div id="itens">
		<div id="btn-solucoes" class="itens bc-menu p-2 pt-5 pb-3">Soluções<i class="fas fa-caret-right float-right"></i></div>
		<div class="itens bc-menu p-2 pt-3 pb-3">Como comprar</div>
		<div class="itens bc-menu p-2 pt-3 pb-3">Suporte</div>
		<div class="itens bc-menu p-2 pt-3 pb-3">Contato</div>
		<div class="itens p-2 pt-3 pb-3 color-fff">Sobre</div>
	</div>
	<!-- SOLUÇÕES -->
	<div id="solucoes" class="pl-4 pr-4 bg-1">
		<div id="btn-voltar1" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left opcty-solucoes"></i></i><span class="float-right opcty-solucoes">Soluções</span>
		</div>
		<div id="btn-produtos" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-solucoes">Produtos</span><i class="fas fa-caret-right float-right opcty-solucoes"></i>
		</div>
		<div id="btn-apps" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-solucoes">Aplicações</span><i class="fas fa-caret-right float-right opcty-solucoes"></i>
		</div>
	</div>
	<!-- PRODUTOS -->
	<div id="produtos" class="pl-4 pr-4 bg-2">
		<div id="btn-voltar2" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left"></i></i><span class="float-right opcty-produtos">Produtos</span>
		</div>
		<div id="btn-printer" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-produtos">Impressoras 3D</span><i class="fas fa-caret-right float-right"></i>
		</div>
		<div id="btn-acss" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-produtos">Acessórios</span><i class="fas fa-caret-right float-right"></i>
		</div>
	</div>
	<!-- Impressoras 3D -->
	<div id="impressoras3d" class="pl-4 pr-4 bg-3">
		<div id="btn-voltar3" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left"></i></i><span class="float-right opcty-printer">Impressoras 3D</span>
		</div>
		<div id="btn-msla" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-printer">MSLA - LCD UV</span><i class="fas fa-caret-right float-right"></i>
		</div>
		<div id="btn-fdm" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-printer">FDM</span><i class="fas fa-caret-right float-right"></i>
		</div>
	</div>
	<!-- MSLA - LCD UV -->
	<div id="msla" class="pl-4 pr-4 bg-4">
		<div id="btn-voltar5" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left"></i></i><span class="float-right opcty-msla">Tecnologia MSLA - LCD UV</span>
		</div>
		<div class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-msla">E1260T</span>
		</div>
		<div class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-msla">Phylos</span>
		</div>
	</div>
	<!-- FDM -->
	<div id="fdm" class="pl-4 pr-4 bg-4">
		<div id="btn-voltar6" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left"></i></i><span class="float-right opcty-fdm">Tecnologia FDM</span>
		</div>
		<div class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-fdm">CoreE3</span>
		</div>
	</div>

	<!-- acessorios -->
	<div id="acessorios" class="pl-4 pr-4 bg-3">
		<div id="btn-voltar4" class="itens bc-menu p-2 pt-3 pb-3">
			<i class="fas fa-caret-left"></i></i><span class="float-right opcty-acss">Acessórios</span>
		</div>
		<div id="btn-cpc" class="itens bc-menu p-2 pt-3 pb-3">
			<span class="opcty-acss">Câmara pós-cura<span><i class="fas fa-caret-right float-right"></i>
			</div>
		</div>
		<!-- EZYCURE -->
		<div id="ezycure" class="pl-4 pr-4 bg-4">
			<div id="btn-voltar7" class="itens bc-menu p-2 pt-3 pb-3">
				<i class="fas fa-caret-left"></i></i><span class="float-right opcty-ezycure">Câmara pós-cura</span>
			</div>
			<div class="itens bc-menu p-2 pt-3 pb-3">
				<span class="opcty-ezycure">EZYCURE<span>
				</div>
			</div>
		</div>

		<!-- APLICAÇÕES -->
		<div id="apps" class="pl-4 pr-4 bg-2">
			<div id="btn-voltar8" class="itens bc-menu p-2 pt-3 pb-3">
				<i class="fas fa-caret-left"></i></i><span class="float-right opcty-apps">Aplicações</span>
			</div>
			<div class="itens bc-menu p-2 pt-3 pb-3">
				<span class="opcty-apps">Odontologia</span>
			</div>
			<div class="itens bc-menu p-2 pt-3 pb-3">
				<span class="opcty-apps">Joalheria</span>
			</div>
			<div class="itens bc-menu p-2 pt-3 pb-3">
				<span class="opcty-apps">Manufatura</span>
			</div>
			<div class="itens bc-menu p-2 pt-3 pb-3">
				<span class="opcty-apps">Educação</span>
			</div>
		</div>
