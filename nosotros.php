<?php 
session_start();
if(isset($_GET['la'])){
$_SESSION['la'] = $_GET['la'];
header('Location:'.$_SERVER['PHP_SELF']);
exit();
}
if(isset($_SESSION['la']))
{
switch($_SESSION['la']){
    case "eng":
    require('lang/eng.php'); 
    break;
    case "esp":
    require('lang/esp.php'); 
    break; 
    default: 
    require('lang/esp.php'); 
    }
}else{
require('lang/esp.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/97a88bff0a.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>PW events Cancún</title>
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section class="section-pd ptop-first">
    <div class="banner-nosotros">
    </div>
    <h1 class="subtitle text-center mt-5"><?=$nosotros['nosotros']?></h1>
    <div class="row mt-1">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <p class="text-paragraph-s"><?=$nosotros['text-1']?></p>
            <p class="text-paragraph-s mt-3"><?=$nosotros['text-2']?></p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <p class="text-paragraph-s"><?=$nosotros['text-3']?></p>
            <p class="text-paragraph-s mt-3"><?=$nosotros['text-4']?></p>            
        </div>
    </div>

    <img class="img-nosotros-body img-fluid" src="./assets/fotos/IMG_1860.jpg" alt="Evento Pw">
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"">
            <p class="texts-paragraph text-justify"><?=$nosotros['text-5']?></p>
            <p class="texts-paragraph text-justify"><?=$nosotros['text-6']?></p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"">
            <p class="texts-paragraph text-justify"><?=$nosotros['text-7']?></p>
        </div>
    </div>
</section>

<section class="section-mg d-flex">
    <div class="content-mv" title="Fondo mision" title="Servicio audiviosual Cancún misión pwevents">
        <img src="./assets/img/logo-blanco.png" alt="Logo png mision" class="img-mv">
        <h2 class="text-white"><i><?=$nosotros['mision']?></i></h2>
        <p><?=$nosotros['text-mision']?></p>
    </div>
    <div class="content-vm" title="Servicio audiviosual Cancún visión pwevents">
        <img src="./assets/img/logo-blanco.png" alt="Logo png mision" class="img-mv">
        <h2 class="text-white"><i><?=$nosotros['vision']?></i></h2>
        <p><?=$nosotros['text-vision']?></p>
    </div>
</section>

<section class="section-mg">
    <h2 class="text-center"><?=$nosotros['valores']?></h2>
    <div class="text-center">
        <img src="./assets/seccion/seccion-galeria.jpg" class="img-character-two" alt="Evento en atardecer">
        <div class="cont-slid-black">
            <div class="cont-item-black flex">
                <div class="item-black content-text-black">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$nosotros['compromiso']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$nosotros['text-compromiso']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$nosotros['integridad']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$nosotros['text-integridad']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$nosotros['respeto']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$nosotros['text-respeto']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$nosotros['trabajo-equipo']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$nosotros['text-trabajo-equipo']?></p>
                </div>
            </div>
            <div class="text-center bullet-mt">
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider1" checked><label for="bullet-slider1"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider2"><label for="bullet-slider2"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider3"><label for="bullet-slider3"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider4"><label for="bullet-slider4"></label>
            </div>
        </div>
    </div>
</section>


<?php 
    include_once('./layout/layout-footer-one.php')
?>



<script src="./js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $('a[href^="#"]').click(function() {
                    var destino = $(this.hash);
                    if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                    }
                    if (destino.length == 0) {
                    destino = $('html');
                    }
                    $('html, body').animate({ scrollTop: destino.offset().top -150 }, 500);
                    return false;
                });
            });
    </script>
</body>
</html>