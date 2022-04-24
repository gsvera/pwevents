    
    <nav class="nav-menu">
        <div class="d-flex">
            <div class="content-logo text-center">
                <a href="./">
                    <img src="./assets/img/logo-blanco.png" class="logo-menu" alt="Logo pwevents cancún">
                </a>
            </div>
            <ul class="menu-nav row d-none-desktop">
                <li class="item-menu"><a href="./"><?=$layout['home']; ?></a></li>
                <li class="item-menu"><a href="nosotros"><?=$layout['nosotros']; ?></a></li>
                <li class="item-menu"><?=$layout['servicios']; ?>
                    <ul class="sub-menu">
                        <li class="item-menu"><a href="audio-iluminacion-bodas-cancun"><?=$layout['bodas'];?></a></li>
                        <li class="item-menu"><a href="pista-baile-dj-cancun"><?=$layout['pista-baile']; ?></a></li>
                        <li class="item-menu"><a href="pantallas-iluminacion-eventos-cancun"><?=$layout['equipo-audiovisual'];?></a></li>
                        <li class="item-menu"><a href="entretenimiento-props-cancun"><?=$layout['entretenimiento']; ?></a></li>
                        <li class="item-menu"><a href="grupos-y-convenciones-cancun"><?=$layout['grupos-convenios']; ?></a></li>
                        <li class="item-menu"><a href="fotografia-video-eventos-cancun"><?=$layout['fotografia-video']; ?></a></li>
                    </ul>
                </li>
                <li class="item-menu">
                    <a href="#contacto" class="btn-cotizar"><?=$layout['contactanos']; ?></a>
                </li>

                <?php
                    if($_SESSION['la'] == 'esp'){
                        ?>
                        <a href="./en/?la=eng">
                            <li class="item-menu">
                                <img src="./assets/img/usa.png" alt="Logo bandera USA" class="logo-lang">
                            </li>
                        </a>
                        <?php
                    }else{
                        ?>
                        <a href="./?la=esp">
                            <li class="item-menu">
                                <img src="./assets/img/mexico.png" alt="Logo bandera México" class="logo-lang">
                            </li>
                        </a>
                        <?php
                    }
                ?>
            </ul>
        </div>
        <div class="d-none-mobile nav-menu-mobile">
            <div class="d-flex col-12">
                <div class="col-6 pt-2">
                    <a href="tel:9981866678" class=" text-white">
                        <i class="fa fa-phone" aria-hidden="true"></i> (998) 186 6678
                    </a>
                </div>
                <div class="col-3 pt-2">
                

                <!-- validacion de idiomas -->
                <?php
                    if($_SESSION['la'] == 'esp'){
                        ?>
                        <a href="./en/?la=eng">
                            <li class="item-menu">
                                <img src="./assets/img/usa.png" alt="Logo bandera USA" class="logo-lang">
                            </li>
                        </a>
                        <?php
                    }else{
                        ?>
                        <a href="./?la=esp">
                            <li class="item-menu">
                                <img src="./assets/img/mexico.png" alt="Logo bandera México" class="logo-lang">
                            </li>
                        </a>
                        <?php
                    }
                ?>
                    
                </div>
                <button class="btn text-center col-3" id="btn-menu">
                    <i class="fa fa-bars fa-2x text-white" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- MENU mobile -->
    <ul class="menu-drop-mobile">
        <li class="item-menu"><a href="./"><?=$layout['home'] ?></a></li>
        <li class="item-menu"><a href="nosotro"><?=$layout['nosotros'] ?></a></li>
        <li class="item-menu"><?=$layout['servicios'] ?>
            <ul class="sub-menu">
                <li class="item-menu"><a href="audio-iluminacion-bodas-cancun"><?=$layout['bodas'] ?></a></li>
                <li class="item-menu"><a href="pista-baile-dj-cancun"><?=$layout['pista-baile'] ?></a></li>
                <li class="item-menu"><a href="pantallas-iluminacion-eventos-cancun"><?=$layout['equipo-audiovisual'] ?></a></li>
                <li class="item-menu"><a href="entretenimiento-props-cancun"><?=$layout['entretenimiento'] ?></a></li>
                <li class="item-menu"><a href="grupos-y-convenciones-cancun"><?=$layout['grupos-convenios'] ?></a></li>
                <li class="item-menu"><a href="fotografia-video-eventos-cancun"><?=$layout['fotografia-video'] ?></a></li>
            </ul>
        </li>
        <li class="item-menu">
            <a href="#contacto"><?=$layout['contactanos'] ?></a>
        </li>
    </ul>