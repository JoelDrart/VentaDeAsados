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
        
        <img class="logo-1" src="images/logo.png" alt="">
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="../images/menu.png" class="menu-icono" alt="">
        </label>
            <nav class="navbar">
                <div class ="menu-1">
                    <ul>
                        <li><a href="../controller/controlador.php?var1=5">Inicio</a></li>
                        <li><a href="../controller/controlador.php?var1=6">Clientes</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Ventas</a></li>
                        <li><a href="#">Reportes</a></li>
                    </ul>
                </div>

                <img class="logo-2" src="../images/logo.png" alt="">
                <div class="menu-2">
                    <ul>
                        <li><a href="">Admin</a></li>
                        <li><a href='../model/MLogout.php'>Cerrar Sesión</a></li>
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
                                    <a href="#" class="btn-1">Comprar</a>
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
                                    <a href="#" class="btn-1">Menu</a>
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
                                    <a href="#" class="btn-1">Menu</a>
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

    

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="../javascript/script.js"></script>
</body>
</html>
