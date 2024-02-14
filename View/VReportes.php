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
        
        <img class="logo-1" src="../images/logo.png" alt="">
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="../images/menu.png" class="menu-icono" alt="">
        </label>
            <nav class="navbar">
            <div class ="menu-1">
                    <ul>
                        <li><a href="../controller/controlador.php?var1=6">Usuarios</a></li>
                        <li><a href="../View/VIngresarPlato.php">Productos</a></li>
                        <li><a href="../controller/controlador.php?var1=4">Reportes</a></li>
                        <li><a href=""></a> </li>
                        <li><a href=""></a> </li>
                        <li><a href=""></a> </li>
                        <li><a href=""></a> </li>
                    </ul>
                </div>

                <img class="logo-2" src="../images/logo.png" alt="">
                <div class="menu-2">
                    <ul>
                        <li><a href="">Admin</a></li>
                        <li><a href="../controller/controlador.php?var1=5">Inicio</a></li>
                        <li><a href='../Model/MEditarClientes.php'>Clientes</a></li>
                        <li><a href='../model/MLogout.php'>Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class ="header-content container">
            <div class ="swiper mySwiper-1">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 1</h1>
                                <p style="text-align: left">Reporte de todos los usuarios</p>
                                
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=11" class="btn-1">Ingresar</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/reporte1.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 2</h1>
                                <p style="text-align: left">Reporte de platos</p>
                                
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=12" class="btn-1">Ingresar</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/producto.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 3</h1>
                                <p style="text-align: left">Reporte de todas las reservas</p>
                                
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=13" class="btn-1">Ingresar</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/reporte1.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 4</h1>
                                <p style="text-align: left">Reporte de Opiniones</p>
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=14" class="btn-1">Ingresar</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/producto.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 5</h1>
                                <p style="text-align: left">Reporte de los platos más vendidos</p>
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=15" class="btn-1">VER</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/producto.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <h1>Reporte 6</h1>
                                <p style="text-align: left">Reporte platos según su tipo</p>
                                <div class="botones">
                                    <a href="../controller/controlador.php?var1=16" class="btn-1">Ingresar</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="../images/producto.jpg" alt="">
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
