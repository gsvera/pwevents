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
    <title>Audio, video e iluminación para bodas | PW events Cancún</title>
    <meta name="description" content="Desarrollamos todo tipo de ambiente con nuestro equipo de Audio, Video e iluminación decorativa en cualquier locación de Cancún y Riviera maya">
    <meta name="author" content="Pw events | Renta de Audio, video e iluminación para bodas en Cancún">
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
            <span><?=$bodas['slogan-bodas']?></span>
            <h1 class="subtitle size-m-subtitle"><?=$bodas['titulo-bodas']?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 over-f height-350">
            <p class="text-paragraph-sn-mg slideText"><?=$bodas['texto-1']?></p>
            <p class="text-paragraph-sn-mg slideText d-non"><?=$bodas['texto-2']?></p>
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
    <div class="d-flex" style="padding: 0 5%">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 over-f height-400">
            <div class="border-black">
                <div class="content-text">
                    <p class="text-paragraph-s size-mob-text"><?=$bodas['texto-3']?></p>
                    <p class="text-paragraph-s size-mob-text"><?=$bodas['texto-4']?></p>
                <!-- </div>
                <div class="content-text d-non"> -->
                    <p class="text-paragraph-s size-mob-text"><?$bodas['texto-5']?></p>
                    <p class="text-paragraph-s size-mob-text"><?$bodas['texto-6']?></p>
                    <p class="text-paragraph-s size-mob-text"><?=$bodas['texto-7']?></p>
                </div>
                <!-- <div class="text-center">
                    <input class="d-non btn-radio-slid-two bullet-white" type="radio" name="slideTwoText" id="slideOneText3" checked>
                    <label for="slideOneText3"></label>
                    <input class="d-non btn-radio-slid-two bullet-white" type="radio" name="slideTwoText" id="slideOneText4">
                    <label for="slideOneText4"></label>
                </div> -->
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mgtop-4">
            <div>
                <div class="contain-gallery" id="gallery">
                    <span></span>
                    <div class="subcontain-gallery">
                        <div class="contain-img flex">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/1.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/2.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/3.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/4.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/5.png" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/6.jpeg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/7.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/8.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/9.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/10.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/11.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/12.png" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/13.jpeg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/22.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/23.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/29.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/39.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/43.jpg" alt="Evento de bodas">
                            <img class="img-gallery img-fluid" src="./assets/fotos/bodas/48.jpg" alt="Evento de bodas">
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
<section class="section-mg d-wrap">
    <div class="col-12">
        <h2 class="subtitle text-center size-m-subtitle mt-5"><?=$bodas['subtitulo-servicios']?></h2>
        <p class="text-paragraph"><?=$bodas['texto-8']?></p>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 content-benefits-left">
        <div class="d-flex">
            <div class="col-3">
                
                    <img src="./assets/img/conversation.png" alt="Asesoriamiento" class="icon-service">
                
            </div>
            <div class="col-9">
                <h3 class="subtitle size-ben font-weight-bold"><?=$bodas['subtitle-asesoramiento-bodas']?></h3>
                <p class="text-justify tex-small-benefits"><?=$bodas['asesoramiento-text']?></p>
            </div>
        </div>
        <br><br><br class="d-none-desktop">
        <div class="d-flex">
            <div class="col-3">
                
                    <img src="./assets/img/theater.png" alt="Asesoriamiento" class="icon-service">
                
            </div>
            <div class="col-9">
                <h3 class="subtitle size-ben font-weight-bold"><?=$bodas['subtitle-animacion-entretenimiento']?></h3>
                <p class="text-justify tex-small-benefits"><?=$bodas['animacion-text']?></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 content-benefits-right">
        <div class="d-flex">
            <div class="col-3">
                
                    <img src="./assets/img/sound-bars.png" alt="Asesoriamiento" class="icon-service">
                
            </div>
            <div class="col-9">
                <h3 class="subtitle size-ben font-weight-bold"><?=$bodas['subtitle-musica-iluminacion']?></h3>
                <p class="text-justify tex-small-benefits"><?=$bodas['musica-text']?></p>
            </div>
        </div>
        <br><br>
        <div class="d-flex">
            <div class="col-3">
                
                    <img src="./assets/img/camera.png" alt="Asesoriamiento" class="icon-service">
                
            </div>
            <div class="col-9">
                <h3 class="subtitle size-ben font-weight-bold"><?=$bodas['subtitle-fotografia-video']?></h3>
                <p class="text-justify tex-small-benefits"><?=$bodas['fotografia-text']?></p>
            </div>
        </div>
    </div>
</section>
<section class="section-mg">
    <div class="contain-black py-3">
        <p class="text-paragraph text-center text-white"><?=$bodas['texto-9']?></p>
    </div>
</section>
<section class="section-mg my-5 row justify-content-center">
    <div class="cont-white-one cont-bg-white p-3">
        <div class="flex justify-content-center">
            <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$bodas['flexibilidad']?></h3>
            <img src="./assets/img/measuring.png" alt="Flexibilidad" class="icon-white">
        </div>
        <p class="text-justify tex-small-benefits"><?=$bodas['texto-flexibilidad']?></p>
    </div>
    <div class="cont-white-one cont-bg-white p-3 mboth">
        <div class="flex justify-content-center">
            <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$bodas['cercania']?></h3>
            <img src="./assets/img/minimize.png" alt="Flexibilidad" class="icon-white">
        </div>
        <p class="text-justify tex-small-benefits"><?=$bodas['texto-cercania']?></p>
    </div>
    <div class="cont-white-one cont-bg-white p-3">
        <div class="flex justify-content-center">
            <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$bodas['transparencia']?></h3>
            <img src="./assets/img/transparency.png" alt="Flexibilidad" class="icon-white">
        </div>
        <p class="text-justify tex-small-benefits"><?=$bodas['texto-transpararencia']?></p>
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