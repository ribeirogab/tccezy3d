<?php
session_start();
if (!isset($_SESSION['banana'])) {
    header("Location:home.php");
} else {
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
    <noscript>
        <meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
    <link rel="stylesheet" href="vendor/css/menu.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="vendor/font/css/all.css">
    <!-- Jquery -->
    <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
    <!-- MASK -->
    <script type="text/javascript" src="vendor/jquery/jquery.mask.js"></script>
    <!-- Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Main JS -->
    <script src="vendor/js/menu.js"></script>
</head>

<body class=bg-dark>
    <main>

        <div class="text-center text-md-right" style="height: 100vh;background-image: linear-gradient(to bottom, #333, #7d97ad );">
            <div class="container">
                <div class="row">
                    <div class="mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
                        <h3 style="margin-top: 35vh">
                            Suporte enviado com sucesso, aguarde a resposta em seu email.<br>
                            <a href="perfil_cliente.php" style="color: orange">Volte para seu perfil</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>