
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
  <!-- <link rel="stylesheet" href="../css/reservas.css"> -->
  <link rel="stylesheet" href="../css/reservasNuevo.css">
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
                        <li><a href="#">Reservaciones</a></li>
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
            <h2>¡Reserva ya!</h2>

            <div class="container-reserva-ya" >
                
                <form action="../model/MReservar.php" method="post">
                    <label for="fechaReserva">Fecha de reserva: </label>
                    <input type="date" id="fechaReserva" name="fechaReserva" min="2024-02-14" max="2024-12-31" required>
                    <br><br>
                    <label for="horaReserva">Hora de reserva: </label>
                    <input type="time" id="horaReserva" name="horaReserva" min="08:00" max="20:00" required>
                    <br><br>
                    <label for="numPersonas">Número de personas: </label>
                    <input type="number" id="numPersonas" name="numPersonas" min="1" max="10" required>
                    <br><br>
                    <label for="tipoReserva" >Tipo de reserva: </label>
                    <select id="tipoReserva" name="tipoReserva" required>
                        <option value="1">Domicilio</option>
                        <option value="2">Restaurante</option>
                        <option value="3">Evento</option>
                        <option value="4">Catering</option>
                        <option value="5">Empresarial</option>
                        <option value="6">Familiar</option>
                        <option value="7">Amigos</option>
                        <option value="8">Cumpleaños</option>
                        <option value="9">Aniversario</option>
                        <option value="10">Boda</option>
                        <option value="11">Graduación</option>
                        <option value="12">Despedida de soltero</option>
                        <option value="13">Despedida de soltera</option>
                        <option value="14">Baby Shower</option>
                        <option value="15">Bautizo</option>
                        <option value="16">Primera Comunión</option>
                        <option value="17">Confirmación</option>
                        <option value="18">Quinceañera</option>
                        <option value="19">Bautizo</option>
                    </select>

                    <h3>Reserva tus platos</h3>
                    <p>Total: <strong id="total">0</strong></p>
                    <div class="cards">
                        <?php
                            include("../model/MMostrarParaReservar.php")
                        ?>

                    </div>

                    <input class="button-submit" type="submit" value="Reservar">
                </form>
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
                    <br>
                    <p><a href="../controller/controlador.php?var1=21" style="color: white; text-decoration:none;">Ayuda</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script>
    $(document).ready(function () {
        // Manejar el cambio en las cantidades de los platos
        $('input[name^="platoCantidad"]').on('input', function () {
            calcularTotal();
        });

        // Manejar el evento submit del formulario
        $('form').submit(function (event) {
            // Obtener el valor actual del total
            let total = parseFloat($('#total').text());

            // Validar si el total es mayor que 0
            if (total <= 0) {
                // Mostrar alerta
                alert('Debes escoger al menos un plato.');

                // Evitar el envío del formulario
                event.preventDefault();
            }
        });
    });

    function calcularTotal() {
        let total = 0;

        // Iterar sobre todas las entradas de cantidades
        $('input[name^="platoCantidad"]').each(function () {
            // Obtener el ID del plato y su precio
            let platoId = $(this).attr('name').replace('platoCantidad[', '').replace(']', '');
            let precio = parseFloat($('#precio' + platoId).text().replace('$', ''));

            // Calcular el subtotal del plato (cantidad * precio)
            let cantidad = parseInt($(this).val(), 10);
            let subtotal = cantidad * precio;

            // Sumar al total general
            total += subtotal;
        });

        // Actualizar el elemento con el total
        $('#total').text(total.toFixed(2));
    }
</script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="../javascript/script.js"></script>
</body>
</html>
