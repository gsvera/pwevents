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
    <title>Pistas de baile y DJ en renta | PW events Cancún</title>
    <meta name="description" content="Contamos con distintos tipos de pistas de bailes y DJ para cualquier clase de evento y locación en Cancún y Riviera maya. ¡Tu evento será inolvidable!">
    <meta name="author" content="Pw events | Pistas de baile y DJ en renta">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section class="section-pd ptop-first">
    <div class="d-flex">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 text-center-mobile">
            <h1 class="subtitle size-m-subtitle mt-4"><?=$pista_baile['titulo-pista-baile']?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 padd-30 over-f height-350">
            <p class="text-paragraph-sn-mg slideText"><?=$pista_baile['texto-1']?></p>
            <p class="text-paragraph-sn-mg slideText d-non"><?=$pista_baile['texto-2']?></p>
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
                    <p class="text-paragraph-s size-mob-text"><?=$pista_baile['texto-3']?></p>
                    <p class="text-paragraph-s size-mob-text"><?=$pista_baile['texto-4']?></p>
                </div>
                <!-- <div class="content-text d-non">
                    <p class="text-paragraph-s size-mob-text"></p>                
                </div> -->
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
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/1.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/2.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/3.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/4.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/5.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/6.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/7.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/8.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/9.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/10.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/11.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/12.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/13.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/14.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/15.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/16.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/17.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/18.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/19.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/20.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/21.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/22.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/23.jpg" alt="Pista de baile para evento">
                            <img class="img-gallery img-fluid" src="./assets/fotos/pista/24.jpg" alt="Pista de baile para evento">
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
<section class="section-pd">
    <div class="back-dj" title="Mesa de dj">
        <div class="black-back-dj">
            <div>
                <p class="text-white font-weight-bold"><?=$pista_baile['texto-5']?></p>
            </div>
        </div>
    </div>
</section>
<section class="section-pd d-flex">
    <p class="text-center font-weight-bold size-m-subtitle mb-5 d-none-mobile"><?=$pista_baile['texto-6']?></p>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="overflow:hidden;">
        <div class="carrusel-list">
            <div class="carrusel-list-item">
                <img src="./assets/seccion/vintage.jpg" alt="Pista vintage" class="img-lista">
                <p class="text-list-item"><?=$pista_baile['lista-1']?></p>
            </div>
            <div class="carrusel-list-item" style="display:none;">
                <img src="./assets/seccion/galaxy.jpg" alt="Pista galaxy" class="img-lista">
                <p class="text-list-item"><?=$pista_baile['lista-2']?></p>
            </div>
            <div class="carrusel-list-item" style="display:none;">
                <img src="./assets/seccion/27-canales.jpg" alt="Pista galaxy" class="img-lista">
                <p class="text-list-item"><?=$pista_baile['lista-3']?></p>
            </div>
            <div class="carrusel-list-item" style="display:none;">
                <img src="./assets/seccion/4-canales.jpg" alt="Pista galaxy" class="img-lista">
                <p class="text-list-item"><?=$pista_baile['lista-4']?></p>
            </div>
            <div class="carrusel-list-item" style="display:none;">
                <img src="./assets/seccion/cristal.jpg" alt="Pista galaxy" class="img-lista">
                <p class="text-list-item"><?=$pista_baile['lista-5']?></p>
            </div>
        </div>
        <div class="col-12">
            <img src="./assets/img/left-arrow.png" alt="Flecha negra" class="arrow-left">
            <img src="./assets/img/left-arrow.png" alt="Flecha negra" class="arrow-right">
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none-desktop">
        <div class="center-vert">
            <p class="text-center font-weight-bold size-m-title mb-5"><?=$pista_baile['texto-6']?></p>
        </div>
    </div>
    
    <div class="d-flex mt-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2 class="font-weight-bold text-center size-m-subtitle"><?=$pista_baile['subtitulo-dj']?></h2>
            <div class="padd-30 over-f height-350">
                <div class="slideTextThree">
                    <p class="text-justify"><?=$pista_baile['texto-8']?></p>
                    <p class="text-justify"><?=$pista_baile['texto-9']?></p>
                </div>
                <div class="slideTextThree d-non">
                    <p class="text-justify"><?=$pista_baile['texto-10']?></p>
                </div>
                <div class="text-center">
                    <input class="d-non btn-radio-slid-three bullet-black" type="radio" name="slideThree" id="slideThree" checked>
                    <label for="slideThree"></label>
                    <input class="d-non btn-radio-slid-three bullet-black" type="radio" name="slideThree" id="slideThree2">
                    <label for="slideThree2"></label>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6col-lg-6 col-xl-6 pt-4">
            <div class="content-black">
                <div class="content-text-four">
                    <p class="text-justify"><?=$pista_baile['texto-13']?></p>
                </div>
                <!-- <div class="content-text-four d-non">
                    
                </div> -->
                <!-- <div class="text-center">
                    <input class="d-non btn-four bullet-white" type="radio" name="btnFour" id="btnFour" checked>
                    <label for="btnFour"></label>
                    <input class="d-non btn-four bullet-white" type="radio" name="btnFour" id="btnFour2">
                    <label for="btnFour2"></label>
                </div> -->
            </div>
        </div>
    </div>
    <div class="back-dj-equipement my-5" title="Dj">
        <div class="black-back-dj">
            <p class="text-justify text-white font-weight-bold"><?=$pista_baile['texto-11']?></p>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 center-vert">
            <div class="content-black-small px-4">
                <p class="text-justify"><?=$pista_baile['texto-12']?></p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
            <img src="./assets/img/dj.png" alt="Dj fiesta" class="img-dj">
        </div>
    </div>
    <div class="d-flex">
        <!-- <div class="back-led-dj" title="Pista DJ">
        </div> -->
        <img src="./assets/seccion/pista-color.jpg" alt="Pista DJ" class="back-led-dj">
        <div class="black-div">
            <div class="col px-5">
                <p class="text-justify text-white"><?=$pista_baile['texto-14']?></p>
            </div>
        </div>
    </div>
    <div class="text-center col size-max">
        <p class="font-weight-bold"><?=$pista_baile['texto-15']?></p>
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