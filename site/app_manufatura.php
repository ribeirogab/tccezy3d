<?php 
session_start();
if(isset($_SESSION["banana"]))
  extract($_SESSION);
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EZY 3D - Manufatura</title>
</style>
</head>
<body>
 <?php 
 $visivelm = true;
 $pagina = "app_manufatura";
 include"vendor/menu_rodape/menu.php"; 
 ?>

 <main class="pt-64px">

  <div class="py-5" style="background-image: url(&quot;vendor/img/cover-stripes.svg&quot;); background-position: right bottom; background-size: cover;">
    <div class="container">
      <div class="row">

        <div class="p-5 bg-white ml-auto col-md-5 border">
          <h1>O my friend</h1>
          <p class="mb-3">Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite.</p>
        </div>

      </div>
    </div>
  </div>

<div class="py-3 text-center bg-light">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-tooth fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-gem fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-cog fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-graduation-cap fa-3x"></i>
        </div>
      </div>
    </div>
  </div>


  <div class="py-3">
    <div class="container">
      <div class="row">

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle mb-2 text-muted fa-3x"></i>
          <h4>On one hand</h4>
          <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks.</p>
        </div>

        <div class="col-md-6 p-4">
          <i class="d-block fa fa-stop-circle-o mb-2 text-muted fa-3x"></i>
          <h4>On the other</h4>
          <p>Grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love which bears and sustains us.</p>
        </div>

      </div>
    </div>
  </div>

  <div class="py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h1>A wonderful serenity</h1>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#1</b> </p>
              <p class="mb-0">A wonderful serenity has taken possession of my entire soul.</p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#2</b> </p>
              <p class="mb-0">I am alone, and feel the charm of existence in this spot.</p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#3</b> </p>
              <p class="mb-0">I should be incapable of drawing a single stroke.</p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#4</b> </p>
              <p class="mb-0">I throw myself down among the tall grass by the trickling stream.</p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#5</b> </p>
              <p class="mb-0">I lie close to the earth, a thousand unknown plants.</p>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">

            <div class="col-3 p-0 d-flex align-items-center">
              <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg">
            </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#6</b> </p>
              <p class="mb-0">When I hear the buzz of the little world among the stalks.</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="py-5" >
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h1>A wonderful serenity</h1>
          <p class="lead mb-4">Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
        </div>
      </div>

      <div class="row d-flex justify-content-between">
        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b>One&nbsp;</b>
          </h4>
          <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b>Two</b>
          </h4>
          <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
        </div>

        <div class="col-md-4 col-lg-3 p-4">
          <img class="img-fluid d-block" src="vendor/img/img-placeholder-1.svg" width="1500">
          <h4 class="my-3">
            <b>Three</b>
          </h4>
          <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me.</p>
        </div>
      </div>

    </div>
  </div>

  <div class="py-5 text-center border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-9 p-3">
          <h1 class="mb-0">Call your visitors to act. Now</h1>
        </div>
        <div class="col-md-3 align-items-center d-flex justify-content-center p-3">
          <a class="btn btn-primary btn-lg" href="#">Get your license</a>
        </div>

      </div>
    </div>
  </div>

  <div class="py-3 text-center bg-light">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-tooth fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-gem fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-cog fa-3x"></i>
        </div>
        <div class="col-md-3 col-4 p-2">
          <i class="d-block fas fa-graduation-cap fa-3x"></i>
        </div>
      </div>
    </div>
  </div>

    <?php 
    $visivelr = true;
    include"vendor/menu_rodape/rodape.php";
    ?>
  </main>
</body>
</html>