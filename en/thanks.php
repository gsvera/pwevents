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
    <title>PW events Cancún</title>
</head>
<body>
<?php
    include_once('./layout/layout-head-one.php');
?>
<section class="section-pd">
    <div class="mt-5">
        <h1 class="text-center title-thanks FivoSans-Bold"><?=$gracias["gracias-uno"];?><br class="display-min"> <?=$gracias["gracias-dos"];?></h1>
        <div class="content-thanks text-center">
            <p class="text-center text-white fs-medium-thanks">
                <strong class="FivoSans-Bold"><?=$gracias["mensaje-uno"];?> <br> <?=$gracias["mensaje-dos"];?></strong><br>
                <?php
                    if($_SESSION["la"] == "esp"){
                        ?>
                        <span class="FivoSans-Regular">así que te sugerimos estar al pendiente de tu bandeja de entrada o bandeja de correo no deseado</span><span class="FivoSans-Oblique"> (SPAM).</span>
                        <?php
                    }else{
                        ?>
                        <span class="FivoSans-Regular">so we suggest you be aware of your inbox or </span><span class="FivoSans-Oblique">SPAM </span><span>tray</span>
                        <?php
                    }
                ?>
                <p></p>
            </p>
            <hr>
            <p class="text-center FivoSans-Regular">
                No olvides seguirnos en nuestras redes sociales:
            </p>
            <div>
                <a class="icon-social" href="https://www.facebook.com/PWEVENTScancun/" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <!-- <a href="" class="icon-social" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a> -->
                <!-- <a href="" class="icon-social" target="_blank">
                    <i class="fa fa-youtube" aria-hidden="true"></i> -->
                </a>
                <a href="https://www.instagram.com/pw_events/" class="icon-social" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>
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