<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="../css/styleReserva.css"> -->
  <link rel="stylesheet" href="../css/reservas.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <?php
// Inicia la sesión
session_start();
include("../Config/funciones.php");
?>

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
                        <li><a href="../controller/controlador.php?var1=1">Inicio</a></li>
                        <li><a href="../controller/controlador.php?var1=7">Reservaciones</a></li>
                        <li><a href="../controller/controlador.php?var1=8">Productos</a></li>
                    </ul>
                </div>

                <img class="logo-2" src="../images/logo.png" alt="">
                <div class="menu-2">
                    <ul>
                        <?php
                            // Verifica si el usuario está autenticado
                            if (isset($_SESSION['userId'])) {
                                // Usuario autenticado
                                $username = obtenerNombreUsuarioPorId($_SESSION['userId']);
                                echo "<li><span id='bienvenida'>¡Bienvenido, $username!</span></li>";
                                echo "<li><a href='../model/MLogout.php'>Cerrar Sesión</a></li>";
                            } else {
                                // Usuario no autenticado
                                echo '<li><a href="../controller/controlador.php?var1=2">Ingresar</a></li>';
                            }
                        ?>
                        <!-- 
                            <li><a href="../controller/controlador.php?var1=2">Login</a></li>
                        </ul> -->

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
    </header>
    
    <section class="containerPrincipal">
        <?php if (isset($_SESSION['userId'])): ?>
            <!-- el usuario está autenticado -->
            <h2>¡HUBO UN FALLO! Inténtalo más tarde</h2>

            <div class="container-reserva-ya" >
                <!-- Aqui pon la imagen del gato generado por la API -->
                <img src="" alt="" id="catAPI">
                
            </div>

            

        <?php else: ?>
            <!-- el usuario no está autenticado -->
            <h2>Debe iniciar sesión para hacer reservaciones.</h2>
        <?php endif; ?>
    </section>
    

    <section class="footer container">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.158831043319!2d-78.59463242503473!3d-1.041767798948205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47d5fa2e4b7bb%3A0xbc87183b9f4edc39!2sRestaurante%20Esquina%20del%20Sabor!5e0!3m2!1ses-419!2sec!4v1707764186550!5m2!1ses-419!2sec" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="horario">
        <div class="horario-info container">
            <h2>Información</h2>
            <div class="horario-txt">
                <div class="txt">
                    <img class="logo-2" src="../images/logo.png" alt="">
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
    <script>
    $(document).ready(function() {
    // API endpoint for a random cat image
    var apiUrl = 'https://api.thecatapi.com/v1/images/search';

    // Make the API request to get a random cat image
    $.get(apiUrl, function(data) {
        // Check if the response contains an image URL
        if (data && data.length > 0 && data[0].url) {
            // Set the src attribute of the #catAPI image tag
            $('#catAPI').attr('src', data[0].url).attr('alt', 'Random Cat Image');
        } else {
            // Handle the case when the API response doesn't contain a valid image
            console.error('Failed to fetch a cat image from the API.');
        }
    });
    });
    
    </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="../javascript/script.js"></script>
</body>
</html>
