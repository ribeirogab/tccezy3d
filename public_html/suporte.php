<?php
session_start();
if (isset($_SESSION["banana"])) {
    extract($_SESSION);
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EZY 3D - Core E3</title>
</head>

<body class=bg-dark>
    <?php
    $pagina = "printer_coree3";
    if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
        include "dashboard/menuAlterarTexto.php";
    } else {
        $visivelm = true;
        include "vendor/menu_rodape/menu.php";
    }
    ?>
    <main>

        <div class="py-5 text-center text-md-right" style="background-image: linear-gradient(to bottom, #333, #7d97ad );">
            <div class="container">
                <div class="row">
                    <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
                        <h3 class="display-3">
                            Como solicitar um suporte?
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <h1 class="text-center pt-4 pb-3 mb-4 bg-light">Siga os passos abaixo<br><i class="fas fa-chevron-down"></i></h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/sup1.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 d-block d-sm-none text-center order-2"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/xmobile1.jpg" width="100%"> </div>
                    <div class="col-md-6 offset-lg-1 d-flex flex-column justify-content-center py-4">
                        <h2 class="my-3"> <b>Cadastre-se</b></h2>
                        <p class="lead">Primeiramente, clique na opção em laranja "Cadastrar" <a style="color:blue" href="form_cadastrar.php">(ou clique aqui)</a>, você será redirecionado para um formulário de cadastro.</p>
                    </div>
                </div>
            </div>
            <div class="text-center d-block d-sm-none pt-2 pb-2">
                <i class="fas fa-chevron-down fa-2x"></i>
            </div>
        </div>

        <div class="bg-light text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1 py-4">
                        <h2 class="my-3"> <b>Preencha o formulário</b></h2>
                        <p class="lead">Insira suas informções corretamente e clique em "Cadastrar".</p>
                    </div>
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 offset-lg-1 order-1 order-md-2 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/x1.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 offset-lg-1 order-2 d-block d-sm-none"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/x1.jpg" width="100%"> </div>
                </div>
            </div>
            <div class="text-center d-block d-sm-none pt-2 pb-2">
                <i class="fas fa-chevron-down fa-2x"></i>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/xlogin.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 d-block d-sm-none order-2"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/xlogin.jpg" width="100%"> </div>
                    <div class="col-md-6 offset-lg-1 d-flex flex-column justify-content-center py-4" style="">
                        <h2 class="my-3"> <b>Logue na sua conta</b></h2>
                        <p class="lead">Após efetuar o cadastro, você será redirecionado para página home, com uma aba de login com o seu e-mail já preenchido, digite a sua senha e clique em logar.</p>
                    </div>
                </div>
            </div>
            <div class="text-center d-block d-sm-none pt-2 pb-2">
                <i class="fas fa-chevron-down fa-2x"></i>
            </div>
        </div>

        <div class="bg-light text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center order-2 order-md-1 py-4">
                        <h2 class="my-3"> <b>Aba suporte</b></h2>
                        <p class="lead">Você será redirecionado para o perfil do cliente, no menu lateral do lado esquerdo, clique na aba "Suporte Técnico".</p>
                    </div>
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 offset-lg-1 order-1 order-md-2 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/sup2.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 offset-lg-1 order-2 order-md-2 d-block d-sm-none"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/supmobile1.jpg" width="100%"> </div>
                </div>
            </div>
            <div class="text-center d-block d-sm-none pt-2 pb-2">
                <i class="fas fa-chevron-down fa-2x"></i>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/sup3.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 order-2 d-block d-sm-none"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/supmobile2.jpg" width="100%"> </div>
                    <div class="col-md-6 offset-lg-1 d-flex flex-column justify-content-center py-4" style="">
                        <h2 class="my-3"><b>Solicitando suporte técnico</b></h2>
                        <p class="lead">Abrirá um formulário preencha corretamente e clique no botão "Enviar".</p>
                    </div>
                </div>
            </div>
            <div class="text-center d-block d-sm-none pt-2 pb-2">
                <i class="fas fa-chevron-down fa-2x"></i>
            </div>
        </div>

        <div class="bg-light text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center order-2 order-md-1 py-4">
                        <h2 class="my-3"><b>Envie e aguarde</b></h2>
                        <p class="lead">Agora é só aguardar a nossa resposta em seu e-mail!</p>
                    </div>
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 offset-lg-1 order-1 order-md-2 d-none d-sm-block"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/sup4.jpg" width="400"> </div>
                    <div class="col-lg-5 col-md-6 p-md-4 offset-lg-1 order-2 order-md-2 d-block d-sm-none"> <img class="img-fluid box-shadow" src="vendor/img/tutorial/supmobile3.jpg" width="100%"> </div>
                </div>
            </div>
        </div>



        </div>

        <?php
        if (isset($_SESSION['idadmin'], $_GET["alterartxt"])) {
            include "dashboard/rodapeAlterarTexto.php";
        } else {
            $visivelr = true;
            include "vendor/menu_rodape/rodape.php";
        }
        ?>
    </main>
</body>

</html>