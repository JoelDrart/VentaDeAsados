<?php
include("../Config/confg.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['register-username'];

    // Verificar si existe el register-username
    if (isset($usuario)) {
        // Consultar todos los datos del usuario
        $sql = "SELECT * FROM Users WHERE nombreUsuario='$usuario'";
        $resultado = mysqli_query($conexion, $sql);

        $filas = mysqli_num_rows($resultado);

        if ($filas) {
            $usuario_info = mysqli_fetch_assoc($resultado);
            // Obtener los datos del usuario
            $userId = $usuario_info['userId'];
            $nombre = $usuario_info['nombre'];
            $apellido = $usuario_info['apellido'];
            $email = $usuario_info['email'];
            $telefono = $usuario_info['telefono'];
            $clave = $usuario_info['clave'];
            $tipoUsuario = $usuario_info['tipoUsuario'];

            // Mostrar el formulario para eliminar
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Eliminar Usuario</title>
                <link rel="stylesheet" href="../css/styleEditar.css">
            </head>
            <body>
                <form action="../model/MEliminar.php" method="POST">
                    <h1>DATOS DEL USUARIO</h1>
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>Nombre de Usuario</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Email</td>
                            <td>Teléfono</td>
                            <td>Clave</td>
                            <td>Tipo de Usuario</td>
                        </tr>
                        <tr>
                            <td><input type="text" size="4" name="userId" value="<?php echo $userId; ?>" readonly /></td>
                            <td><input type="text" name="nombreUsuario" value="<?php echo $usuario; ?>" readonly /></td>
                            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>" readonly /></td>
                            <td><input type="text" name="apellido" value="<?php echo $apellido; ?>" readonly /></td>
                            <td><input type="text" name="email" value="<?php echo $email; ?>" readonly /></td>
                            <td><input type="text" name="telefono" value="<?php echo $telefono; ?>" readonly /></td>
                            <td><input type="text" name="clave" value="<?php echo $clave; ?>" readonly /></td>
                            <td><input type="text" name="tipoUsuario" value="<?php echo $tipoUsuario; ?>" readonly /></td>
                        </tr>
                    </table>
                    <input type="submit" value="Eliminar">
                </form>
            </body>
            </html>
            <?php
        } else {
            echo "<h1>Error: Usuario incorrecto</h1>";
        }

        mysqli_free_result($resultado);
        mysqli_close($conexion);
    } else {
        echo "<h1>Error: Debes ingresar un usuario</h1>";
        exit;
    }
} else {
    echo "<h1>Error: Acceso no permitido</h1>";
    exit;
}
?>
