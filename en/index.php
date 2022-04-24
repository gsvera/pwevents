<?php 
session_start();
if(!isset($_SESSION['la'])){
    $_SESSION['la'] = "esp";
}
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
    <title>Equipo audiovisual y producción de eventos | PW events Cancún</title>
    <meta name="description" content="Más de 10 años de experiencia produciendo eventos corporativos en Cancún y Riviera Maya, contamos con amplia carta de servicios y tecnología audiovisual">
    <meta name="author" content="Pw events | Equipo audiovisual y producción de eventos">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta property="og:title" content="Equipo audiovisual y producción de eventos | PW events Cancún">
    <meta property="og:site_name" content="PW events Cancún">
    <meta property="og:url" content="http://www.pweventscancun.com/">
    <meta property="og:description" content="Más de 10 años de experiencia produciendo eventos corporativos en Cancún y Riviera Maya, contamos con amplia carta de servicios y tecnología audiovisual">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.pweventscancun.com/assets/seccion/portada_home.png">
    <script type="application/ld+json">
        {
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "pw events cancun",
        "logo": "http://www.pweventscancun.com/assets/img/logo-blanco.png",
        "url": "http://www.pweventscancun.com/",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Cancun, Quintana roo",
            "addressLocality": "Cancún",
            "addressRegion": "Quintana roo",
            "postalCode": "77500",
            "addressCountry": "Mexico"
        },
        "sameAs": ["https://www.facebook.com/PWEVENTScancun/", "https://www.instagram.com/pw_events/"]
        }
    </script>
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section>
    <div class="video-home" title="Banner PWEvents">
    </div>
</section>
<section class="section-mg">
    <div class="d-flex padd-mobiles justify-content-center">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5" style="padding-top:5%;">
            <h1 class="subtitle size-m-subtitle align-middle"><?=$home['subtitle-2']; ?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
            <p class="text-paragraph-sn-mg"><?=$home['texto-1']; ?></p>
        </div>
    </div>
    <div class="contain-black">
        <div class="d-flex justify-content-center">
            <div class="content-p-black col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <p class="text-white text-justify"><?=$home['texto-2'] ?></p>
            </div>
            <div class="cont-btn col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <a href="#contacto">
                    <button class="btn-contact align-middle"style="font-size:.9em;"><?=$home['contactar'] ?></button>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section-mg-text d-wrap">
    <div class="text-center">
        <img src="./assets/seccion/seccion-galeria.jpg" class="img-character" alt="Evento en atardecer">
        <div class="cont-slid-black">
            <div class="cont-item-black flex">
                <div class="item-black content-text-black">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$home['subtitle-3'] ?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$home['texto-3'] ?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$home['subtitle-5'] ?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$home['texto-5'] ?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$home['subtitle-4'] ?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$home['texto-4'] ?></p>
                </div>
                <div class="item-black content-text-black d-non">
                    <h3 class="subtitle size-m-subtitle text-white text-left"><?=$home['subtitle-6'] ?></h3>
                    <div class="line-item-black"></div>
                    <p class="text-paragraph-sn-mg text-white"><?=$home['texto-6'] ?></p>
                </div>
            </div>
            <div class="text-center">
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider1" checked><label for="bullet-slider1"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider2"><label for="bullet-slider2"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider3"><label for="bullet-slider3"></label>
                <input class="bullet bullet-white btn-radio-slid-black" type="radio" name="bullet-slider" id="bullet-slider4"><label for="bullet-slider4"></label>
            </div>
        </div>
    </div>
</section>
<div class="col-12 content-benefits mt-5">
    <h2 class="subtitle text-center size-m-subtitle"><?=$home['subtitle-7'] ?></h2>
    <p class="text-paragraph-sn-mg"><?=$home['texto-7'] ?></p>
</div>    



<section class="section-mg">
    <div class="d-flex padd-mobiles justify-content-center">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 br-black" style="padding-top:6%;">
            <h2 class="text-center subtitle size-m-subtitle"><?=$home['titulo-eventos'] ?></h2>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
        <p class="text-justify"><?=$home['texto-11'] ?></p>
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