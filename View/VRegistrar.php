<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../css/styleLog.css">
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
                        <li><a href="#">Menu</a></li>
                    </ul>
                </div>

                <img class="logo-2" src="../images/logo.png" alt="">
                <div class="menu-2">
                    <ul>
                        <li><a href="../View/VLogin.php">Ingresar</a></li>
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

    <section class="body-login-registrar">
        <div class="container-login-registrar" id="login-container">
            <h2>Registrar</h2>
            <br>
            <form action="../Model/MNuevoUsuario.php" method="POST">
                <label class="lbl-login-registrar" for="register-username">User name:</label>
                <input class="input-login-registrar" type="text" id="register-username" name="register-username" required>

                <label class="lbl-login-registrar" for="register-name">Nombre:</label>
                <input class="input-login-registrar" type="text" id="register-name" name="register-name" required>
                
                <label class="lbl-login-registrar" for="register-lastname">Apellido:</label>
                <input class="input-login-registrar" type="text" id="register-lastname" name="register-lastname">
                
                <label class="lbl-login-registrar" for="register-email">Correo Electrónico:</label>
                <input class="input-login-registrar" type="email" id="register-email" name="register-email" required>
                
                <label class="lbl-login-registrar" for="register-phone">Teléfono:</label>
                <input class="input-login-registrar" type="tel" id="register-phone" name="register-phone" required pattern="[0-9]{10}">

                <label class="lbl-login-registrar" for="register-password">Contraseña:</label>
                <input class="input-login-registrar" type="password" id="register-password" name="register-password" required>
                
                <!-- <label class="lbl-login-registrar" for="register-type">Tipo de usuario:</label>
                <select class="input-login-registrar" id="register-type" name="register-type" required>
                    <option value="1">Admin</option>
                    <option value="2">Cliente</option>
                </select> -->
                <br>
                <br>
                <button class="btn-login-registrar" id="register-button" type="submit">Crear Cuenta</button>
            </form>
        </div>
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

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="../javascript/scriptLog.js"></script>

</body>
</html>