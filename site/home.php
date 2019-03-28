<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Minhas classes -->
    <link rel="stylesheet" href="css/myclass.css">
    <!-- Jquery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>

    <style>
        main {
            font-size: 18px;
        }

        @media only screen and (max-width: 640px) {
            main {
                font-size: 13px;
            }
        }

        .painel {
            width: 600px;
            color: #fff;
        }

        @media only screen and (max-width: 640px) {
            .painel {
                width: 300px;
            }
        }

        .card {
            width: 100%;
            height: 550px;
            border-radius: 0;
            border: none
        }

        .bg-000 {
            background-color: #000;
        }

        #e1260t {
            background-image: url(img/e1260t.png);
            background-repeat: no-repeat;
            background-position: bottom;
        }

        #phylos {
            background-image: url(img/phylos.png);
            background-repeat: no-repeat;
            background-position: bottom;
        }

        #coreE3 {
            background-image: url(img/core3.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        #cure {
            background-image: url(img/ezycure.png);
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>
    <?php require "menu_rodape/menu.php" ?>
    <main>
        <div style="height: 450px; width: 100%; background-color: black;">

        </div>

        <div class="card-group pr-md-3 pl-md-3 mt-3">
            <div class="card bg-light mr-md-3" id="phylos">
                <div class="pl-1 pr-1">
                    <div class="text-center m-auto pt-4" style="width: 90%;">
                        <h1>Phylos</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur risus purus, lacinia vel lorem vitae, ultrices scelerisque diam. Orci varius </p>
                        <a class="mr-3" href="">Saiba mais <i class="fas fa-chevron-right"></i></a>
                        <a class="" href="">Como comprar <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card bg-light" id="e1260t">
                <div class="pl-1 pr-1">
                    <div class="text-center m-auto pt-4" style="width: 90%;">
                        <h1>E1260T</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur risus purus, lacinia vel lorem vitae, ultrices scelerisque diam. Orci varius </p>
                        <a class="mr-3" href="">Saiba mais <i class="fas fa-chevron-right"></i></a>
                        <a class="" href="">Como comprar <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-group pr-md-3 pl-md-3 mt-3">
            <div class="card bg-light mr-md-3" id="coreE3">
                <div class="pl-1 pr-1">
                    <div class="text-center m-auto pt-4" style="width: 90%;">
                        <h1>CoreE3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur risus purus, lacinia vel lorem vitae, ultrices scelerisque diam. Orci varius </p>
                        <a class="mr-3" href="">Saiba mais <i class="fas fa-chevron-right"></i></a>
                        <a class="" href="">Como comprar <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card bg-light" id="cure">
                <div class="pl-1 pr-1">
                    <div class="text-center m-auto pt-4" style="width: 90%;">
                        <h1>EzyCure</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur risus purus, lacinia vel lorem vitae, ultrices scelerisque diam. Orci varius </p>
                        <a class="mr-3" href="">Saiba mais <i class="fas fa-chevron-right"></i></a>
                        <a class="" href="">Como comprar <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5" style="height: 450px; width: 100%; background-color: black;">
        </div>

        <div style="height: 50px; width: 100%; background-color: #222;"></div>
        <div style="height: 450px; width: 100%; background-color: #343434;"></div>
    </main>
</body>

</html> 