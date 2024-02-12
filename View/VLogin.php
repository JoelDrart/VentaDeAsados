<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/styleLog.css">
    
</head>
<body class="body-login-registrar">

    <div class="container-login-registrar" id="login-container">
        <h2>Login</h2>
        <form action="../grupo/Model/MValidarLogin.php" method="POST">
            <label class="lbl-login-registrar" for="login-username">Usuario:</label>
            <input class="input-logi-registrar" type="text" id="login-username" name="login-username" required>

            <label class="lbl-login-registrar" for="login-password">Contraseña:</label>
            <input class="input-logi-registrar" type="password" id="login-password" name="login-password" required>

            <button class="btn-login-registrar" id="login-button" type="submit">Acceder</button>
        </form>

        <br>
            <a href="Controller/controlador.php?var1=1">Crear Cuenta</a>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="javascript/scriptLog.js"></script>

</body>
</html>