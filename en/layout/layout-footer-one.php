<section class="mt-5">
        <div id="contacto">
            <h2 class="text-center size-m-subtitle font-weight-bold text-uppercase"><?=$layout['contactanos-ahora'] ?></h2>
            <p class="text-paragraph">
                <?=$layout['texto-contactanos'] ?>
            </p>
            <form class="box-contact" method="post" id="formulario">
                <!-- FALTA TOKEN -->
                <span><?=$layout['nombre_completo'] ?>*</span>
                <input class="input-contact" name="name" type="text" required>
                <span><?=$layout['ciudad_estado'] ?>*</span>
                <input class="input-contact" name="city" type="text" required>
                <span><?=$layout['pais'] ?>*</span>
                <input class="input-contact" name="country" type="text">
                <span><?=$layout['telefono'] ?>*</span>
                <input class="input-contact" name="phone" type="text" required>
                <span><?=$layout['email'] ?>*</span>
                <input class="input-contact" name="email" type="text" required>
                <span><?=$layout['mensaje'] ?>*</span>
                <textarea class="input-contact-text" name="message" id="" cols="30" rows="10" required></textarea>
                <div class="text-center">
                    <input class="btn-submit" type="button" value="<?=$layout['contactanos'] ?>" onclick="send()">
                </div>
            </form>
        </div>
    </section>
    <!-- End section contact -->
    <footer class="footer">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <ul class="p-non-mobile">
                    <a href="./">
                        <li class="list-footer text-center-mobile"><?=$layout['home'] ?></li>
                    </a>
                    <a href="about-us">
                        <li class="list-footer text-center-mobile"><?=$layout['nosotros'] ?></li>
                    </a>
                    <li class="list-footer text-center-mobile"><?=$layout['aviso-privacidad'] ?></li>
                    <li class="list-footer text-center-mobile"><?=$layout['mapa-sitio'] ?></li>
                      
                    <?php
                    if($_SESSION['la'] == 'esp'){
                        ?>
                        <a href="./?la=eng">
                            <li class="list-footer text-center-mobile"><?=$layout['lang'] ?></li>
                        </a>
                        <?php
                    }else{
                        ?>
                        <a href="../?la=esp">
                            <li class="list-footer text-center-mobile"><?=$layout['lang'] ?></li>
                        </a>
                        <?php
                    }
                ?>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <p class="text-contact"><?=$layout['llamanos'] ?> <a href="tel:+9982944774">+52 (998) 294 4774</a></p>
                <p class="text-contact">E-mail: <a href="mailto:ltorres@pweventscancun.com">ltorres@pweventscancun.com</a></p>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-center">
                <a class="icon-social" href="https://www.facebook.com/PWEVENTScancun/" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <!-- <a href="" class="icon-social" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a> -->
                <!-- <a href="" class="icon-social" target="_blank">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a> -->
                <a href="https://www.instagram.com/pw_events/" class="icon-social" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cont-slogan">
            <img class="logo-footer" src="./assets/img/logo-footer.svg" alt="Logo pwevents">
            <p class="slogan-footer"><?=$layout['tu-lo-imaginas']?>, <br> <?=$layout['lo-creammos']?></p>
        </div>
        <a class="return" id="backToTop" href="#">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </a>
    </footer>
