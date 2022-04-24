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
    <title>Pantallas y equipo de iluminación en renta | PW events Cancún</title>
    <meta name="description" content="Encuentra todo tipo de pantallas led e iluminación en renta para toda clase de evento y locación en Cancún y Riviera maya ¡Tu evento será inolvidable!">
    <meta name="author" content="Pw events | Pantallas y equipo de iluminación en renta">
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
            <h1 class="subtitle size-m-subtitle mt-4 text-center-mobile"><?=$iluminacion['titulo-iluminacion']?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 over-f height-350">
            <p class="text-paragraph-sn-mg slideText"><?=$iluminacion['texto-1']?></p>
            <p class="text-paragraph-sn-mg slideText d-non"><?=$iluminacion['texto-2']?></p>
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
            <div class="border-black">
                <div class="content-text">
                    <p class="text-paragraph-s"><?=$iluminacion['texto-3']?></p>
                    <p class="text-paragraph-s"><?=$iluminacion['texto-4']?></p>
                
                    <p class="text-paragraph-s"><?=$iluminacion['texto-5']?></p>
                    <p class="text-paragraph-s"><?=$iluminacion['texto-6']?></p>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mgtop-4">
            <div>
                <div class="contain-gallery" id="gallery">
                    <span></span>
                    <div class="subcontain-gallery">
                        <div class="contain-img flex">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/1.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/2.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/3.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/4.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/5.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/6.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/7.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/8.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/9.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/10.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/11.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/12.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/13.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/14.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/15.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/16.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/17.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/18.jpeg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/19.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/20.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/21.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/22.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/23.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/24.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/25.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/26.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/27.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/28.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/29.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/30.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/31.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/32.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/33.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/34.jpg" alt="Iluminación para eventos">
                            <img class="img-gallery img-fluid" src="./assets/fotos/iluminacion/35.jpg" alt="Iluminación para eventos">
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
<section class="section-mg mt-5 row justify-content-center">
    <div class="cont-black-one img-content-iluminacion" title="Servicio audiviosual Cancún iluminacion pwevents">
        <div class="padding-img-black">
            <div class="flex justify-content-center">
                <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$iluminacion['iluminacion']?></h3>
                <img src="./assets/img/iluminacion.png" alt="Icono de iluminación" class="icon-black">
            </div>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['iluminacion-text-one']?></p>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['iluminacion-text-one']?></p>
        </div>
    </div>
    <div class="cont-black-one img-content-pantallas mboth" title="Servicio audiviosual Cancún pantallas led pwevents">
        <div class="padding-img-black"style="height:100%;">
            <div class="flex justify-content-center">
                <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$iluminacion['pantallas-led']?></h3>
                <img src="./assets/img/pantallas.png" alt="Icono de pantallas led" class="icon-black">
            </div>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['pantallas-led-text-one']?></p>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['pantallas-led-text-two']?></p>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['pantallas-led-text-three']?></p>
        </div>
    </div>
    <div class="cont-black-one img-content-sonido" title="Servicio audiviosual cancún sonido pwevents">
        <div class="padding-img-black">
            <div class="flex justify-content-center">
                <h3 class="font-weight-bold mr-3 size-m-subtitle"><?=$iluminacion['sonido']?></h3>
                <img src="./assets/img/sonido.png" alt="Icono de sonido" class="icon-black">
            </div>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['sonido-text-one']?></p>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['sonido-text-two']?></p>
            <p class="text-justify tex-small-benefits"><?=$iluminacion['sonido-text-three']?></p>
        </div>
    </div>
</section>
<section class="section-pd">
    <p class="font-weight-bold text-center size-m-title"><?=$iluminacion['text-7']?></p>
    <div class="contain-black">
        <div class="hide-ct">
            <div class="carrusel-text col-12">
                <div class="carrusel-text-item col-12"><p><?=$iluminacion['slide-text-one']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$iluminacion['slide-text-two']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$iluminacion['slide-text-three']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$iluminacion['slide-text-four']?></p></div>
                <div class="carrusel-text-item col-12"><p><?=$iluminacion['slide-text-five']?></p></div>
            </div>
        </div>
    </div>
</section>
<section>
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