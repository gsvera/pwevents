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
    <title>Servicio de Fotografía y vídeo para eventos | PW events Cancún</title>
    <meta name="description" content="Expertos en Fotografía y vídeo para convenciones, congresos, eventos corporativos y exhibiciones en Cancún y Riviera Maya ¡Conoce nuestros paquetes!">
    <meta name="author" content="Pw events | Servicio de Fotografía y vídeo para eventos ">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section class="section-pd ptop-first">
    <div class="d-flex">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-35 text-center-mobile">
            <h1 class="subtitle size-m-subtitle"><?=$foto_video['titulo-foto-video']?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 over-f height-350">
            <p class="text-paragraph-sn-mg slideText"><?=$foto_video['texto-1']?></p>
            
            <!-- <div class="text-center">
                <input class="d-non btn-radio-slid bullet-black" type="radio" name="slideOneText" id="slideOneText1" checked>
                <label for="slideOneText1"></label>
                <input class="d-non btn-radio-slid bullet-black" type="radio" name="slideOneText" id="slideOneText2">
                <label for="slideOneText2"></label>
            </div> -->
        </div>
    </div>
</section>
<section>
    <div class="d-flex" style="padding: 0 5%">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 over-f height-400 ptpw-4">
            <div class="border-black">
                <div class="content-text">
                    <p class="text-paragraph-s size-mob-text"><?=$foto_video['texto-2']?></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mgtop-4">
            <div>
                <div class="contain-gallery" id="gallery">
                    <span></span>
                    <div class="subcontain-gallery">
                        <div class="contain-img flex">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/1.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/2.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/3.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/4.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/5.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/6.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/7.jpg" alt="Foto y video para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/foto/8.jpg" alt="Foto y video para eventos">
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
<section class="d-wrap mt-5">
    <div class="text-center width-100">
        <img src="./assets/seccion/seccion-galeria.jpg" class="img-character" alt="Evento en atardecer">
        <div class="cont-slid-black-height">
            <div class="cont-item-black flex">
                <div class="item-black content-text-black">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$foto_video['subtitle-1']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$foto_video['subtitle-text-one']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$foto_video['subtitle-2']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$foto_video['subtitle-text-two']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$foto_video['subtitle-3']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$foto_video['subtitle-text-three']?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$foto_video['subtitle-4']?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$foto_video['subtitle-text-four']?></p>
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
    <div class="text-center col size-max mt-5">
        <p class="font-weight-bold"><?=$foto_video['texto-3']?></p>
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
    <div class="cont-white-one cont-bg-white mboth p-3">
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
<section class=>
    <div class="back-secret" title="Mesa de dj">
        <div class="black-back-dj">
            <div>
                <p class="text-white font-weight-bold"><?=$foto_video['texto-4']?></p>
            </div>
        </div>
    </div>
</section>
<h2 class="subtitle size-m-subtitle text-center my-5"><?=$layout['equipo-profesional']?></h2>

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