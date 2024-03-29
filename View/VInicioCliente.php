<?php
// Inicia la sesión
session_start();
//include("../Config/confg.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>

        <div class="menu container">
        
        <img class="logo-1" src="../images/logo.svg" alt="">
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="../images/menu.png" class="menu-icono" alt="">
        </label>
            <nav class="navbar">
                <div class ="menu-1">
                    <ul>
                        <li><a href="../controller/controlador.php?var1=4">Inicio</a></li>
                        <li><a href="#">Reservaciones</a></li>
                        <li><a href="../View/VProductos.php">Menu</a></li>
                    </ul>
                </div>

                <img class="logo-2" src="../images/logo.svg" alt="">
                <div class="menu-2">
                    
                    <ul>
                        <li><a href="">Cliente</a></li>
                    </ul>
                    <div class ="socials">
                        <a href="https://www.facebook.com/esquina.sabor/">
                            <div class="social">
                                <img src="../images/s1.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.tiktok.com/@esquinadelsabor7">
                            <div class="social">
                                <img src="../images/s2.svg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="social">
                                <img src="../images/s3.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class ="header-content container">
            <div class ="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Carne</h1>
                                <p style="text-align: left">Carne de primera calidad, sabor auténtico y textura.</p>
                                <p style="text-align: left">Con un bocado será una experiencia única que deleitará tus sentidos. </p>
                                <p style="text-align: left">Sumérgete en un mundo de sabores intensos y aromas irresistibles.</p>
                                <div class="botones">
                                    <a href="../View/VProductos.php" class="btn-1">Menu</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/slider2.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Hamburguesas</h1>
                                <p style="text-align: justify">Disfruta de nuestras hamburguesas gourmet, elaboradas </p>
                                <p style="text-align: justify">con la más fina carne de res y una selección de </p>
                                <p style="text-align: justify">ingredientes frescos y deliciosos.</p>
                                <div class="botones">
                                    <a href="../View/VProductos.php" class="btn-1">Menu</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/slider1.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Tablitas</h1>
                                <p style="text-align: justify">Nuestras tablitas son una deliciosa combinación </p>
                                <p style="text-align: justify">de embutidos, carnes, pollo y papas, ofreciendo
                                <p style="text-align: justify">una experiencia gastronómica inigualable.</p>
                                <div class="botones">
                                    <a href="../View/VProductos.php" class="btn-1">Menu</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/slider3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>

    <section class="info container">
        <div class="info-img">
            <img src="../images/info.png" alt="">
        </div>
        <div class="info-txt">
            <h2>Nosotros</h2>
            <p style="text-align: justify;">Somos un restaurante especializado en deleitar paladares con exquisitos cortes de carne, asados, 
                tablitas con embutidos, pollo y carne, frescos camarones asados, así como tentadores platos de mar y tierra. 
                También ofrecemos una variedad de bebidas y aceptamos reservaciones para brindarte una experiencia gastronómica inolvidable.</p>
            <a href="#" class="btn-2">Más información</a>
        </div>
        
    </section>

    <section class="footer container">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.158831043319!2d-78.59463242503473!3d-1.041767798948205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47d5fa2e4b7bb%3A0xbc87183b9f4edc39!2sRestaurante%20Esquina%20del%20Sabor!5e0!3m2!1ses-419!2sec!4v1707764186550!5m2!1ses-419!2sec" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="horario">
        <div class="horario-info container">
            <h2>Información</h2>
            <div class="horario-txt">
                <div class="txt">
                    <img class="logo-2" src="../images/logo.svg" alt="">
                </div>
                <div class="txt">
                    <h4>Horario</h4>
                    <p>Lunes a viernes : 11 am - 7 pm</p>
                    <p>Sábado y Domingo : 10 am - 5 pm</p>
                </div>
                <div class="txt">
                    <h4>Teléfono</h4>
                    <p>123456789</p>
                    <p>987654321</p>
                </div>
                <div class="txt">
                    <h4>Redes Sociales</h4>
                    <div class ="socials">
                        <a href="#">
                            <div class="social">
                                <img src="../images/s1.svg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="social">
                                <img src="../images/s2.svg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="social">
                                <img src="../images/s3.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="../javascript/script.js"></script>
</body>
</html>

