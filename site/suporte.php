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
                    <div class="col-lg-5 col-md-6 p-md-4 col-3"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-1.svg" width="1500"> </div>
                    <div class="col-md-6 offset-lg-1 d-flex flex-column justify-content-center py-4">
                        <h2 class="my-3"> <b>Cadastre-se</b></h2>
                        <p class="lead">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center order-2 order-md-1 py-4">
                        <h2 class="my-3"> <b>Logue na sua conta</b></h2>
                        <p class="lead">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 offset-lg-1 order-1 order-md-2"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-2.svg" width="1500" style=""> </div>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 p-md-4 col-3"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-3.svg" width="1500"> </div>
                    <div class="col-md-6 offset-lg-1 d-flex flex-column justify-content-center py-4" style="">
                        <h2 class="my-3"><b>"Solicitar Suporte"</b></h2>
                        <p class="lead">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light text-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center order-2 order-md-1 py-4">
                        <h2 class="my-3"> <b>Envie e aguarde</b></h2>
                        <p class="lead">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 p-md-4 col-3 offset-lg-1 order-1 order-md-2"> <img class="img-fluid d-block" src="https://static.pingendo.com/img-placeholder-2.svg" width="1500" style=""> </div>
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