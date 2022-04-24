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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servicio de shows y props en renta | PW events Cancún</title>
    <meta name="description" content="Expertos en producción de espectáculos y animaciones para toda clase de evento y locación en Cancún y Riviera maya ¡Tu evento será inolvidable!">
    <meta name="author" content="Pw events | Servicio de shows y props en renta">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section class="section-pd ptop-first">
    <div class="d-flex">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30">
            <h1 class="subtitle size-m-subtitle mt-4"><?=$entretenimiento['titulo-entretenimiento']?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 over-f height-350">
            <p class="text-paragraph-sn-mg slideText"><?=$entretenimiento['texto-1']?></p>
            <p class="text-paragraph-sn-mg slideText d-non"><?=$entretenimiento['texto-2']?></p>
            <div class="text-center">
                <input class="d-non btn-radio-slid bullet-black" type="radio" name="slideOneText" id="slideOneText1" checked>
                <label for="slideOneText1"></label>
                <input class="d-non btn-radio-slid bullet-black" type="radio" name="slideOneText" id="slideOneText2">
                <label for="slideOneText2"></label>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="d-flex">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 over-f">
            <div class="border-black" style="padding-top:5%">
                <div class="content-text">
                    <p class="text-paragraph-s"><?=$entretenimiento['texto-3']?></p>
                    <p class="text-paragraph-s"><?=$entretenimiento['texto-4']?></p>                
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mgtop-4">
            <div>
                <div class="contain-gallery" id="gallery">
                    <span></span>
                    <div class="subcontain-gallery">
                        <div class="contain-img flex">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/1.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/2.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/3.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/4.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/5.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/6.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/7.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/8.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/9.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/10.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/11.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/12.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/13.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/14.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/15.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/16.jpg" alt="Entretenimiento para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/entretenimiento/17.jpg" alt="Entretenimiento para eventos">
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-galeria" id="see-galery"><?=$servicios["ver-galeria"];?></button>
                    </div>
                </div>
            </div>
            <div id="popup" class="modal">
                <div class="conteiner-img" id="popup-gallery">
                    <span id="left" class="arrows left">&#x3C;</span>
                    <img class="imagen-popup img-fluid" id="imagenPopup">
                    <span id="right" class="arrows right">&#x3E;</span>
                </div>
                <span class="close" id="close">&times;</span>
            </div>
        </div>
    </div>
</section>
<section>
    <h2 class="text-center font-weight-bold my-5 subtitle size-m-subtitle"><?=$entretenimiento['subtitle-performance']?></h2>
    <p class="text-paragraph"><?=$entretenimiento['texto-5']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-6']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-7']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-8']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-9']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-10']?></p>
    <br>
    <div class="text-center px-5">
        <p class="font-weight-bold mb-5"><i><?=$entretenimiento['texto-11']?></i></p>
    </div>
    <div class="contain-black">
        <div class="hide-ct">
            <div class="carrusel-text col-12">
                <div class="carrusel-text-item col-12"><p><?=$entretenimiento['lista-1']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$entretenimiento['lista-2']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$entretenimiento['lista-3']?></p></div>
            </div>
        </div>
    </div>
    <p class="text-paragraph"><?=$entretenimiento['texto-12']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-13']?></p>
    <p class="text-paragraph"><?=$entretenimiento['texto-14']?></p>
    <div class="text-center px-5">
        <p classs="slogan"><i class="font-weight-bold"><?=$bodas['bodas-slogan']?></i></p>
    </div>
</section>
<h2 class="subtitle text-center size-m-subtitle"><?=$layout['equipo-profesional']?></h2>
<?php
    include_once('./includes/servicios.php')
?>

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